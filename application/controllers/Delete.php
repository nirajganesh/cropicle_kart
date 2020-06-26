<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
        }


   
        public function Testimonial($id)
        {
            $status= $this->delete->deleteById('feedbacks','id',$id);
            if($status){
                $this->session->set_flashdata('success','Testimonial deleted !');
                redirect('Admin/Testimonials');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Testimonials');
            }
        }

 
        public function News($id)
        {
            $news= $this->fetch->getInfoById('news','id',$id);
            $status= $this->delete->deleteById('news','id',$id);
            if($status){
                if($news->img_src!='defaultNews.png'){
                    $path= 'assets/news/'.$news->img_src;
                    unlink("$path");
                }
                $this->session->set_flashdata('success','News Deleted!');
                redirect('Admin/News');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/News');
            }
        }
 

        public function TC($id)
        {
            $tc= $this->fetch->getInfoById('transfer_cert','id',$id);
            $status= $this->delete->deleteById('transfer_cert','id',$id);
            if($status){
                $path= 'assets/tc/'.$tc->img_src;
                unlink($path);
                $this->session->set_flashdata('success','TC Deleted!');
                redirect('Admin/TC');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/TC');
            }
        }

        public function Banner($id)
        {
            $t= $this->fetch->getInfoById('hero_images','id',$id);
            $status= $this->delete->deleteById('hero_images','id',$id);
            if($status){
                $path= 'assets/images/'.$t->img_src;
                unlink($path);
                $this->session->set_flashdata('success','Banner Deleted!');
                redirect('Admin/Banner');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Banner');
            }
        }

        public function TopAch($id)
        {
            $ach= $this->fetch->getInfoById('achievers','id',$id);
            $status= $this->delete->deleteById('achievers','id',$id);
            if($status){
                $path= 'assets/images/'.$ach->img_src;
                unlink($path);
                $this->session->set_flashdata('success','Achiever Deleted !');
                redirect('Admin/TopAch');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/TopAch');
            }
        }


        public function Notice($id)
        {
            $notice= $this->fetch->getInfoById('notice','id',$id);
            $status= $this->delete->deleteById('notice','id',$id);
            if($status){
                if($notice->file_src!=''){
                    $path= 'assets/notice/'.$notice->file_src;
                    unlink($path);
                }
                $this->session->set_flashdata('success','Notice Deleted!');
                redirect('Admin/Notice');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Notice');
            }
        }

   
        public function gallCategory($id)
        {
            $status= $this->delete->deleteById('gallery_categories','id',$id);
            if($status){
                $images= $this->fetch->getInfoParams('gallery','gall_cat_id',$id);
                foreach($images as $image){
                    $path= 'assets/images/'.$image->img_src;
                    unlink("$path");
                }
                $status= $this->delete->deleteById('gallery','gall_cat_id',$id);
                $this->session->set_flashdata('success','Album Deleted!');
                redirect('Admin/Gallery');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Gallery');
            }
        }

       
        public function galleryImg($id)
        {
            $imgData= $this->fetch->getInfoById('gallery','id',$id);
            $unlink_src= $imgData->img_src;
            $cat_id= $imgData->gall_cat_id;
            $count= $this->fetch->getCountOfImages($cat_id);
            $redirect="Admin/galleryInner/$cat_id";
            
            $status= $this->delete->deleteById('gallery','id',$id);
            if($status){
                if ($count < 2){
                    $redirect="Admin/Gallery";
                    $this->delete->deleteById('gallery_categories','id',$cat_id);
                }
                $path= 'assets/images/'.$unlink_src;
                unlink("$path");
                $this->session->set_flashdata('success','Image Deleted!');
                redirect("$redirect");
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect("$redirect");
            }
        }


        public function heroImg($id)
        {
            $unlink_src= $this->fetch->getHeroImageById($id)->img_src;
            $count= $this->fetch->getCountOfHeroImages();
            if ($count < 2){
                $this->session->set_flashdata('failed','Slider Images cannot be empty');
                redirect("Admin/Slider");
            }
            else{
                $status= $this->delete->deleteHeroImg($id);
                if($status){
                    $path= 'assets/images/'.$unlink_src;
                    unlink("$path");
                    $this->session->set_flashdata('success','Image Deleted!');
                    redirect("Admin/Slider");
                }
                else{
                    $this->session->set_flashdata('failed','Error!');
                    redirect("Admin/Slider");
                }
            }
        }



}
