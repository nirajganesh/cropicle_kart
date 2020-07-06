<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteAdm extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfAdminNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
        }

        public function item($id)
        {
            $itm= $this->fetch->getInfoById('items_master','id',$id);
            $status= $this->delete->deleteById('items_master','id',$id);
            if($status){
                if($itm->item_img!='defaultItem.jpg'){
                    $path= 'assets/images/items/'.$itm->item_img;
                    unlink($path);
                }
                $this->session->set_flashdata('success','Item deleted!');
                redirect('items-master');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('items-master');
            }
        }

        public function kart($id)
        {
            $status= $this->delete->deleteById('users','id',$id);
            $status= $this->delete->deleteById('user_info','user_id',$id);
            if($status){
                $this->session->set_flashdata('success','Kart deleted!');
                redirect('karts');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('karts');
            }
        }

}