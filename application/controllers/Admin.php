<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
		$this->load->model('AddModel','save');
		$this->redirectIfAdminNotLoggedIn();
	}

	public function index()
	{
        // echo 'Logged IN';exit;
		$this->load->view('admin/header',['title'=>'Dashboard']);
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}

	public function profile()
	{
		$profile=$this->fetch->getInfoById('user_info','user_id',$this->session->admin->id);
		$this->load->view('admin/header',['title'=>'Profile','data'=>$profile]);
		$this->load->view('admin/profile');
		$this->load->view('admin/footer');
	}


	public function manageadmin()
	{
		$lists=$this->fetch->demandLists(4);
		$order=$this->fetch->adminStock();
		$q=0;
		foreach($order as $o){
			if(isset($o->remaining_qty)){
				$o->qty=$o->remaining_qty;
			}
			$time=date('d-m-Y',strtotime($o->updated));
			$q+=$o->qty;
		}
		// echo '<pre>';var_dump($order);exit;
		// if(!empty($order)){
		// 	$order_old=$this->fetch->lastSecondadminStock();
		// 	$q=0;
		// 	foreach($order as $o){
		// 		foreach($order_old as $k=>$old){
		// 			if($old->item_id==$o->item_id){
		// 				$o->qty+=$old->remaining_qty;
		// 				unset($order_old[$k]);
		// 			}
		// 			else{
		// 				$old->qty=$old->remaining_qty;
		// 				$time=date('d-m-Y',strtotime($old->updated));
		// 			}
		// 		}
		// 	}
		// 	foreach($order_old as $o){
		// 		$order[]=$o;
		// 	}
		// 	foreach($order as $o){
		// 		$q+=$o->qty;
		// 	}
		// 	$c=sizeof($order);
		// }
		// else{
		// 	$order=$this->fetch->lastSecondadminStock();
		// 	$q=0;
		// 	foreach($order as $o){
		// 		$o->qty=$o->remaining_qty;
		// 		$time=date('d-m-Y',strtotime($o->updated));
		// 		$q+=$o->qty;
		// 	}
		// 	$c=sizeof($order);
		// }
		$c=sizeof($order);
		$response=['title'=>'Manage admin',
					'data'=>$lists,
					'stock'=>$order,
					'count'=>$c,
					'time'=>$time,
					'qty'=>$q	
					];
		$this->load->view('admin/header',$response);
		$this->load->view('admin/manage-admin');
		$this->load->view('admin/footer');
	}

	public function demandLists()
	{
		$lists=$this->fetch->demandListsLess();
		// echo'<pre>';var_dump($lists);exit;
		$this->load->view('admin/header',['title'=>'Demand lists',
									'data'=>$lists
								]);
		$this->load->view('admin/demand-lists');
		$this->load->view('admin/footer');
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
		$cap=$this->fetch->getInfoById('user_info','user_id',$this->session->admin->id);
		$this->load->view('admin/header',['title'=>'Demand form','data'=>$data,'cap'=>$cap->capacity_admin]);
		$this->load->view('admin/demand-form');
		$this->load->view('admin/footer');
	}

	public function orders()
	{
		$this->load->view('admin/header',['title'=>'Orders']);
		$this->load->view('admin/orders');
		$this->load->view('admin/footer');
	}

	public function payments()
	{
		$this->load->view('admin/header',['title'=>'Payments']);
		$this->load->view('admin/payments');
		$this->load->view('admin/footer');
	}

}
