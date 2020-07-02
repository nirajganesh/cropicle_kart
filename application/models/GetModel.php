<?php
class GetModel extends CI_Model{


    public function demandLists($lim=NULL)
    {
        $lists=$this->db->select('id,name')
                        ->where('user_id',$this->session->kart->id)
                        ->limit($lim)
                        ->order_by('id','desc')
                        ->get('demand_lists')
                        ->result();
        foreach($lists as $list){
            $list->items=$this->demandListItems($list->id);
            $list->itemsCount=sizeof($list->items);
        }
        return $lists;
    }

    public function demandListsLess($lim=NULL)
    {
        $lists=$this->db->select('id,name,created')
                        ->where('user_id',$this->session->kart->id)
                        ->limit($lim)
                        ->order_by('id','desc')
                        ->get('demand_lists')
                        ->result();
        foreach($lists as $list){
            $list->itemsCount=$this->record_count('demand_lists_details','demand_list_id',$list->id);
        }
        return $lists;
    }

    public function demandListById($id)
    {
        $list=$this->db->select('id,name')
                        ->where('user_id',$this->session->kart->id)
                        ->where('id',$id)
                        ->get('demand_lists')
                        ->row();
        $list->items=$this->demandListItems($list->id);
        $list->itemsCount=sizeof($list->items);
        return $list;
    }

    public function demandListItems($listId)
    {
        $items=$this->db->select('dd.qty, i.item_name, u.unit_short_name')
                ->from('demand_lists_details dd')
                ->join('items_master i', 'i.id = dd.item_id', 'LEFT')
                ->join('units u', 'u.id = i.unit_id', 'LEFT')
                ->where('i.is_active','1')
                ->where('dd.is_active','1')
                ->where('dd.demand_list_id',$listId)
                ->order_by('dd.id','desc')
                ->get()
                ->result();
        return $items;
    }

    public function allItems($lim=NULL)
    {
        $items=$this->db->select('i.id, i.item_name, i.max_order_qty, i.item_price_kart, u.unit_short_name')
                ->from('items_master i')
                ->join('units u', 'u.id = i.unit_id', 'LEFT')
                ->where('i.is_active','1')
                ->limit($lim)
                ->order_by('i.id','desc')
                ->get()
                ->result();
        return $items;
    }

    public function getPhone($phn)
    {
        $query= $this->db->select('*')
                        ->where('mobile_no',$phn)
                        ->get('users');
        return $query->num_rows();
    }


    

    //  -----------------------------------------------------------
    //  -----------------------------------------------------------
    //  -----------------------------------------------------------



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

    public function record_count($table,$col,$id) 
    {
        return $this->db->where($col,$id)->get($table)->num_rows();
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