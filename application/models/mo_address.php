<?php 
/**
* create by Sutthida (Alizzabeth)
* this model is used for connect database, retrieve data and insert data
*/
class mo_address extends CI_Model
{	
	public function searchById($id)
	{
		$condition = array('id'=>$id);
		$query = $this->db->get_where('contacts', $condition);
		$result = $query->row();
		return $result;
	}

	public function searchByName($name)
	{
		$key = '%'.$name.'%';
		$sql = "SELECT * FROM contacts WHERE firstname like'".$key."' union SELECT * FROM contacts WHERE lastname like '".$key."';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function searchByCompany($company)
	{
		$key = '%'.$company.'%';
		$sql = "SELECT * FROM contacts WHERE company like'".$key."';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function searchByJob($job)
	{
		$key = '%'.$job.'%';
		$sql = "SELECT * FROM contacts WHERE job like'".$key."';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function searchAll()
	{
		$query = $this->db->get('contacts');
		$result = $query->result();
		return $result;
	}

	public function insert($first_name,$last_name,$job,$job_description,$company,$url_company,$address,$post_code,$tel,$mobile,$fax,$email,$namecard,$history,$level)
	{
		$new_data = array('firstname'=>$first_name, 'lastname'=>$last_name, 'company'=>$company, 'address'=>$address, 'postcode'=>$post_code, 'tel'=>$tel, 'mobile'=>$mobile, 'fax'=>$fax, 'email'=>$email, 'url_company'=>$url_company, 'namecard'=>$namecard, 'job'=>$job, 'job_description'=>$job_description, 'history'=>$history, 'level'=>$level);
		$this->db->insert('contacts', $new_data);
	}
}
 ?>