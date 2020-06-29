<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('AddModel','save');
                $this->load->model('GetModel','fetch');
        }

        public function saveNews()
        {
            $this->form_validation->set_rules('heading', 'Heading', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            if($this->form_validation->run() == true){
                $imagename = 'defaultNews.png';
                $data=$this->input->post();
                if( $_FILES['img']['name']!=null ){
                    $path ='assets/news';
                    $initialize = array(
                        "upload_path" => $path,
                        "allowed_types" => "jpg|jpeg|png|bmp",
                        "remove_spaces" => TRUE
                    );
                    $this->load->library('upload', $initialize);
                    if (!$this->upload->do_upload('img')) {
                        $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())));
                        redirect('Admin/News');
                    }
                    else {
                        $imgdata = $this->upload->data();
                        $imagename = $imgdata['file_name'];
                    } 
                }
                $data['img_src']=$imagename;
                $data['slug']=$this->generate_url_slug($this->input->post('heading'),'news');
                $status= $this->save->saveInfo('news',$data);

                if($status){
                    $this->session->set_flashdata('success','News added !' );
                    redirect('Admin/News');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/News');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/News');
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
