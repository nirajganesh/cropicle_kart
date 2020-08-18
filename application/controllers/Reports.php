<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
		$this->load->model('ReportsModel','report');
		$this->load->model('AddModel','save');
		$this->redirectIfAdminNotLoggedIn();
	}

	public function index()
	{
		$loc=$this->fetch->getInfo('locations_master');
		$this->load->view('admin/header',['reportTitle'=>'Reports','loc'=>$loc]);
		$this->load->view('admin/reports');
		$this->load->view('admin/footer');
	}
	
	
	public function showReport()
	{
		$from=date('Y-m-d 00:00:00',strtotime($_POST['from']));
		$your_date = strtotime("1 day", strtotime($_POST['to']));
		$to = date("Y-m-d 00:00:00", $your_date);

		switch ($_POST['type']) {

			case 'userDemands':
				$response= $this->report->userDemands($from, $to);
				foreach($response as $r){
					$r->name=$r->name.'<br>('.$r->mobile_no.')';
					$r->area=$r->area.', '.$r->city.', '.$r->state.', '.$r->pin_code ;
					$r->created=date('d-M-Y', strtotime($r->created));
					$r->date=$r->created;
					$r->demand_amount='₹'.$r->demand_amount.'/-';
					unset($r->city);
					unset($r->state);
					unset($r->pin_code);
					unset($r->mobile_no);
					unset($r->created);
					unset($r->status);
				}
				$result='"User demands" <br> From:'.date('d-M-Y',strtotime($_POST['from'])).'<br>To:'.date('d-M-Y',strtotime($_POST['to']));
				$title='User demands: '.date('d-m-y',strtotime($_POST['from'])).' to '.date('d-m-y',strtotime($_POST['to']));
			break;

			case 'detailedUserDemands':
				$response= $this->report->detailedUserDemands($from , $to);
				foreach($response as $r){
					$r->demand_amount='₹'.$r->demand_amount.'/-';
					$r->info= $r->name.'<br>('.$r->mobile_no.')<br> <mark> Bill amt. :'.$r->demand_amount.'</mark><br>Address: '.$r->address;
					unset($r->name);
					unset($r->address);
					unset($r->mobile_no);
					unset($r->id);
					unset($r->demand_amount);
					foreach($r->items as $i){
						$r->products[]=$i->item_name.' ('.$i->item_quantity.' '.$i->unit_short_name.') (₹'.$i->item_quantity*$i->item_price_customer.')';
					}
					unset($r->items);
					$r->items='';
					foreach($r->products as $p){
						$r->items.=$p.'<br>';
					}
					unset($r->products);
				}
				// echo '<pre>';var_dump($response);exit;
				$result='"Detailed user demands" <br> From:'.date('d-M-Y',strtotime($_POST['from'])).'<br>To:'.date('d-M-Y',strtotime($_POST['to']));
				$title='User demands: '.date('d-m-y',strtotime($_POST['from'])).' to '.date('d-m-y',strtotime($_POST['to']));
			break;

			case 'itemWiseDemands':
				$response= $this->report->itemWiseDemands($from , $to);
				$veg=$response;
				$response=array();
				$f=0;
				foreach($veg as $r){
					$response[$f]['Item']=$r['name'];
					$response[$f]['Quantity']=$r['qty'].' '.$r['unit'];
					$f++;
				}
				// echo '<pre>';var_dump($response);exit;
				$result='"Item wise demands" <br> From:'.date('d-M-Y',strtotime($_POST['from'])).'<br>To:'.date('d-M-Y',strtotime($_POST['to']));
				$title='Item wise demands: '.date('d-m-y',strtotime($_POST['from'])).' to '.date('d-m-y',strtotime($_POST['to']));
			break;

			default:
				$response=false;
			break;
		}

		if($response){
			// echo '<pre>';var_dump($response);exit;
			$this->load->view('admin/header',['reportTitle'=>$title, 'response'=>$response, 'result'=>$result]);
			$this->load->view('admin/reports');
			$this->load->view('admin/footer');
		}
		else{
			$this->session->set_flashdata('info','No results found');
			redirect('reports');
		}
	}
	

}
