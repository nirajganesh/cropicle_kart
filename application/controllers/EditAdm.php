<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditAdm extends MY_Controller {

        function __construct()
        {
            parent:: __construct();
            $this->redirectIfAdminNotLoggedIn();
            $this->load->model('GetModel','fetch');
            $this->load->model('EditModel','edit');
        }

        public function item($id)
        {
            // echo'<pre>';var_dump($this->input->post(),$_FILES);exit;
            $this->form_validation->set_rules('item_name', 'Name', 'required');
            $this->form_validation->set_rules('item_price_customer', 'Customer price', 'required');
            $this->form_validation->set_rules('item_price_kart', 'Hawker price', 'required');
            $this->form_validation->set_rules('max_order_qty', 'Max order qty', 'required');
            if($this->form_validation->run() == true){
                $unlink="";
                $data=$this->input->post();
                $data['modified']=date('Y-m-d H:i:s');
                if( $_FILES['img']['name']!=null ){
                    $path ='assets/images/items';
                    $initialize = array(
                        "upload_path" => $path,
                        "allowed_types" => "jpg|jpeg|png|bmp",
                        "remove_spaces" => TRUE
                    );
                    $this->load->library('upload', $initialize);
                    if (!$this->upload->do_upload('img')) {
                        $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())));
                        redirect('items-master');
                    }
                    else {
                        $imgdata = $this->upload->data();
                        $data['item_img']= $imgdata['file_name'];
                        $itm= $this->fetch->getInfoById('items_master','id',$id);
                        if($itm->item_img!='defaultItem.jpg'){
                            $unlink= 'assets/images/items/'.$itm->item_img;
                        }
                    } 
                }

                $status= $this->edit->updateInfoById('items_master',$data,'id', $id);
                if($status){
                    if($unlink!=''){
                        unlink($unlink);
                    }
                    $this->session->set_flashdata('success','Item updated !' );
                    redirect('items-master');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('items-master');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('items-master');
            }
        }

        public function itemStatus($id,$current_stat)
        {
            if($current_stat==0){
                $data['is_active']=1;
                $data['modified']=date('Y-m-d H:i:s');
            }
            else{
                $data['is_active']=0;
                $data['modified']=date('Y-m-d H:i:s');
            }
            $status= $this->edit->updateInfoById('items_master',$data,'id', $id);
            if($status){
                $this->session->set_flashdata('success','Item status updated !' );
                redirect('items-master');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('items-master');
            }
        }

        public function kartStatus($id,$current_stat)
        {
            if($current_stat==0){
                $data['is_active']=1;
                $data['modified']=date('Y-m-d H:i:s');
            }
            else{
                $data['is_active']=0;
                $data['modified']=date('Y-m-d H:i:s');
            }
            $status= $this->edit->updateInfoById('users',$data,'id', $id);
            if($status){
                $this->session->set_flashdata('success','Kart status updated !' );
                redirect('karts');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('karts');
            }
        }

}
