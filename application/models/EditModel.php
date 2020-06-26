<?php
class EditModel extends CI_Model{

    // Update Website Profile
    public function updateWebProfile($data)
    {
        $this->db->where('id',$data['id']);
        $wpflag = $this->db->update('webprofile',$data);
        if($wpflag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update info by id
    public function updateInfoById($tbl,$data,$col,$key)
    {
        $this->db->where($col,$key);
        $wpflag = $this->db->update($tbl,$data);
        if($wpflag){
            return true;
        }
        else{
            return false;
        }
    }


    // Update Enquiry Status
    public function updateEnqStatus($id)
    {
        $data['status']="seen";
        $this->db->where('id',$id);
        $flag = $this->db->update('enquiries',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }
    
     // Update Website Profile
     public function updateAdminProfile($data, $id)
     {
         $this->db->where('user_id',$id);
         $flag = $this->db->update('users',$data);
         if($flag){
             return true;
         }
         else{
             return false;
         }
     }
    

}
?>
     