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

	}
}

 ?>