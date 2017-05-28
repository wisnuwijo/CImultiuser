<?php 

class M_data extends CI_Model{

	//ADMIN

	function tampil_data(){
		return $this->db->get('user');
	}
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function edit_data1($table){		
	return $this->db->get_where($table);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	//SEKOLAH

	function tampil_data_sekolah(){
		return $this->db->get('sekolah');
	}
	function input_data_sekolah($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_sekolah($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	function update_data_sekolah($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function edit_data_sekolah($where,$table){		
	return $this->db->get_where('sekolah',$where);
	}

	//SISWA

	function tampil_data_siswa(){
		return $this->db->get('biodata');
	}
	function tampil_data_siswa1(){
		return $this->db->get('sekolah');
	}
	function input_data_siswa($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_siswa($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

}
