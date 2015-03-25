<?php 
/**
* create by Sutthida (Alizzabeth)
* this model is used for connect database, retrieve data and insert data
*/
class mo_address extends CI_Model
{	
	public function searchByName($name)
	{
		$key = '%'.$name.'%';
		$sql = "SELECT firstname, lastname, company, job FROM contacts WHERE firstname like'".$key."' union SELECT firstname, lastname, company, job FROM contacts WHERE lastname like '".$key."';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function searchByCompany($company)
	{
		$key = '%'.$company.'%';
		$condition = array('company'=>$key);
		$query = $this->db->get_where('contacts', $condition);
		$result = $query->result();
		return $result;
	}

	public function searchById($id)
	{
		$condition = array('id'=>$id);
		$query = $this->db->get_where('contacts', $condition);
		$result = $query->result();
		return $result;
	}
}
 ?>