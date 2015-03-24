<?php 
/**
* 
*/
class co_address extends CI_Controller
{
	
	public function index()
	{
		if ($this->session->userdata('is_admin') == 1) {
			$this->load->view('search');
		} else {
			redirect('co_admin');
		}
		
	}
}

 ?>