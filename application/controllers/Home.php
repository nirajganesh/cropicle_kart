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
		$this->load->view('kart/header',['title'=>'Dashboard']);
		$this->load->view('kart/index');
		$this->load->view('kart/footer');
	}

	public function profile()
	{
		$profile=$this->fetch->getInfoById('user_info','user_id',$this->session->kart->id);
		$this->load->view('kart/header',['title'=>'Profile',
									'data'=>$profile
								]);
		$this->load->view('kart/profile');
		$this->load->view('kart/footer');
	}

	public function manageKart()
	{
		$lists=$this->fetch->demandLists(4);
		// echo'<pre>';var_dump($lists);exit;
		$this->load->view('kart/header',['title'=>'Manage Kart',
									'data'=>$lists
								]);
		$this->load->view('kart/manage-kart');
		$this->load->view('kart/footer');
	}

	public function demandLists()
	{
		$lists=$this->fetch->demandListsLess();
		// echo'<pre>';var_dump($lists);exit;
		$this->load->view('kart/header',['title'=>'Demand lists',
									'data'=>$lists
								]);
		$this->load->view('kart/demand-lists');
		$this->load->view('kart/footer');
	}

	public function listFullDetails()
	{
		$list=$this->fetch->demandListById($this->input->post('id'));
		$response='
			<div class="row">
				<p class="ml-1 text-dark">List Name - <strong>'.$list->name.'</strong></p>
			</div>
			<div class="row">
				<p class="ml-1 text-dark">No. of items - '.$list->itemsCount.'</p>
			</div>
			<hr>
			<div class="row">';

		foreach($list->items as $i){
			$response.='
						<div class="col-sm-6 p-0 pt-1 border-right d-flex">
							<div class="col-6">'.$i->item_name.' -</div>
							<div class="col-5">'.$i->qty.' '.$i->unit_short_name.'</div>
						</div>
						';
		}	
		$response.='</div>';
		echo $response;
	}

	public function demandForm()
	{
		$data=$this->fetch->allItems();
		$this->load->view('kart/header',['title'=>'Demand form','data'=>$data,'submissionPath'=>'Add/demandForm']);
		$this->load->view('kart/demand-form');
		$this->load->view('kart/footer');
	}

	public function orders()
	{
		$this->load->view('kart/header',['title'=>'Orders']);
		$this->load->view('kart/orders');
		$this->load->view('kart/footer');
	}

	public function payments()
	{
		$this->load->view('kart/header',['title'=>'Payments']);
		$this->load->view('kart/payments');
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
