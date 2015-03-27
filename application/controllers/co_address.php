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
		}
		else 
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

			$this->load->view('search', $result);
		}
		else 
		{
			redirect('co_admin');
		}
		
		
		
	}

	public function getSingleData($id)
	{
		if ($this->session->userdata('is_admin') == 1)
		{
			$this->load->model('mo_address');
			$result['row'] = $this->mo_address->searchById($id);
			$this->load->view('view_data', $result);
		}
		else 
		{
			redirect('co_admin');
		}
	}

	public function view_edit($id)
	{
		if ($this->session->userdata('is_admin') == 1)
		{
			$this->load->model('mo_address');
			$result['row'] = $this->mo_address->searchById($id);
			$this->load->view('view_edit', $result);
		}
		else 
		{
			redirect('co_admin');
		}
	}

	public function edit()
	{

	}

	public function view_insert()
	{
		$this->load->view('insert');
	}

}


 ?>