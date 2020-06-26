<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('AddModel','save');
                $this->load->model('GetModel','fetch');
        }

        public function News()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Add News',
                                                        'submit'=> base_url('Add/saveNews')
                                                    ]);
                $this->load->view('admin/adminaside');
                $this->load->view('admin/news-form');
                $this->load->view('admin/adminfooter');
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
        
        public function Notice()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Add Notice',
                                                        'submit'=>base_url('Add/saveNotice')
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/notice-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function saveNotice()
        {
            $this->form_validation->set_rules('content', 'Content', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                $fileName = '';
                if( $_FILES['notice_file']['name']!=null ){
                    $path ='assets/notice';
                    $initialize = array(
                        "upload_path" => $path,
                        "allowed_types" => "jpg|jpeg|png|bmp|doc|docx|pdf|xls|xlsx|txt|ppt|pptx",
                        "remove_spaces" => TRUE
                    );
                    $this->load->library('upload', $initialize);
                    if (!$this->upload->do_upload('notice_file')) {
                        $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())));
                        redirect('Admin/Notice');
                    }
                    else {
                        $filedata = $this->upload->data();
                        $fileName = $filedata['file_name'];
                    } 
                }

                $data['date']=date('Y-m-d');
                $data['file_src']=$fileName;
                $status= $this->save->saveInfo('notice',$data);

                if($status){
                    $this->session->set_flashdata('success','Notice added !' );
                    redirect('Admin/Notice');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Notice');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Notice');
            }
        }

        public function TC()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Add TC',
                                                        'submit'=> base_url('Add/saveTC')
                                                    ]);
                $this->load->view('admin/adminaside');
                $this->load->view('admin/tc-form');
                $this->load->view('admin/adminfooter');
        }

        public function saveTC()
        {
            $this->form_validation->set_rules('name', 'Student Name', 'required');
            $this->form_validation->set_rules('dob', 'DOB', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
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
                    } 
                }
                $status= $this->save->saveInfo('transfer_cert',$data);

                if($status){
                    $this->session->set_flashdata('success','TC added !' );
                    redirect('Admin/TC');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/TC');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/News');
            }
        }

        public function TopAch()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Add Achiever',
                                                        'submit'=> base_url('Add/saveAch')
                                                    ]);
                $this->load->view('admin/adminaside');
                $this->load->view('admin/achievers-form');
                $this->load->view('admin/adminfooter');
        }

        public function saveAch()
        {
            $this->form_validation->set_rules('name', 'Student Name', 'required');
            $this->form_validation->set_rules('class', 'Class', 'required');
            $this->form_validation->set_rules('batch', 'Batch', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                if( $_FILES['img']['name']!=null ){
                    $path ='assets/images';
                    $initialize = array(
                        "upload_path" => $path,
                        "allowed_types" => "jpg|jpeg|png|bmp",
                        "remove_spaces" => TRUE
                    );
                    $this->load->library('upload', $initialize);
                    if (!$this->upload->do_upload('img')) {
                        $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())));
                        redirect('Admin/TopAch');
                    }
                    else {
                        $imgdata = $this->upload->data();
                        $data['img_src'] = $imgdata['file_name'];
                    } 
                }
                $status= $this->save->saveInfo('achievers',$data);

                if($status){
                    $this->session->set_flashdata('success','Achiever added !' );
                    redirect('Admin/TopAch');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/TopAch');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/TopAch');
            }
        }

        public function Testimonial()
        {
                $data=$this->input->post();
                $status= $this->save->saveInfo('feedbacks',$data);
                if($status){
                    $this->session->set_flashdata('success','Testimonial added !' );
                    redirect("Admin/Testimonials");
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect("Admin/Testimonials");
                }
        }

        public function gallCategory()
        {
            $this->form_validation->set_rules('name', 'Album name', 'required');
            if($this->form_validation->run() == true){
                $imagename = '';
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|svg",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())));
                    redirect('Admin/Gallery');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                } 

                $data=array('name'=>$this->input->post('name'));
                $status= $this->save->saveInfo('gallery_categories',$data);

                if($status){
                    $cat_id=$this->fetch->getLatestCategory();
                    $data=array('img_src'=>$imagename,
                            'gall_cat_id'=>$cat_id
                            );
                    $status= $this->save->saveInfo('gallery',$data);
                    
                    $this->session->set_flashdata('success','Album added !' );
                    redirect('Admin/Gallery');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Gallery');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Gallery');
            }
        }

        public function gallImage($cid)
        {
                $imagename = '';
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|svg",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())));
                    redirect("Admin/galleryInner/$cid");
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                } 
                if($this->input->post('alt_txt')!=null){
                    $data=array('img_src'=>$imagename,
                            'alt_txt'=>$this->input->post('alt_txt'),
                            'gall_cat_id'=>$cid
                            );
                }
                else{
                    $data=array('img_src'=>$imagename,
                            'gall_cat_id'=>$cid
                            );
                }
                $status= $this->save->saveInfo('gallery',$data);

                if($status){
                    $this->session->set_flashdata('success','Image added !' );
                    redirect("Admin/galleryInner/$cid");
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect("Admin/galleryInner/$cid");
                }
        }

        public function Banner()
        {
            if( $_FILES['img']['name']!=null ){
                $imagename = '';
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp",
                    "remove_spaces" => TRUE,
                    "max_size"     => 520
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',$this->upload->display_errors());
                    redirect("Admin/Banner");
                }
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $status= $this->save->saveInfo('hero_images',$data);
    
                    if($status){
                        $this->session->set_flashdata('success','Banner added !' );
                        redirect("Admin/Banner");
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect("Admin/Banner");
                    }
                }
            }
            else{
                $this->session->set_flashdata('failed','No file selected !');
                redirect("Admin/Banner");
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
