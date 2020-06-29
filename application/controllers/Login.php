<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Login controller
 * @author Ankur Agrawal
 */
class Login extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model', 'auth');
        $this->load->model('GetModel', 'fetch');
    }

    public function index(){
        $this->redirectIfLoggedIn();
        $this->load->view('kart/login');
    }
    
	public function register()
	{
		$this->load->view('kart/register');
    }
  
	public function regPhoneCheck()
	{
       if($this->fetch->getPhone($this->input->post('mobile_no')) > 0){
           echo true;
       }
       else{
           echo false;
       }
	}
    
	public function regOtp()
	{
        $_SESSION["vno"] = rand(100000,999999);
        echo $_SESSION["vno"];
    }
    
	public function VerifyOtp()
	{
        if($_POST['otp']==$_SESSION['vno']){
            echo true;
        }
        else{
            echo false;
        }
    }
    
	public function regKart()
	{
        $data=$this->input->post();
        $data['password']=password_hash($data['password'], PASSWORD_DEFAULT);
        $data['role_id']='2';
        
        $this->load->model('AddModel', 'add');
        $id=$this->add->create_user('users', $data);

        $data2['user_id']=$id;
        $status=$this->add->saveInfo('user_info', $data2);
        echo $status;
    }

    public function regSuccess(){
        $this->session->set_flashdata('success','You have successfully registered with Cropicle. You can login after your profile has been verified by our executive. Further information will be sent to your registered number.' );
        redirect('Login');
    }

    public function regError(){
        $this->session->set_flashdata('failed','Some error occured. Please try again after sometime.' );
        redirect('Login');
    }

    public function forgot(){
        $this->load->view('kart/forgot-password');
    }

    public function authenticate(){
        $this->redirectIfLoggedIn();
        $this->form_validation->set_rules('mobile_no', 'Mobile no.', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $response ['errors'] = '';
        if($this->form_validation->run() == FALSE){
            // $response[ 'errors' ]= trim(strip_tags(validation_errors())) ;
            $response[ 'errors' ]= 'Invalid inputs' ;
        }
        else{
            if($user = $this->auth->authenticate($this->input->post()) ){
                $userSessArr = array(
                    "role_id" => $user->role_id,
                    "user_id" => $user->id,
                    "login_time" =>date("Y-m-d H:i:s"),
                    "is_logged_in" => 1,
                    "ip_address" => $this->input->ip_address(),
                );
                $this->load->model('AddModel', 'add');
                $sessResult = $this->add->create_user_session($userSessArr);
                $user->kart_session_id = $sessResult;
                $this->session->set_userdata(['kart' =>  $user]);
                $this->redirectIfLoggedIn();
            }else{
                $response['errors'] .= "Invalid credentials";
            }
        }
        
        $this->load->view('kart/login',$response);
    }

    public function changePwd(){
        $this->form_validation->set_rules('oldp', 'Old Password', 'required|min_length[6]');
        $this->form_validation->set_rules('newp', 'New Password', 'required|min_length[6]');
        $this->form_validation->set_rules('cnfp', 'Confirm Password', 'required|min_length[6]');
        if($this->form_validation->run() == TRUE){
            $data=$this->input->post();
            $admProfile=$this->fetch->getAdminProfile();
            if($data['newp']==$data['cnfp']){
                if( password_verify($data['oldp'], $admProfile->pwd) ){
                    $hash['pwd'] = password_hash( $this->input->post('cnfp'), PASSWORD_DEFAULT );
                    $status=$this->auth->changeLoginPassword($hash, $admProfile->user_id);

                    if($status){
                        $this->session->set_flashdata('success','Password Updated ! Please login again.');
                        redirect('Login/logout');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/adminProfile');
                    }
                }
                else{
                    $this->session->set_flashdata('failed','Invalid old password !');
                    redirect('Admin/adminProfile');
                }
            }
            else{
                $this->session->set_flashdata('failed','New & confirm password should be same !');
                redirect('Admin/adminProfile');
            }

            
        }
        else{
            $admProfile=$this->fetch->getAdminProfile();
            $this->load->view( 'kart/adminheader', ['admProfile' => $admProfile, 'errors'=> validation_errors()] ); 
            $this->load->view('kart/adminaside'); 
            $this->load->view('kart/adminProfile'); 
            $this->load->view('kart/adminfooter');  
        }
    }

    public function logout(){
        $sessId='';
        $sessId = $this->session->kart->kart_session_id;
		if($sessId!=''){

			$data = array(
				"is_logged_in" => 0,
				"logout_time" => date("Y-m-d H:i:s"),
			);
            $this->load->model('EditModel', 'update');
            $sessResult = $this->update->updateInfoById('user_sessions', $data,'id',$sessId);
		}
        $this->session->unset_userdata(['kart']);
        $this->session->sess_destroy();
        $this->redirectIfNotLoggedIn();
    }


}

