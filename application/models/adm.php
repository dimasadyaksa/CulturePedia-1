<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class adm extends CI_Model{
	public function edit($id,$table1,$table2){
		$query = $this->db->query("select kode_provinsi,$table1.nama_provinsi,rumah_adat,pakaian_adat,adat_istiadat,pakaian,rumah  from $table1 JOIN $table2 WHERE $table1.kode_provinsi = '$id' AND $table2.nama_provinsi = $table1.nama_provinsi;");
		if($query->num_rows()>0){
			$data=$query->result_array();
			$query->free_result();
		}else{
			$data = 'haii';
		}
		return $data;
	}
}
