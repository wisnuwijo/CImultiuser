<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}elseif($this->session->userdata('level') == 'admin'){
			redirect('admin/index');
		}elseif($this->session->userdata('level') == 'member1'){
			redirect('member1/index');
		}
		$this->load->model('m_data');
        $this->load->helper('url');
	}

	public function index() {
		$data1['user'] = $this->m_data->tampil_data_siswa()->result();
		$this->load->view('v_tampil',$data1);
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$this->load->view('member/index', $data);
	}

	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->m_data->edit_data($where,'biodata')->result();
	$data['user1'] = $this->m_data->edit_data1('sekolah')->result();
	$this->load->view('member/edit',$data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
	function tambah(){
		$data1['user'] = $this->m_data->tampil_data_siswa1()->result();
		$this->load->view('v_tampil',$data1);
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		//$this->load->view('sekolah/index', $data);
		$this->load->view('member/input_v');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$ttl = $this->input->post('ttl');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$sekolah = $this->input->post('sekolah');
		$hobi = $this->input->post('hobi');
		$data = array(
			'nama' => $nama,
			'ttl' => $ttl,
			'alamat' => $alamat,
			'telepon' => $telepon,
			'sekolah' => $sekolah,
			'hobi' => $hobi,
			);
		$this->m_data->input_data_siswa($data,'biodata');
		redirect('member/index?mode=biodata&event=added');
	}
	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$ttl = $this->input->post('ttl');
	$alamat = $this->input->post('alamat');
	$telepon = $this->input->post('telepon');
	$sekolah = $this->input->post('sekolah');
	$hobi = $this->input->post('hobi');

	$data = array(
		'nama' => $nama,
		'ttl' => $ttl,
		'alamat' => $alamat,
		'telepon' => $telepon,
		'sekolah' => $sekolah,
		'hobi' => $hobi,
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'biodata');
	//echo $sekolah;
	redirect('member/index?mode=biodata');
	//echo $level;
	}
	function hapusbu($id){
	$where = array('id' => $id);
	$this->m_data->hapus_data_siswa($where,'biodata');
	redirect('member/index?mode=biodata&event=deleted');
	}
	function hapus($id){
	$where = array('id' => $id);
	$this->m_data->hapus_data_siswa($where,'biodata');
	redirect('member/index?mode=biodata&event=deleted');
	}

}