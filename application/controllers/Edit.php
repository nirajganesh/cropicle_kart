<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends MY_Controller {

        function __construct()
        {
            parent:: __construct();
            $this->redirectIfNotLoggedIn();
            $this->load->model('GetModel','fetch');
            $this->load->model('EditModel','edit');
        }


        public function updateTC($id)
        {
            
            $data=$this->input->post();
            $unlink='';
            if( $_FILES['img']['name']!=null ){
                $path ='assets/tc';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|pdf",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())));
                    redirect('Admin/TC');
                }
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $tc= $this->fetch->getInfoById('transfer_cert','id',$id);
                    $unlink= 'assets/tc/'.$tc->img_src;
                }
            }
            $status= $this->edit->updateInfoById('transfer_cert',$data,'id', $id);

            if($status){
                if($unlink!=''){
                    unlink($unlink);
                }
                $this->session->set_flashdata('success','TC Updated !' );
                redirect('Admin/TC');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/TC');
            }
        }

        public function img_upload()
        {
            $path ='assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp",
                "remove_spaces" => TRUE,
                "max_size" => 820
            );
            $this->load->library('upload', $initialize);
            if (!$this->upload->do_upload('file')) {
                $error=trim(strip_tags($this->upload->display_errors()));
                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())));
            }
            else {
                $imgdata = $this->upload->data();
                $data['profile_img'] = $imgdata['file_name'];
                $data['modified'] = date('Y-m-d H:i:s');
                $t= $this->fetch->getInfoById('user_info','user_id',$this->session->kart->id);
                $status= $this->edit->updateInfoById('user_info',$data,'user_id',$this->session->kart->id);
                if($status){
                    if($t->profile_img!=''){
                        unlink('assets/images/'.$t->profile_img);
                    }
                    $this->session->set_flashdata('success','Profile image updated');
                }
            }
           
        }

        public function general()
        {
            $data=$this->input->post();
            $this->session->kart->name=$data['name'];
            unset($data['name']);
            unset($data['mobile_no']);
            $status= $this->edit->updateInfoById('user_info',$data,'user_id', $this->session->kart->id);

            if($status){
                $this->session->set_flashdata('success','Profile updated !' );
                redirect('profile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('profile');
            }
        }

        public function kart_profile()
        {
            $data=$this->input->post();
            $status= $this->edit->updateInfoById('user_info',$data,'user_id', $this->session->kart->id);

            if($status){
                $this->session->set_flashdata('success','Profile updated !' );
                redirect('profile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('profile');
            }
        }

        public function bank_info()
        {
            $data=$this->input->post();
            // var_dump($data);exit;
            $status= $this->edit->updateInfoById('user_info',$data,'user_id', $this->session->kart->id);

            if($status){
                $this->session->set_flashdata('success','Profile updated !' );
                redirect('profile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('profile');
            }
        }


        function generate_url_slug($string,$table,$field='slug',$key=NULL,$value=NULL){
            $t =& get_instance();
            $slug = url_title($string);
            $slug = strtolower($slug);
            $i = 0;
            $params = array ();
            $params[$field] = $slug;
            if($key)$params["$key !="] = $value; 
            while ($t->db->where($params)->get($table)->num_rows())
            {
                if (!preg_match ('/-{1}[0-9]+$/', $slug )){
                    $slug .= '-' . ++$i;
                }
                else{
                    $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
                }
                $params [$field] = $slug;
            }
                return $slug;
        }
        

}
