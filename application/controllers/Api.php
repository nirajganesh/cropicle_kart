<?php

require_once (APPPATH.'libraries\razorpay\Razorpay.php');

use Razorpay\Api\Api as RazorpayApi;

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MY_Controller {
	function __construct()
    {
		parent:: __construct();
		$this->load->model('ApiModel','api');
    }

    public function razorpay()
	{
        $this->form_validation->set_rules('payable_amt', 'Amt', 'required');
        if($this->form_validation->run() == true){
            $razor = new RazorpayApi('rzp_test_zieAI4uofatoLI', 'x8zezITJNtvYRD1jFIrTMCIG');
            $razorpayOrder = $razor->order->create([
                'amount'          => $this->input->post('payable_amt') * 100, 
                'currency'        => 'INR',
                'payment_capture' => 1, 
            ]);
            if($razorpayOrder['id']){
                echo $razorpayOrder['id'];
            }
            else{
                echo 'error';
            }
        }
        else{
            echo 'form_error';
        }
    }

    public function items()
	{
        $data=$this->api->getInfo('items_master');
        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    public function categories()
	{
        $data =$this->api->getInfo('categories_master');
        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    public function category($id)
	{
        $data=$this->db->from('items_master')
                ->where('category_id',$id)
                ->where('is_active','1');
                if( isset($_GET['sort']) && $_GET['sort']=='htol' ){
                    $data=$data->order_by('item_price_customer','DESC');
                }
                if( isset($_GET['sort']) && $_GET['sort']=='ltoh' ){
                    $data=$data->order_by('item_price_customer','ASC');
                }
                $data=$data->get()->result();
        echo json_encode($data);
    }

    public function search()
	{
      $query=$_POST['query'];
      $data=$this->db->from('items_master')
                ->where("item_name LIKE '%$query%'")
                ->where('is_active','1')
                ->get()
                ->result();
        echo json_encode($data);
    }

    public function orders($uid)
	{
        $data=$this->api->getInfoById('order_customer','user_id',$uid);
        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    public function order($oid)
	{
        $data['order_info']=$this->api->orderInfo($oid);
        $data['order_detail_customer']=$this->api->orderDetails($oid);
        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    public function user($id)
	{
        $data=$this->api->getUser($id);
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
    public function registering()
	{
        // var_dump($this->input->post());exit;
        $inputs=$this->input->post();
        $count=$this->api->getInfoById('users','mobile_no',$inputs['mobile_no']);
        if($count){
            echo 'present';
        }
        else{
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('mobile_no', 'Phone', 'required|min_length[10]|max_length[10]');
            $count=$this->api->getInfoById('users','mobile_no',$inputs['mobile_no']);
            if($this->form_validation->run() == true){
                $data['name']=$this->input->post('name');
                $data['mobile_no']=$this->input->post('mobile_no');
                $data['role_id']='3';
                $data['is_verified']='1';
                $data['is_active']='1';
                $data['password']=password_hash($this->input->post('password'), PASSWORD_DEFAULT);

                $uid=$this->api->saveInfo('users',$data);
                if($uid){
                    if($this->input->post('email')!=''){
                        $data2['user_id']=$uid;
                        $data2['email']=$this->input->post('email');
                        $data2['device_token']=$this->input->post('device_token');
                        $uid2=$this->api->saveInfo('user_info',$data2);
                    }
                    else{
                        $data2['user_id']=$uid;
                        $data2['device_token']=$this->input->post('device_token');
                        $uid2=$this->api->saveInfo('user_info',$data2);
                    }
                    echo $uid;
                }
                else{
                    echo 'error';
                }
            }
            else{
                echo 'error';
            }
        }
    }

    public function check_number()
	{
        // var_dump($this->input->post());exit;
        $count=$this->api->getInfoById('users','mobile_no',$this->input->post('mobile_no'));
        if($count){
            echo 'present';
        }
        else{
            echo 'true';
        }
    }

    public function add_address()
	{
        $this->form_validation->set_rules('house_no', 'House no.', 'required');
        $this->form_validation->set_rules('landmark', 'Landmark', 'required');
        $this->form_validation->set_rules('mobile_no', 'Phone', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|min_length[6]|max_length[6]');
        $this->form_validation->set_rules('user_id', 'User_id', 'required');
        
        if($this->form_validation->run() == true){
            $inputs=$this->input->post();
            $a=$this->api->saveInfo('user_address',$inputs);
            if($a){
                echo $a;
            }
            else{
                echo 'error';
            }
        }
        else{
            echo 'error';
        }
    }

    public function check_address()
	{
       $this->form_validation->set_rules('user_id', 'User_id', 'required');
        if($this->form_validation->run() == true){
            $inputs=$this->input->post();
            $count=$this->api->getInfoById('user_address','user_id',$inputs['user_id']);
            if($count){
                echo 'true';
            }
            else{
                echo 'error';
            }
        }
        else{
            echo 'error';
        }
    }

    public function update_address()
	{
        // var_dump($this->input->post());exit;
        $this->form_validation->set_rules('house_no', 'House no.', 'required');
        $this->form_validation->set_rules('landmark', 'Landmark', 'required');
        $this->form_validation->set_rules('mobile_no', 'Phone', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|min_length[6]|max_length[6]');
        $this->form_validation->set_rules('address_id', 'User_id', 'required');
        
        if($this->form_validation->run() == true){
            $inputs=$this->input->post();
            unset($inputs['address_id']);
            $a=$this->api->updateInfoById('user_address',$inputs,'id',$this->input->post('address_id'));
            if($a){
                echo 'true';
            }
            else{
                echo 'error';
            }
        }
        else{
            echo 'error form';
        }
    }

    public function address_list($uid)
	{
            $a=$this->api->getInfoArrById('user_address','user_id',$uid);
            if($a){
                echo json_encode($a);
            }
            else{
                echo 'error';
            } 
    }

    public function banner_list()
	{
            $a=$this->api->getInfo('banner');
            if($a){
                echo json_encode($a);
            }
            else{
                echo 'error';
            } 
    }

    public function login()
	{
       $this->form_validation->set_rules('password', 'Password', 'required');
       $this->form_validation->set_rules('mobile_no', 'Mobile_no', 'required');
        if($this->form_validation->run() == true){
            $inputs=$this->input->post();
            $count=$this->api->getInfoById('users','mobile_no',$inputs['mobile_no']);
            if($count){
                $d=password_verify($this->input->post('password'),$count->password);
                 if($d && $count->is_active=='1')
                 {
                    $e=$this->api->getInfoById('user_info','user_id',$count->id);
                    if($e->email!=null)
                    {
                        $count->email=$e->email;
                    }
                    else
                    {
                        $count->email='_blank';
                    }
                    echo json_encode($count, JSON_PRETTY_PRINT);
                 }
                 else{
                 echo 'wrong';
                 }
            }
            else{
                echo 'number_not_found';
            }
        }
        else{
            echo 'invalid_data';
        }
    }

    public function login_otp()
	{
       $this->form_validation->set_rules('mobile_no', 'Mobile_no', 'required');
        if($this->form_validation->run() == true){
            $inputs=$this->input->post();
            $count=$this->api->getInfoById('users','mobile_no',$inputs['mobile_no']);
            if($count){
                if($count->is_active=='1')
                {
                    $e=$this->api->getInfoById('user_info','user_id',$count->id);
                    if($e->email){
                        $count->email=$e->email;
                    }
                    else{
                        $count->email='_blank';
                    }
                    echo json_encode($count);
                }
                else{
                    echo 'user_not_found';
                }
            }
            else{
                echo 'user_not_found';
            }
        }
        else{
            echo 'invalid_data';
        }
    }

    public function check_login()
	{
       $this->form_validation->set_rules('mobile_no', 'Mobile_no', 'required');
        if($this->form_validation->run() == true){
            $inputs=$this->input->post();
            $count=$this->api->getInfoById('users','mobile_no',$inputs['mobile_no']);
            if($count){
                if($count->is_active=='1')
                {
                    echo 'true';
                }
                else{
                    echo 'wrong';
                }
            }
            else{
                echo 'number_not_found';
            }
        }
        else{
            echo 'invalid_data';
        }
    }
    
    public function update_profile()
	{
        // var_dump($this->input->post());exit;
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('user_id', 'User_id', 'required');
        
        if($this->form_validation->run() == true){
            $inputs['name']=$this->input->post('name');
            $a=$this->api->updateInfoById('users',$inputs,'id',$this->input->post('user_id'));
            if($a){
                if($this->input->post('email')!=''){
                    $inputs2['email']=$this->input->post('email');
                    $a2=$this->api->updateInfoById('user_info',$inputs2,'user_id',$this->input->post('user_id'));
                    if($a2){
                        echo 'true';
                    }
                    else{
                        echo 'Some error occured. Please try again';
                    }
                }
                else{
                    echo 'true';
                }
            }
            else{
                echo 'Some error occured. Please try again';
            }
        }
        else{
            echo 'Invalid data';
        }
    }

    public function update_password()
	{
        // var_dump($this->input->post());exit;
        $this->form_validation->set_rules('current_pass', 'Current_pass', 'required');
        $this->form_validation->set_rules('new_pass', 'New_pass', 'required');
        $this->form_validation->set_rules('retype_pass', 'Retype_pass', 'required');
        $this->form_validation->set_rules('user_id', 'User_id', 'required');
        if($this->form_validation->run() == true){
            if($this->input->post('new_pass') == $this->input->post('retype_pass'))
            {
                if($this->input->post('current_pass') != $this->input->post('new_pass'))
                {
                    $inputs=$this->input->post();
                    $count=$this->api->getInfoById('users','id',$inputs['user_id']);
                    if($count){
                        $check=password_verify($this->input->post('current_pass'),$count->password);
                        if($check)
                        {
                            $data['password']=password_hash($this->input->post('new_pass'), PASSWORD_DEFAULT);
                            $a=$this->api->updateInfoById('users',$data,'id',$this->input->post('user_id'));
                            if($a){
                                echo 'true';
                            }
                            else{
                                echo 'error';
                            }
                        }
                        else{
                            echo 'invalid_password';
                        }
                    }
                    else{
                        echo 'user_not_found';
                    }
                }else{
                    echo 'new_pass';
                }
            }
            else{
                echo 'new_pass_current_pass_not_matched';
            }
        }
        else{
            echo 'error form';
        }
    }

    public function profile_update_image()
    {
        // var_dump($this->input->post());exit;
        $imagename = 'defaultUserImagedata.png';
        if( $_POST['img']!=null ){
            $imagename='user'. $_POST['uid'].'_'.date('YmdHis').'.png';
            $image_base64 = base64_decode($_POST['img']);
            $file = 'assets/images/users/'.$imagename;
            file_put_contents($file, $image_base64);
        }
        $data['profile_img']=$imagename;
        $status= $this->api->updateInfoById('user_info',$data,'user_id',$this->input->post('uid'));
        if($status){
            echo 'true';
        }
        else{
            echo 'error';
        }
        
    }

    public function add_orders()
	{
    //    var_dump($this->input->post());exit;
        $this->form_validation->set_rules('house_no', 'House no.', 'required');
        $this->form_validation->set_rules('landmark', 'Landmark', 'required');
        $this->form_validation->set_rules('mobile_no', 'Phone', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|min_length[6]|max_length[6]');
        $this->form_validation->set_rules('user_id', 'User_id', 'required');
        $this->form_validation->set_rules('payment_type', 'Payment_type', 'required');
        $this->form_validation->set_rules('total_amt', 'Total', 'required');
        $this->form_validation->set_rules('additional_notes', 'Remark', 'required');
        
        if($this->form_validation->run() == true)
        {
            $inputs=$this->input->post();
            $items=json_decode($this->input->post('json'));
            $inputs['total_no_of_items']=count($items);
            $inputs['status']='PENDING';
            $inputs['date']=date('d-m-Y');
            unset($inputs['json']);
            $oid=$this->api->saveInfo('order_customer',$inputs);
            if($oid){
                foreach($items as $itm)
                {
                    $input2=array();
                    $input2['order_id']=$oid;
                    $input2['item_id']=$itm->productid;
                    $input2['qty']=$itm->productquantity;
                    $input2['item_price_customer']=$itm->productprice;
                    
                    $oid2=$this->api->saveInfo('order_detail_customer',$input2);
                }
                echo $oid;
            }
            else{
                echo 'error';
            }
        }
        else{
            echo 'error';
        }
    }
    
    public function prepaid_order()
	{
    //    var_dump($this->input->post());exit;
        $this->form_validation->set_rules('house_no', 'House no.', 'required');
        $this->form_validation->set_rules('landmark', 'Landmark', 'required');
        $this->form_validation->set_rules('mobile_no', 'Phone', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|min_length[6]|max_length[6]');
        $this->form_validation->set_rules('user_id', 'User_id', 'required');
        $this->form_validation->set_rules('payment_type', 'Payment_type', 'required');
        $this->form_validation->set_rules('total_amt', 'Total', 'required');
        $this->form_validation->set_rules('additional_notes', 'Remark', 'required');
        $this->form_validation->set_rules('api_signature', 'Sig', 'required');
        $this->form_validation->set_rules('api_payment_id', 'Pay id', 'required');
        $this->form_validation->set_rules('api_order_id', 'Order id', 'required');
        
        if($this->form_validation->run() == true){
            $inputs=$this->input->post();
            $items=json_decode($this->input->post('json'));
            $inputs['total_no_of_items']=count($items);
            $inputs['status']='PENDING';
            $inputs['date']=date('d-m-Y');
            unset($inputs['json']);
            unset($inputs['api_signature']);
            unset($inputs['api_payment_id']);
            unset($inputs['api_order_id']);
            $oid=$this->api->saveInfo('order_customer',$inputs);
            if($oid){
                foreach($items as $itm){
                    $input2=array();
                    $input2['order_id']=$oid;
                    $input2['item_id']=$itm->productid;
                    $input2['qty']=$itm->productquantity;
                    $input2['item_price_customer']=$itm->productprice;
                    $oid2=$this->api->saveInfo('order_detail_customer',$input2);
                }

                $input3['order_id']=$oid;
                $input3['api_signature']=$this->input->post('api_signature');
                $input3['api_payment_id']=$this->input->post('api_payment_id');
                $input3['api_order_id']=$this->input->post('api_order_id');
                $input3['date']=date('d-m-Y');
                $input3['status']='PAID';
                $oid3=$this->api->saveInfo('payment_details',$input3);
                echo $oid;
            }
            else{
                echo 'error';
            }
        }
        else{
            echo 'error';
        }
    }

    public function order_list($uid)
	{
            $a=$this->api->getInfoArrById('order_customer','user_id',$uid);
            if($a){
                echo json_encode($a);
            }
            else{
                echo 'error';
            } 
    }

    public function profile_image($uid)
	{ 
        //var_dump($uid);exit;
            $a=$this->api->getInfoById('user_info','user_id',$uid);
            if($a){
                echo $a->profile_img;
              
            }
            else{
                echo 'error';
            } 
    }

    public function order_details($oid)
	{
        $data=$this->db->select('od.*, i.item_name, i.item_img')
                ->from('order_detail_customer od')
                ->where('order_id',$oid)
                ->join('items_master i', 'i.id = od.item_id', 'LEFT')
                ->get()->result();
        echo json_encode($data);
    }


   public function index()
	{
        return;
    }

}