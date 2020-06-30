<?php
class GetModel extends CI_Model{

    public function getInfo($table)
    {
        return $this->db->get($table)->result();
    }

    public function getPhone($phn)
    {
        $query= $this->db->select('*')
                        ->where('mobile_no',$phn)
                        ->get('users');
        return $query->num_rows();
    }

    public function getInfoById($table,$column,$id)
    {
        $this->db->where($column, $id);
        return $this->db->get($table)->row();
    }

    public function getInfoParams($table,$column,$id)
    {
        $this->db->where($column, $id);
        return $this->db->get($table)->result();
    }

    public function getInfoOrderBy($table,$column)
    {
        $this->db->order_by($column,'desc');
        return $this->db->get($table)->result();
    }

    public function demandLists($lim=NULL)
    {
     
        $this->db->select('*')
                ->from('demand_lists d')
                ->join('demand_lists_details dd', 'd.id = dd.demand_list_id', 'LEFT')
                ->join('items_master i', 'i.id = dd.item_id', 'LEFT')
                ->join('units u', 'u.id = dd.unit_id', 'LEFT')
                ->where('i.is_active','1')
                ->where('d.is_active','1')
                ->where('d.user_id',$this->session->kart->id)
                ->order_by('d.id','desc');
        echo"<pre>";var_dump($this->db->get()->result());exit;
        // return $this->db->get()->result();
    }


    public function getWebProfile()
    {
        return $this->db->get('webprofile')->row();
    }

    public function getInfoLim($table,$lim,$orderby)
    {
        return $this->db->order_by($orderby,'desc')
                        ->limit($lim)
                        ->get($table)
                        ->result();
    }

    public function record_count($table) 
    {
        return $this->db->count_all($table);
    }


    public function getAdminProfile()
    {
        return $this->db->get('users')->row();
    }

    public function getEnquiries()
    {
        return $this->db->get('enquiries')->result();
    }

    public function fetch_paginated_data($table,$limit, $start)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id','desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    

}
?>