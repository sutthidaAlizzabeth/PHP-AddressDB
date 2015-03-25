<?php 
/**
* create by Sutthida (Alizzabeth)
* this controller is used when user want to query data or insert data;
*/
class co_address extends CI_Controller
{
	
	public function index()
	{
		if ($this->session->userdata('is_admin') == 1) {
			$result['data'] = FALSE;
			$result['msg'] = FALSE;
			$this->load->view('search', $result);
		} else {
			redirect('co_admin');
		}
		
	}

	public function search()
	{
		$type = $this->input->post('type');
		$key = $this->input->post('key');
		$this->load->model('mo_address');
		$result=FALSE;		
		switch ($type) 
		{
			case 'name':
				$result['data'] = $this->mo_address->searchByName($key);
				break;
			
			case 'company':
				$result['data'] = $this->mo_address->searchByCompany($key);
				break;
		}
		if ($result) {
			$result['msg'] = FALSE;
			$this->load->view('search', $result);
		} else {
			$result['msg'] = $key.' do not exist!!!';
			$result['data'] = FALSE;
			$this->load->view('search', $result);
		}
		
	}
/*
	public function getSingleData($id)
	{
		$this->load->model('mo_address');
		$result['data'] $this->mo_address->searchById($id);
		$this->load->view('single_Data', $result);
	}
*/
}


 ?>