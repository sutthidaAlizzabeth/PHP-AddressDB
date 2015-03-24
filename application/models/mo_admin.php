<?php 
/**
* 
*/
class mo_admin extends CI_Model
{
	public $table = 'admin';
	
	public function login($username, $password)
	{
		$condition = array('admin.username'=>$username, 'admin.password'=>md5($password));
		$this->db->select('fullname');
		$query = $this->db->get_where($this->table, $condition);
		$result = $query->row();
		return $result;
	}
}
 ?>