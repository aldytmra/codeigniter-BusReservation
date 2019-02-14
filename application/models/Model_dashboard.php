<?php  

class Model_dashboard extends CI_Model{

    
    public function auth_user($username, $password)
	{
		$query=$this->db->query("SELECT * FROM system_user WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
    }
    
    public function updateUser($id, $post)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_siswa', $post);
		return $this->db->affected_rows();
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
	}
	

	public function getJourney()
	{
		$this -> db -> select('journeyFrom,journeyTo');
		$result = $this -> db -> get('journey');
		return $result;
	}
	
	public function systemUser()
	{
		$this -> db -> select('userName,empolyeeNo,empolyeeName,empolyeeMNo,privilege');
		$result = $this -> db -> get('system_user');
		return $result;
	}
}