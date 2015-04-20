<?php 
/**
* create by Sutthida (Alizzabeth)
* this controller is used when user want to query data or insert data;
*/
class co_upload extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function upload()
	{
		if ($this->session->userdata('is_admin') == 1)
		{
			$id = $this->input->post('id');

			$config['upload_path'] = 'assets/namecards/';
			$config['allowed_types'] = 'jpg';
			$config['max_size']	= '2048'; //kb
			$config['max_width']  = '1024'; //pixel
			$config['max_height']  = '1024'; //pixel
			$config['overwrite']  = TRUE;
			$config['file_name']  = $id;


			$this->load->library('upload', $config); //เรียกใช้ library ชื่อ upload

			if ($this->upload->do_upload('namecard')) //upload ที่เรียกใช้คือ library
			{
				$data = $this->upload->data();

				$this->load->model('mo_address');
				$this->mo_address->edit_namecard($id);
				$result['row'] = $this->mo_address->searchById($id);
				$result['error'] = FALSE;
	
				$this->load->view('view_edit', $result);
			}
			else
			{
				$this->load->model('mo_address');
				$result['row'] = $this->mo_address->searchById($id);
				$result['error'] = "Try agian!!!";
	
				$this->load->view('view_edit', $result);
			}
		}
		else 
		{
			redirect('co_admin');
		}
	}
}