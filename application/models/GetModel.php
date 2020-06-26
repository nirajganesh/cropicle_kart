<?php
class GetModel extends CI_Model{

    public function getInfo($table)
    {
        return $this->db->get($table)->result();
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

    // Fetch Website Profile
    public function getWebProfile()
    {
        return $this->db->get('webprofile')->row();
    }

    // Fetch latest category
    public function getLatestCategory()
    {
        $catg = $this->db->order_by('id','desc')
                        ->limit(1)
                        ->get('gallery_categories')
                        ->row();
        return $catg->id;
    }

    // Fetch gallery categories backgroung img
    public function getThumbnail($tid)
    {
        return $this->db->select('img_src')
                        ->where('gall_cat_id',$tid)
                        ->order_by('id','desc')
                        ->limit('1')
                        ->get('gallery')
                        ->row();
    }

    // Fetch gallery img with limit
    public function getInfoLim($table,$lim,$orderby)
    {
        return $this->db->order_by($orderby,'desc')
                        ->limit($lim)
                        ->get($table)
                        ->result();
    }

    // Count images in category 
    public function getCountOfImages($cid)
    {
        $query= $this->db->select('*')
                        ->where('gall_cat_id',$cid)
                        ->get('gallery');
        return $query->num_rows();
    }

    // Count no. of rows in table 
    public function record_count($table) 
    {
        return $this->db->count_all($table);
    }

    // Fetch Admin Profile
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