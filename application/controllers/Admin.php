<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

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

	function hapus($id){
	$where = array('id' => $id);
	$this->m_data->hapus_data($where,'user');
	redirect('admin/index?mode=data_user&event=deleted');
	}

	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->m_data->edit_data($where,'user')->result();
	$this->load->view('admin/edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$username = $this->input->post('username');
	$level = $this->input->post('level');

	$data = array(
		'nama' => $nama,
		'username' => $username,
		'level' => $level
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'user');
	redirect('admin/index?mode=data_user');
	//echo $level;
	}

	function tambah(){
		$this->load->view('admin/input_v');
	}
	
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$level = $this->input->post('level');
		$password1 = $this->input->post('password');
		$password = md5($password1);
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'level' => $level,
			'password' => $password
			);
		$this->m_data->input_data($data,'user');
		redirect('admin/index?mode=data_user&event=added');
	}

	public function index() {
		$data1['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data1);
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$this->load->view('admin/index', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}