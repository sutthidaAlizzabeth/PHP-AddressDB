<?php 
/**
* for login and login
*/
class co_admin extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('login');
		
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('mo_admin');
		$user = $this->mo_admin->login($username, $password);
		if ($user) {
			$array = array('fullname' => $user, 'is_admin' => '1');
			$this->session->set_userdata($array);
			redirect('co_address');
		} else {
			$this->session->set_flashdata('mgs','Username or Password is incorrect.');
			redirect('co_admin/index');
		}
		
	}
}

 ?>