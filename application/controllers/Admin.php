<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->load->model('GetModel','fetch');
                $this->redirectIfNotLoggedIn();
        }

        public function index()
        {
                $enq=$this->fetch->getEnquiries();
                $this->load->view('admin/adminheader',['enq' => $enq,
                                                        'adminTitle'=>'Dashboard'
                                                ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/dashboard'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Subscriptions()
        {
                $enq=$this->fetch->getInfo('subscriptions');
                $this->load->view('admin/adminheader',['sub' => $enq,
                                                        'adminTitle'=>'Subscriptions'
                                                ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/subscriptions'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Testimonials()
        {
                $data=$this->fetch->getInfo('feedbacks');
                $this->load->view('admin/adminheader',['data' => $data,
                                                        'adminTitle'=>'Testimonials'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/testimonials'); 
                $this->load->view('admin/adminfooter');  
        }

        public function News()
        {
                $news=$this->fetch->getInfo('news');
                $this->load->view('admin/adminheader',['data' => $news,
                                                        'adminTitle'=>'News'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminNews'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Notice()
        {
                $notices=$this->fetch->getInfo('Notice');
                $this->load->view('admin/adminheader',['notices' => $notices,
                                                        'adminTitle'=>'Notice'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminNotice'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Gallery()
        {
                $cat=$this->fetch->getInfo('gallery_categories');
                $this->load->view('admin/adminheader',['categories' => $cat,
                                                        'adminTitle'=>'Gallery'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminGallery'); 
                $this->load->view('admin/adminfooter');  
        }

        public function galleryInner($id)
        {
                $name=$this->fetch->getInfoById('gallery_categories','id',$id)->name;
                $images=$this->fetch->getInfoParams('gallery','gall_cat_id',$id);
                $this->load->view('admin/adminheader',['images' => $images,
                                                        'adminTitle'=>'Gallery | '.$name,
                                                        'cat_name'=>$name,
                                                        'cat_id'=>$id
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminGalleryInner'); 
                $this->load->view('admin/adminfooter');  
        }

        public function TC()
        {
                $tc=$this->fetch->getInfo('transfer_cert');
                $this->load->view('admin/adminheader',['data' => $tc,
                                                        'adminTitle'=>'TC'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminTC'); 
                $this->load->view('admin/adminfooter');  
        }

        public function allAch()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'All achievers image']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/all_achievers'); 
                $this->load->view('admin/adminfooter');  
        }

        public function TopAch()
        {
                $ach=$this->fetch->getInfo('achievers');
                $this->load->view('admin/adminheader',['ach'=>$ach,'adminTitle'=>'Top achievers']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/top_achievers'); 
                $this->load->view('admin/adminfooter');  
        }

        public function TourVid()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'School tour video']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/tour-video'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Magazine()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Spectrum magazine']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/magazine'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Header_images()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Header Images' ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/header_images'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Banner()
        {
                $data=$this->fetch->getInfo('hero_images');
                $this->load->view('admin/adminheader', ['data' => $data,'adminTitle'=>'Banners']);
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/banner'); 
                $this->load->view('admin/adminfooter');  
        }

        public function webProfile()
        {
                $profile=$this->fetch->getWebProfile();
                $this->load->view('admin/adminheader', ['profile' => $profile,'adminTitle'=>'Web Profile']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/webProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function adminProfile()
        {
                $admProfile=$this->fetch->getAdminProfile();
                $this->load->view('admin/adminheader', ['admProfile' => $admProfile, 'adminTitle'=>'Admin Profile']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function rootLogin()
        {
                if($this->input->post('p')===ROOT_PWD){
                        $this->session->set_userdata(['root' => 'root']);  
                        redirect('Admin/rootFileUpload');
                }
                else{
                        redirect('Admin');
                }
        }

        public function rootFileUpload()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Root']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/rootUpload'); 
                $this->load->view('admin/adminfooter');  
        }

        public function processRootUpload()
        {
                if($_FILES['file']['name']!=null){
                        $path = $this->input->post('path');
                        $initialize = array(
                                "upload_path" => $path,
                                "allowed_types" => "*",
                                "overwrite" => true
                        );
                        $this->load->library('upload', $initialize);
                        if (!$this->upload->do_upload('file')) {
                                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                                redirect('Admin/rootFileUpload');
                        }
                        else {
                                $this->session->set_flashdata('success','Uploaded !' );
                                redirect('Admin/rootFileUpload');
                        } 
                }
                else{
                        $this->session->set_flashdata('failed','No file selected !');
                        redirect('Admin/rootFileUpload');
                }
        }

        public function processRootNewFolder()
        {
                $path = $this->input->post('path');
                $folder = $this->input->post('folder');
                if(!file_exists($path.$folder)){
                    if(mkdir($path.$folder)){
                        $this->session->set_flashdata('success','Created !');
                        redirect('Admin/rootFileUpload');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/rootFileUpload');
                    }
                }
                else{
                        $this->session->set_flashdata('failed','Already exists');
                        redirect('Admin/rootFileUpload');
                }
        }
        
        public function Extract()
        {
                if(!empty($_FILES['file']['name'])){ 
                     $config['upload_path'] = './'; 
                     $config['allowed_types'] = 'zip'; 
           
                     $this->load->library('upload',$config); 
                     if($this->upload->do_upload('file')){ 
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name'];
           
                        $zip = new ZipArchive;
                        $res = $zip->open("./".$filename);
                        if ($res === TRUE) {
                          $extractpath = $this->input->post('path');
                          $zip->extractTo($extractpath);
                          $zip->close();
                          unlink('./'.$filename);
                          $this->session->set_flashdata('success','Upload & Extract successful.');
                          redirect('Admin/rootFileUpload');
                        }
                        else {
                          $this->session->set_flashdata('failed','Failed to extract !');
                          redirect('Admin/rootFileUpload');
                        }
                        
                    }
                    else{ 
                       $this->session->set_flashdata('failed','Failed to upload !');
                       redirect('Admin/rootFileUpload');
                    } 
                }
                else{ 
                    $this->session->set_flashdata('failed','No file selected for uploading!');
                    redirect('Admin/rootFileUpload');
                } 
           
        }

        public function rootDownload()
        {
                $path=$this->input->post('path');
                $dirPath=$this->input->post('dirPath');
                if($path!=''){
                        $path=$this->input->post('path');
                        $this->load->helper('download');
                        if(force_download($path, NULL)){
                                $this->session->set_flashdata('success','File download initiated !');
                                redirect('Admin/rootFileUpload');
                        }
                        else{
                                $this->session->set_flashdata('failed','Error !');
                                redirect('Admin/rootFileUpload');
                        }
                }
                if($dirPath!=''){
                        $this->load->library('zip');
                        $filename = "backupz.zip";
                        $this->zip->read_dir($dirPath);
                        $this->zip->archive($filename);
                        if($this->zip->download($filename)){
                                $this->session->set_flashdata('success','Zip download initiated !');
                                redirect('Admin/rootFileUpload');
                        }
                        else{
                                $this->session->set_flashdata('failed','Error !');
                                redirect('Admin/rootFileUpload');
                        }
                }
                $this->session->set_flashdata('failed','No path given !');
                redirect('Admin/rootFileUpload');
        }

        public function dbDownload()
        {
                $this->load->dbutil();
                $prefs = array(     
                        'format'      => 'zip',             
                        'filename'    => 'my_db_backup.sql'
                );
                $backup =& $this->dbutil->backup($prefs); 
                $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
                // $save = 'assets/'.$db_name;
                $this->load->helper('file');
                write_file($save, $backup); 
                $this->load->helper('download');
                force_download($db_name, $backup); 
        }

        public function delBackupz(){
                if(unlink('backupz.zip')){
                        $this->session->set_flashdata('success','Backupz.zip deleted !');
                        redirect('Admin/rootFileUpload');
                }
                else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/rootFileUpload');
                }
        }

        public function rootUploadOff()
        {
                $this->session->unset_userdata(['root']);
                redirect('Admin');
        }

}
