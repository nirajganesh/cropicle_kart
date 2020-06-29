<?php
class AddModel extends CI_Model{

    public function saveInfo($table,$d)
    {
        $flag = $this->db->insert($table,$d);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    public function create_user($table,$data) {
        if(!empty($data)){
            $this->db->insert($table,$data);
            return $this->db->insert_id();
        }
		return false;
    }

    public function create_user_session($data) {
		if(!empty($data)){
			$this->db->insert('user_sessions', $data);
			return $this->db->insert_id();
		}
		return false;
    }

}