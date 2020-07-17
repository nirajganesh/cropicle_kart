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
		$inactiveItems=$this->fetch->record_count('items_master','is_active','0');
		$activeItems=$this->fetch->record_count('items_master','is_active','1');
		$items=$this->fetch->record_count('items_master');
		$karts=$this->fetch->record_count('users','role_id','2');
		$orders=$this->fetch->record_count('orders');
		$payments=$this->fetch->record_count('payment_details');
		$last_payment='0';
		$this->load->view('admin/header',['title'=>'Dashboard',
										'inactiveItems'=>$inactiveItems,
										'activeItems'=>$activeItems,
										'items'=>$items,
										'karts'=>$karts,
										'orders'=>$orders,
										'payments'=>$payments,
										'last_payment'=>$last_payment
										]);
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

	public function kartUsers()
	{
		$karts=$this->fetch->getInfoParams('users','role_id','2');
		$this->load->view('admin/header',['title'=>'Karts (hawkers)','data'=>$karts]);
		$this->load->view('admin/karts');
		$this->load->view('admin/footer');
	}

	public function itemsMaster()
	{
		$items=$this->fetch->getInfo('items_master');
		$this->load->view('admin/header',['title'=>'Items Master list','data'=>$items]);
		$this->load->view('admin/items-master');
		$this->load->view('admin/footer');
	}

	public function locationsMaster()
	{
		$loc=$this->fetch->getInfo('locations_master');
		$this->load->view('admin/header',['title'=>'Locations Master list','data'=>$loc]);
		$this->load->view('admin/locations-master');
		$this->load->view('admin/footer');
	}

	public function kartOrders()
	{
		$pending=$this->fetch->orders('ORDERED');
		$delivered=$this->fetch->orders('DELIVERED');
		$this->load->view('admin/header',['title'=>'Kart orders','pending'=>$pending,'delivered'=>$delivered]);
		$this->load->view('admin/orders');
		$this->load->view('admin/footer');
	}

	public function addItem()
	{
		$units=$this->fetch->getInfo('units');
		$this->load->view('admin/header',['title'=>'Add item','units'=>$units,'submissionPath'=>base_url('AddAdm/item')]);
		$this->load->view('admin/item-form');
		$this->load->view('admin/footer');
	}

	public function editItem($id)
	{
		$item=$this->fetch->getInfoById('items_master','id',$id);
		$units=$this->fetch->getInfo('units');
		$this->load->view('admin/header',['title'=>'Edit item','data'=>$item, 'units'=>$units, 'submissionPath'=>base_url('EditAdm/item/').$id]);
		$this->load->view('admin/item-form');
		$this->load->view('admin/footer');
	}

	public function addLoc()
	{
		$this->load->view('admin/header',['title'=>'Add Location','submissionPath'=>base_url('AddAdm/location')]);
		$this->load->view('admin/location-form');
		$this->load->view('admin/footer');
	}

	public function editLoc($id)
	{
		$item=$this->fetch->getInfoById('locations_master','id',$id);
		$this->load->view('admin/header',['title'=>'Edit Location','data'=>$item, 'submissionPath'=>base_url('EditAdm/location/').$id]);
		$this->load->view('admin/location-form');
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

	public function Users()
	{
		$users=$this->fetch->getInfoParams('users','role_id','3');
		$this->load->view('admin/header',['title'=>'Users','data'=>$users]);
		$this->load->view('admin/users');
		$this->load->view('admin/footer');
	}

	public function userDemands()
	{
		$pending=$this->fetch->userDemands('PENDING');
		$approved=$this->fetch->userDemands('APPROVED');
		$this->load->view('admin/header',['title'=>'User demands','pending'=>$pending,'approved'=>$approved]);
		$this->load->view('admin/user-demands');
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
	

	// Pending order details (AJAX Modal)
	public function pOrderDetails()
	{
		$list=$this->fetch->orderDetailsById($this->input->post('id'));
		$amt=0;
		// echo'<pre>';var_dump($list);exit;
		$response='
			<div class="row">
				<p class="ml-1 text-dark">Order no. - <strong>'.$this->input->post('id').'</strong></p>
			</div>
			<div class="row">
				<p class="ml-1 text-dark">No. of items - '.sizeof($list).'</p>
			</div>
			<hr>
			<form method="POST" action="EditAdm/approveOrder/'.$this->input->post('id').'">
				<div class="row">';
		foreach($list as $i){
			$amt+=$i->qty*$i->item_price_kart;
			$response.='
						<div class="col-sm-6 p-0 pt-1 border-right d-flex">
							<div class="col">'.$i->item_name.' -</div>
							<input type="text" value="'.$i->item_id.'" class="form-control" name="item_id[]" hidden required>
                            <div class="input-group input-group-sm col-7 ">
                                <input type="number" value="'.$i->qty.'" data-bts-step="0.25" data-bts-decimals="2" min="0"  step="0.25" class="form-control digits touchspin touchspin-min-max" data-bts-postfix="Kg" placeholder="Qty" name="qty[]" required>
                            </div>
						</div>';
		}	
		$response.='
					<div class="col-12 p-0 mt-2">
						<mark class="col py-1">Amount: Rs.'.$amt.'/-</mark> <br>
						<div class="col mt-2">Payment mode: <span class="text-dark">Cash</span> </div>
					</div>
				</div>
				<div class="modal-footer px-0">
					<a href="'.base_url('Edit/cancelOrder/').$this->input->post('id').'" class="btn btn-danger">Reject</a>
					<button type="submit" class="btn btn-success">Approve</button>
				</div>
			</form>';
		echo $response;
	}

	// Delivered order details (AJAX Modal)
	public function dOrderDetails()
	{
		$order=$this->fetch->orderDetailsById($this->input->post('id'));
		$before_order_id=$this->fetch->getBeforeOrder($this->input->post('id'));
		if($before_order_id){
			$before_order=$this->fetch->orderDetailsById($before_order_id);
			foreach($order as $or){
				foreach($before_order as $b){
					if($or->item_id==$b->item_id){
						$or->qty-=$b->remaining_qty;
					}
				}
			}
		}
		foreach($order as $a){
			if($a->qty>0){
				$arr[] = (object) [
					'item_name' => $a->item_name,
					'item_id' => $a->item_id,
					'qty' => $a->qty
				];
			}
		}
		$info=$this->fetch->getInfoById('orders','id',$this->input->post('id'));
		// echo'<pre>';var_dump($arr,$info);exit;
		$response='
			<div class="row">
				<p class="text-dark col-5">Order no. : <strong>'.$this->input->post('id').'</strong></p>
				<p class="text-dark col-7 text-right">Order date : '.date('d-M-Y',strtotime($info->date)).'</p>
			</div>
			<div class="row">
				<p class="ml-1 text-dark">Status : <strong class="text-success">'.$info->status.'</strong></p>
			</div>
			<div class="row">
				<p class="ml-1 text-dark">No. of items : '.sizeof($arr).'</p>
			</div>
			<hr>
				<div class="row">';
		foreach($arr as $i){
			$response.='
						<div class="col-sm-6 p-0 pt-1 border-right d-flex">
							<div class="col-6">'.$i->item_name.' -</div>
							<div class="col-6">'.$i->qty.' Kg</div>
						</div>';
		}	
		$response.='
					<div class="col-12 p-0 mt-2">
						<mark class="col py-1">Amount: Rs.'.$info->total_amt.'/-</mark> <br>
						<div class="col mt-2">Payment mode: <span class="text-dark">'.$info->payment_type.'</span> </div>
					</div>
				</div>
				<div class="modal-footer px-0">
					<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
				</div>';
		echo $response;
	}



	
	// public function listFullDetails()
	// {
	// 	$list=$this->fetch->demandListById($this->input->post('id'));
	// 	$response='
	// 		<div class="row">
	// 			<p class="ml-1 text-dark">List Name - <strong>'.$list->name.'</strong></p>
	// 		</div>
	// 		<div class="row">
	// 			<p class="ml-1 text-dark">No. of items - '.$list->itemsCount.'</p>
	// 		</div>
	// 		<hr>
	// 		<div class="row">';

	// 	foreach($list->items as $i){
	// 		$response.='
	// 					<div class="col-sm-6 p-0 pt-1 border-right d-flex">
	// 						<div class="col-6">'.$i->item_name.' -</div>
	// 						<div class="col-5">'.$i->qty.' '.$i->unit_short_name.'</div>
	// 					</div>
	// 					';
	// 	}	
	// 	$response.='</div>';
	// 	echo $response;
	// }


		// public function manageadmin()
	// {
	// 	$lists=$this->fetch->demandLists(4);
	// 	$order=$this->fetch->adminStock();
	// 	$q=0;
	// 	foreach($order as $o){
	// 		if(isset($o->remaining_qty)){
	// 			$o->qty=$o->remaining_qty;
	// 		}
	// 		$time=date('d-m-Y',strtotime($o->updated));
	// 		$q+=$o->qty;
	// 	}
	// 	// echo '<pre>';var_dump($order);exit;
	// 	// if(!empty($order)){
	// 	// 	$order_old=$this->fetch->lastSecondadminStock();
	// 	// 	$q=0;
	// 	// 	foreach($order as $o){
	// 	// 		foreach($order_old as $k=>$old){
	// 	// 			if($old->item_id==$o->item_id){
	// 	// 				$o->qty+=$old->remaining_qty;
	// 	// 				unset($order_old[$k]);
	// 	// 			}
	// 	// 			else{
	// 	// 				$old->qty=$old->remaining_qty;
	// 	// 				$time=date('d-m-Y',strtotime($old->updated));
	// 	// 			}
	// 	// 		}
	// 	// 	}
	// 	// 	foreach($order_old as $o){
	// 	// 		$order[]=$o;
	// 	// 	}
	// 	// 	foreach($order as $o){
	// 	// 		$q+=$o->qty;
	// 	// 	}
	// 	// 	$c=sizeof($order);
	// 	// }
	// 	// else{
	// 	// 	$order=$this->fetch->lastSecondadminStock();
	// 	// 	$q=0;
	// 	// 	foreach($order as $o){
	// 	// 		$o->qty=$o->remaining_qty;
	// 	// 		$time=date('d-m-Y',strtotime($o->updated));
	// 	// 		$q+=$o->qty;
	// 	// 	}
	// 	// 	$c=sizeof($order);
	// 	// }
	// 	$c=sizeof($order);
	// 	$response=['title'=>'Manage admin',
	// 				'data'=>$lists,
	// 				'stock'=>$order,
	// 				'count'=>$c,
	// 				'time'=>$time,
	// 				'qty'=>$q	
	// 				];
	// 	$this->load->view('admin/header',$response);
	// 	$this->load->view('admin/manage-admin');
	// 	$this->load->view('admin/footer');
	// }


}
