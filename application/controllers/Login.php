<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//load Login_model.php	
		$this->load->model('login_model');
		//check the username is already set up or not
		if ($this->session->userdata('username')) {
			//if username is already set up, then check the level of username is admin or member
			if($this->session->userdata('level') == 'admin'){
				redirect('admin/index');
			}elseif($this->session->userdata('level') == 'member'){
				redirect('member/index');
			}elseif($this->session->userdata('level') == 'member1'){
				redirect('member1/index');
			}
		}
	}

	public function index(){
		$data = array('error' => ''
					);
		$this->load->view('form_login', $data);
	}
	public function wrong(){
		$data = array('error' => ''
					);
		$this->load->view('wrong', $data);
	}

	//function for processing login form
	public function login_process1()	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
					//calling check_user() function in Login_model.php
		$result = $this->login_model->check_user($username, $password); 

		if($result->num_rows() > 0){
			foreach ($result->result() as $row) {
				$id = $row->id;
				$username = $row->username;
				$level = $row->level;
			}
		$newdata = array(
			        'id'  => $id,
			        'username' => $username,
			        'level' => $level,
			        'logged_in' => TRUE
		);
		//echo "$level";
		if($level=='member') {
				echo "ini member";
				//redirect('member/index');
			}

		//redirect('member/index');
		}
	}

	public function login_process(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
					//calling chech_user() function in Login_model.php
		$result = $this->login_model->check_user($username, $password); 

		if($result->num_rows() > 0){
			foreach ($result->result() as $row) {
				$id = $row->id;
				$username = $row->username;
				$level = $row->level;
			}

			$newdata = array(
			        'id'  => $id,
			        'username' => $username,
			        'level' => $level,
			        'logged_in' => TRUE
			);
			
			//set up session data
			$this->session->set_userdata($newdata);
			if($this->session->userdata('level')=='member') {
				redirect('member/index');
			} elseif ($this->session->userdata('level')=='admin') {
				redirect('admin/index');
			} elseif ($this->session->userdata('level')=='member1') {
				redirect('member1/index');
			}

		}
		else{
			//echo "username/password salah";
			redirect('login/wrong');
		}
	}

	public function register(){
		$data = array('error' => ''
					);
		$this->load->view('form_register', $data);
	}
}