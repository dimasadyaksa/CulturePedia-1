<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class postmodel extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function insert($table,$data){
		$this->db->insert($table,$data);
	}

	public function read2($table1,$table2){
		$query = $this->db->query("select * from $table1 JOIN $table2 WHERE $table1.nama_provinsi = $table2.nama_provinsi order by $table1.nama_provinsi ASC");
		if($query->num_rows()>0){
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
			$query->free_result();
		}else{
			$data = 'haii';
		}
		return $data;
	}

	

	public function read($table){
		$query = $this->db->query("select * from $table order by nama_provinsi ASC ");
		if($query->num_rows()>0){
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
			$query->free_result();
		}else{
			$data = 'haii';
		}
		return $data;
	}
}