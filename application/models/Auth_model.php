<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ankur Agrawal 
**/

class Auth_model extends CI_Model {

    public function authenticate($data) 
    {
        $this->db->where(['mobile_no' => $data['mobile_no'] , 'is_active' => 1]);
        $query = $this->db->get('users');
        if($query->num_rows() == 0)
            return false;

        $user = $query->row();
        // echo password_hash($data['password'], PASSWORD_DEFAULT);
        // echo "<br>".$data['uname'];
        // exit;
        return password_verify($data['password'], $user->password) ? $user : FALSE;
    }
    
    public function authenticateUser($data) 
    {
        $this->db->where(['email' => $data['email'] , 'status' => 1, 'role' => 'user' ]);
        $query = $this->db->get('users');
        if($query->num_rows() == 0)
            return false;

        $user = $query->row();
        return password_verify($data['pwd'], $user->pwd) ? $user : FALSE;
    }


    public function changeLoginPassword($h, $user_id) {
		$this->db->where('id', $user_id);
		$flag=$this->db->update('users', $h);
		if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    public function changeTPassword($h, $user_id) {
		$this->db->where('user_id', $user_id);
		$flag=$this->db->update('users', $h);
		if($flag){
            return true;
        }
        else{
            return false;
        }
    }
    
    
}
