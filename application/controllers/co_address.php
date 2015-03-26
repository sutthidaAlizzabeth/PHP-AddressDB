<?php 
/**
* create by Sutthida (Alizzabeth)
* this controller is used when user want to query data or insert data;
*/
class co_address extends CI_Controller
{
	
	public function index()
	{
		if ($this->session->userdata('is_admin') == 1) 
		{
			$result['data'] = FALSE;
			$result['key'] = FALSE;
			$this->load->view('search', $result);
		} else 
		{
			redirect('co_admin');
		}
		
	}

	public function search()
	{
		if ($this->session->userdata('is_admin') == 1) 
		{
			$type = $this->input->get('type');
			$key = $this->input->get('key');
			$this->load->model('mo_address');
			$result=FALSE;
			/*
			*CHOSE FUNCTION OF SEARCH
			*/
			if ($type == 'name') 
			{
				$result['data'] = $this->mo_address->searchByName($key);
			} elseif ($type == 'company') 
			{
				$result['data'] = $this->mo_address->searchByCompany($key);
			} 
			else // $type == 'job'
			{
				$result['data'] = $this->mo_address->searchByJob($key);
			}

				$result['key'] = $key;
				$this->load->view('search', $result);
		} else 
		{
			redirect('co_admin');
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