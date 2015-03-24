<?php 
/**
* 
*/
class co_address extends CI_Controller
{
	
	public function index()
	{
		if ($this->session->userdata('fullname') == 'Administrator') {
			$this->load->view('search');

		} else {
			redirect('co_admin');
		}
		
	}
}

 ?>