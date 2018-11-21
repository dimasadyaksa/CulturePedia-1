<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class user_control extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function insert($table1,$table2,$data){
		$this->db->query();
	}

	public function user_post($author,$table1,$table2){
		$query = $this->db->query("select kode_provinsi,$table1.nama_provinsi,rumah_adat,pakaian_adat,adat_istiadat,pakaian,rumah  from $table1 JOIN $table2 WHERE $table2.nama_provinsi = $table1.nama_provinsi AND $table1.Author = '$author';");
		if($query->num_rows()>0){
			$data=$query->result_array();
			$query->free_result();
		}else{
			$data = NULL;
		}
		return $data;
	}

	public function user_exists($username){
	    $this->db->where('username' , $username);
		$query = $this->db->get('user_data');

		if($query->num_rows()>0){
			   return true;
		}else {
		 return false;
		}
	}

	public function validasi(){
		$query = $this->db->query("select * from user_data;");
			$data = $query->result_array();
			$query->free_result();
			return $data;
	}

	public function akses($username){
		$this->db->where('username',$username);
		$query = $this->db->get('user_data');
		$data = $query->result_array();
		
		print_r($data);
		if($query->result_array()>0){
			if($data[0]['akses']==1){
				echo $data[0]['akses'];
				return true;
			}else{
				return false;
			}
		}else{
			echo "unavailable";
		}
		

	}

}