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

}