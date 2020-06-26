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

        public function Testimonial($id)
        {
                $data=$this->input->post();
                $status= $this->edit->updateInfoById('feedbacks',$data,'id', $id);
                if($status){
                    $this->session->set_flashdata('success','Testimonial Updated !' );
                    redirect("Admin/Testimonials");
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect("Admin/Testimonials");
                }
        }

        public function News($id)
        {
                $news= $this->fetch->getInfoById('news','id',$id);
                $this->load->view('admin/adminheader',['adminTitle'=>'Edit News',
                                                        'submit'=>base_url().'Edit/updateNews/'.$id,
                                                        'd'=>$news
                                                    ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/news-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function updateNews($id)
        {
            
            $data=$this->input->post();
            $unlink='';
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
                    $news= $this->fetch->getInfoById('news','id',$id);
                    $data['img_src']=$imagename;
                    if($news->img_src!='defaultNews.png'){
                        $unlink= 'assets/news/'.$news->img_src;
                    }
                }
            } 
            $data['slug']=$this->generate_url_slug($this->input->post('heading'),'news');
            $status= $this->edit->updateInfoById('news',$data,'id', $id);

            if($status){
                if($unlink!=''){
                    unlink($unlink);
                }
                $this->session->set_flashdata('success','News Updated !' );
                redirect('Admin/News');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/News');
            }
        }

        public function Notice($id)
        {
                $notice= $this->fetch->getInfoById('notice','id',$id);
                $this->load->view('admin/adminheader',['adminTitle'=>'Edit Notice',
                                                        'submit'=>base_url().'Edit/updateNotice/'.$id,
                                                        'notice'=>$notice
                                                    ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/notice-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function updateNotice($id)
        {  
            $data=$this->input->post();
            $unlink="";
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
                    $filename = $filedata['file_name'];
                    $data['file_src']=$filename;
                    $notice= $this->fetch->getInfoById('notice','id',$id);
                    if($notice->file_src!=''){
                        $unlink= 'assets/notice/'.$notice->file_src;
                    }
                }
            } 

            $status= $this->edit->updateInfoById('notice',$data,'id',$id);
            if($status){
                if($unlink!=''){
                    unlink($unlink);
                }
                $this->session->set_flashdata('success','Notice Updated !' );
                redirect('Admin/Notice');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Notice');
            }
        }

        public function TC($id)
        {
                $tc= $this->fetch->getInfoById('transfer_cert','id',$id);
                $this->load->view('admin/adminheader',['adminTitle'=>'Edit TC',
                                                        'submit'=>base_url().'Edit/updateTC/'.$id,
                                                        'd'=>$tc
                                                    ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/tc-form'); 
                $this->load->view('admin/adminfooter');  
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

        public function TopAch($id)
        {
                $ach= $this->fetch->getInfoById('achievers','id',$id);
                $this->load->view('admin/adminheader',['adminTitle'=>'Edit Achiever',
                                                        'submit'=>base_url().'Edit/updateAch/'.$id,
                                                        'd'=>$ach
                                                    ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/achievers-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function updateAch($id)
        {
            
            $data=$this->input->post();
            $unlink='';
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
                    $tc= $this->fetch->getInfoById('achievers','id',$id);
                    $unlink= 'assets/images/'.$tc->img_src;
                }
            }
            $status= $this->edit->updateInfoById('achievers',$data,'id', $id);

            if($status){
                if($unlink!=''){
                    unlink($unlink);
                }
                $this->session->set_flashdata('success','Achiever Updated !' );
                redirect('Admin/TopAch');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/TopAch');
            }
        }

        public function Header_images($name){
            if($_FILES['img']['name']!=null){
                $path ='assets/images/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp",
                    "remove_spaces" => TRUE,
                    "max_size" => 1000,
                    "overwrite" => true,
                    'file_name' => $name.'.jpg'
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                    redirect('Admin/Header_images');
                } 
                else {
                    $this->session->set_flashdata('success',"Image updated" );
                    redirect('Admin/Header_images');
                }
            }
            else{
                $this->session->set_flashdata('failed','No file selected' );
                redirect('Admin/Header_images');
            }
        }

        public function allAch(){
            if($_FILES['img']['name']!=null){
                $path ='assets/images/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE,
                    "max_size" => 4000,
                    "overwrite" => true,
                    'file_name' => 'all-achievers.jpg'
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                    redirect('Admin/AllAch');
                } 
                else {
                    $this->session->set_flashdata('success',"Image updated" );
                    redirect('Admin/AllAch');
                }
            }
            else{
                $this->session->set_flashdata('failed','No file selected' );
                redirect('Admin/AllAch');
            }
        }

        public function Magazine(){
            if($_FILES['img']['name']!=null){
                $path ='assets/magazine/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "pdf",
                    "remove_spaces" => TRUE,
                    "max_size" => 10000,
                    "overwrite" => true,
                    'file_name' => 'mag.pdf'
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                    redirect('Admin/Magazine');
                } 
                else {
                    $this->session->set_flashdata('success',"Magazine pdf uploaded" );
                    redirect('Admin/Magazine');
                }
            }
            else{
                $this->session->set_flashdata('failed','No file selected' );
                redirect('Admin/Magazine');
            }
        }

        public function tourVid(){
            if($_FILES['img']['name']!=null){
                $path ='assets/video/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "mp4|avi|mkv|mpg|mpeg|mov",
                    "remove_spaces" => TRUE,
                    "max_size" => 10000,
                    "overwrite" => true,
                    'file_name' => 'ggr-video.mp4'
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                    redirect('Admin/TourVid');
                } 
                else {
                    $this->session->set_flashdata('success',"Video updated" );
                    redirect('Admin/TourVid');
                }
            }
            else{
                $this->session->set_flashdata('failed','No file selected' );
                redirect('Admin/TourVid');
            }
        }

        public function tourVidThumb(){
            if($_FILES['img']['name']!=null){
                $path ='assets/video/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp",
                    "remove_spaces" => TRUE,
                    "max_size" => 1000,
                    "overwrite" => true,
                    'file_name' => 'vid-thumb.jpg'
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                    redirect('Admin/TourVid');
                } 
                else {
                    $this->session->set_flashdata('success',"Video thumbnail updated" );
                    redirect('Admin/TourVid');
                }
            }
            else{
                $this->session->set_flashdata('failed','No file selected' );
                redirect('Admin/TourVid');
            }
        }

        public function MagazineThumb(){
            if($_FILES['img']['name']!=null){
                $path ='assets/magazine/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp",
                    "remove_spaces" => TRUE,
                    "max_size" => 1000,
                    "overwrite" => true,
                    'file_name' => 'mag.png'
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                    redirect('Admin/Magazine');
                } 
                else {
                    $this->session->set_flashdata('success',"Magazine thumbnail updated" );
                    redirect('Admin/Magazine');
                }
            }
            else{
                $this->session->set_flashdata('failed','No file selected' );
                redirect('Admin/Magazine');
            }
        }
        
        public function Noticefile($id)
        {
            $data['file_src']='';
            $notice= $this->fetch->getInfoById('notice','id',$id);
            $status= $this->edit->updateInfoById('notice',$data,'id',$id);
            if($status){
                if($notice->file_src!=''){
                    $path= 'assets/notice/'.$notice->file_src;
                    unlink($path);
                }
                $this->session->set_flashdata('success','Notice file removed!');
                redirect('Admin/Notice');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Notice');
            }
        }

        public function webProfile()
        {
            $data=$this->input->post();
            $status= $this->edit->updateWebProfile($data);

            if($status){
                $this->session->set_flashdata('success','Web Profile Updated !');
                redirect('Admin/webProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/webProfile');
            }
        }

        public function gallCategory($id)
        {
            $status= $this->edit->updateInfoById('gallery_categories',$this->input->post(),'id', $id);
            if($status){
                $this->session->set_flashdata('success','Album Updated !');
                redirect('Admin/Gallery');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Gallery');
            }
        }

        public function gallImage($id)
        {
            
            $data=array('alt_txt'=>$this->input->post('alt_txt'));
            $imgData = $this->fetch->getInfoById('gallery','id',$id); 
            $cat_id=$imgData->gall_cat_id;  
            $unlink_src= $imgData->img_src;   
            if( $_FILES['img']['name']!=null ){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|svg",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())));
                    redirect("Admin/galleryInner/$cat_id");
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data['img_src']=$imagename;
                    $path= 'assets/images/'.$unlink_src;
                    unlink("$path");
                }
            } 

            $status= $this->edit->updateInfoById('gallery',$data,'id', $id);

            if($status){
                $this->session->set_flashdata('success','Image Updated !' );
                redirect("Admin/galleryInner/$cat_id");
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect("Admin/galleryInner/$cat_id");
            }
        }

        public function Banner($id)
        {
            if( $_FILES['img']['name']!=null ){
                $imagename = '';
                $unlink = '';
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
                    $imgData = $this->fetch->getInfoById('hero_images','id',$id); 
                    $unlink='assets/images/'.$imgData->img_src;
                    $status= $this->edit->updateInfoById('hero_images',$data,'id',$id);
    
                    if($status){
                        if($unlink!=''){
                            unlink($unlink);
                        }
                        $this->session->set_flashdata('success','Banner Updated !' );
                        redirect("Admin/Banner");
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect("Admin/Banner");
                    }
                }
            }
            else{
                $this->session->set_flashdata('failed','No file selected' );
                redirect('Admin/Banner');
            }
        }


        public function enqStatus($id)
        {
            $status= $this->edit->updateEnqStatus($id);
            if($status){
                redirect('Admin');
            }
            else{
                redirect('Admin');
            }
        }

        public function adminProfile($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateAdminProfile($data,$id);
            $user=$this->fetch->getAdminProfile();
            $this->session->set_userdata(['user' =>  $user]);

            if($status){
                $this->session->set_flashdata('success','Admin Panel Profile Updated !');
                redirect('Admin/adminProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/adminProfile');
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
