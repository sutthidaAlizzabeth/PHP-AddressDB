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
		$result = $query->result();
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
}
 ?>