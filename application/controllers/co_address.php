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

	public function searchAll()
	{
		if ($this->session->userdata('is_admin') == 1)
		{
			$this->load->model('mo_address');
			$result['data'] = $this->mo_address->searchAll();
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
		if ($this->session->userdata('is_admin') == 1)
		{
			$this->load->view('insert');
		}
		else 
		{
			redirect('co_admin');
		}
	}

	public function insert()
	{
		if ($this->session->userdata('is_admin') == 1)
		{
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$job = $this->input->post('job');
			$job_description = $this->input->post('job_description');
			$company = $this->input->post('company');
			$url_company = $this->input->post('url_company');
			$address = $this->input->post('address');
			$post_code = $this->input->post('post_code');
			$tel = $this->input->post('tel');
			$mobile = $this->input->post('mobile');
			$fax = $this->input->post('fax');
			$email = $this->input->post('email');
			$namecard = $this->input->post('namecard');
			$history = $this->input->post('history');
			$level = $this->input->post('level');

			$this->load->model('mo_address');
			$result['row'] = $this->mo_address->insert($first_name,$last_name,$job,$job_description,$company,$url_company,$address,$post_code,$tel,$mobile,$fax,$email,$namecard,$history,$level);
			$this->load->view('view_data', $result);			
		}
		else 
		{
			redirect('co_admin');
		}
	}

}


 ?>