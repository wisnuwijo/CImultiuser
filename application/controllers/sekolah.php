<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sekolah extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}elseif($this->session->userdata('level') == 'member'){
			redirect('member/index');
		}elseif($this->session->userdata('level') == 'member1'){
			redirect('member1/index');
		}
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	public function index() {
		$data1['user'] = $this->m_data->tampil_data_sekolah()->result();
		$this->load->view('v_tampil',$data1);
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$this->load->view('sekolah/index', $data);
	}
	function tambah(){
		$this->load->view('sekolah/input_v');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$kepsek = $this->input->post('kepsek');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$web = $this->input->post('web');
		$data = array(
			'nama' => $nama,
			'kepsek' => $kepsek,
			'alamat' => $alamat,
			'telepon' => $telepon,
			'web' => $web,
			);
		$this->m_data->input_data_sekolah($data,'sekolah');
		redirect('sekolah/index?mode=sekolah&event=added');
	}
	function hapus($id){
	$where = array('id' => $id);
	$this->m_data->hapus_data_sekolah($where,'sekolah');
	redirect('sekolah/index?mode=sekolah&event=deleted');
	}
	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->m_data->edit_data($where,'sekolah')->result();
	$this->load->view('sekolah/edit',$data);
	}
	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$kepsek = $this->input->post('kepsek');
	$alamat = $this->input->post('alamat');
	$telepon = $this->input->post('telepon');
	$web = $this->input->post('web');

	$data = array(
		'nama' => $nama,
		'kepsek' => $kepsek,
		'alamat' => $alamat,
		'telepon' => $telepon,
		'web' => $web,
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data_sekolah($where,$data,'sekolah');
	redirect('sekolah/index?mode=sekolah&event=edited');
	//echo $level;
	}

}