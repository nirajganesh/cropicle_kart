<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
		$this->load->model('AddModel','save');
		$this->redirectIfNotLoggedIn();
	}

	public function index()
	{
		// $profile=$this->fetch->getWebProfile();
		// $hero=$this->fetch->getInfo('hero_images');
		// $feeds=$this->fetch->getInfo('feedbacks');
		// $ach=$this->fetch->getInfo('achievers');
		// $notice=$this->fetch->getInfoLim('notice','3','id');
		// $news=$this->fetch->getInfoLim('news','3','id');
		// $gallery=$this->fetch->getInfoLim('gallery','5','id');
		// $this->load->view('header',['web'=>$profile ,
		// 							'title'=>'Home',
		// 							'feeds'=>$feeds,
		// 							'hero'=>$hero,
		// 							'notice'=>$notice,
		// 							'ach'=>$ach,
		// 							'news'=>$news,
		// 							'img'=>$gallery
		// 						]);
		$this->load->view('kart/header');
		$this->load->view('kart/index');
		$this->load->view('kart/footer');
	}


	public function Mail()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Contact no.', 'required|max_length[10]|min_length[10]');
		if($this->input->post('message')!=null){
			$this->form_validation->set_rules('message', 'Message', 'max_length[250]');
		}
		if($this->form_validation->run() == true){
			$web=$this->fetch->getWebProfile();
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');
			$message="";
			$guest_email="";
			if($this->input->post('message')!=null){
				$message=$this->input->post('message');
			}
			if($this->input->post('email')!=null){
				$guest_email=$this->input->post('email');
			}

			$to= $web->email;
			$subject = "New enquiry received - Gyan Ganga School";
			$msg = '<p><strong>You have a new qnquiry from-</strong></p>';
			$msg .= '<p>Name: <strong>'.$name.'</strong></p>';
			$msg .= '<p>Email: <strong>'.$guest_email.'</strong></p>';
			$msg .= '<p>Contact no.: <strong>'.$phone.'</strong></p>';
			$msg .= '<p>Message: <strong>'.$message.'</strong></p>';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <'.$guest_email.'>' . "\r\n";
			mail($to,$subject,$msg,$headers);
			
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$status= $this->save->saveInfo('enquiries',$data);

			if($status){
				$this->session->set_flashdata('success','Message Sent ! We will connect with you soon.' );
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error sending message !');
				redirect('Home');
			}
		}else{
			$error=trim(strip_tags(validation_errors()));
			$this->session->set_flashdata('failed',$error);
			redirect('Home');
		}
	}

	public function Subscribe()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		if($this->form_validation->run() == true){
			$web=$this->fetch->getWebProfile();
			$guest_email=$this->input->post('email');
			
			$to= $web->email;
			$subject = "New subscription - Gyan Ganga School";
			$msg = '<h4>You have a new subscription from- '.$guest_email.'</h4>';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <'.$guest_email.'>' . "\r\n";
			mail($to,$subject,$msg,$headers);

			$data['date']=date('Y-m-d');
			$data['email']=$guest_email;
			$status= $this->save->saveInfo('subscriptions',$data);
			if($status){
				$this->session->set_flashdata('success','Thank you for subscribing to our newsletter !' );
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error !');
				redirect('Home');
			}
		}

		else{
			$error=trim(strip_tags(validation_errors()));
			$this->session->set_flashdata('failed',$error);
			redirect('Home');
		}
		
	}
}
