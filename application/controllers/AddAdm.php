<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddAdm extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfAdminNotLoggedIn();
                $this->load->model('AddModel','save');
                $this->load->model('GetModel','fetch');
        }

        public function item()
        {
            // echo'<pre>';var_dump($this->input->post(),$_FILES);exit;
            $this->form_validation->set_rules('item_name', 'Name', 'required');
            $this->form_validation->set_rules('item_price_customer', 'Customer price', 'required');
            $this->form_validation->set_rules('item_price_kart', 'Hawker price', 'required');
            $this->form_validation->set_rules('max_order_qty', 'Max order qty', 'required');
            if($this->form_validation->run() == true){
                $imagename = 'defaultItem.jpg';
                $data=$this->input->post();
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
                        redirect('add-item');
                    }
                    else {
                        $imgdata = $this->upload->data();
                        $imagename = $imgdata['file_name'];
                    } 
                }
                $data['item_img']=$imagename;

                $status= $this->save->saveInfo('items_master',$data);
                if($status){
                    $this->session->set_flashdata('success','Item added !' );
                    redirect('add-item');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('add-item');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('add-item');
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
