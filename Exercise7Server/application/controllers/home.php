<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('session');
		$this->load->model("login_model");

		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{	
		if($this->session->userdata('currentUser'))
		{
			redirect('landing');
		}
		else{
			$this->load->view('home_view');
		}
	}

	public function validateSignUp()
	{

		$signUser = $_POST["signUpUser"];
		$passUser = $_POST["signUpPass"];
		$patt= " /<[^<]+?>/";
		$pattAgain ="/[a-zA-Z]/";
		if(preg_match($pattAgain,$signUser)|| preg_match($pattAgain,$passUser))
		{
			if(preg_match($patt,$signUser)|| preg_match($patt,$passUser)){
				
				print_r("nopehtml");
			
			}
			else{
				$query=$this->login_model->signUp($signUser,$passUser);

			}
		}
		else
		{
			print_r("nope");
		}

		if($query==true)
		{
			$this->session->set_userdata('currentUser',$signUser);
			$this->successLog();
			
		}
	}

	public function validateSignUpIns()
	{

		$signInsUser = $_POST["signUpInsUser"];
		$passInsUser = $_POST["signUpInsPass"];
		$patt= " /<[^<]+?>/";
		$pattAgain ="/[a-zA-Z]/";
		if(preg_match($pattAgain,$signInsUser)|| preg_match($pattAgain,$passInsUser))
		{
			if(preg_match($patt,$signInsUser)|| preg_match($patt,$passInsUser)){
				
				print_r("nopehtml");
			
			}
			else{
				$query=$this->login_model->signUpInstructor($signInsUser,$passInsUser);
			}
		}
		else
		{
			print_r("nope");
		}
		
		if($query==true)
		{
			$this->session->set_userdata('currentUser',$signInsUser);
			$this->successLog();
			
		}
		
	}
		
	public function validateLogin()
	{
		$loginUser = $_POST["loginUser"];
		$loginPass = $_POST["loginPass"];
		$patt= " /<[^<]+?>/";
		$pattAgain ="/[a-zA-Z]/";
		if(preg_match($pattAgain,$loginUser)|| preg_match($pattAgain,$loginPass))
		{
			if(preg_match($patt,$loginUser)|| preg_match($patt,$loginPass)){
				
				print_r("nopehtml");
			
			}
			else{
				$query=$this->login_model->login($loginUser,$loginPass);
			}
		}
		else
		{
			print_r("nope");
		}
	
		

		if($query==true)
		{
			$this->session->set_userdata('currentUser',$loginUser);//sets the current user into prelim session remem session can be accessed in all controllers

			$this->successLog();
		}
	}
	public function successLog()
	{
		redirect('landing');
		
		
	}
	

}

