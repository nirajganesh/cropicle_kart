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
		$this->load->view('admin/header',['title'=>'Reports']);
		$this->load->view('admin/reports');
		$this->load->view('admin/footer');
	}
	
	
	public function showReport()
	{
		$_POST['from']=date('Y-m-d',strtotime($_POST['from']));
		$_POST['to']=date('Y-m-d',strtotime($_POST['to']));

		switch ($_POST['type']) {

			case 'userDemands':
				$response= $this->report->userDemands($_POST['from'] , $_POST['to']);
				break;
			case 'detailedUserDemands':
				$response= $this->report->detailedUserDemands($_POST['from'] , $_POST['to']);
				break;
			default:
				$response=false;
				break;
		}

		if($response){

		}
		else{
			$this->session->set_flashdata('info','No results found');
			redirect('reports');
		}
		// echo'<pre>';var_dump($this->report->$_POST['type']());exit;
	}
	

}
