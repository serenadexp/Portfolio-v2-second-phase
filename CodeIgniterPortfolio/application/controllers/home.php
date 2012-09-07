<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
		//$this->load->library('email',$config);
		$this->load->model("home_model");


		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{	

		
		$config =Array(

				'protocol' => 'smtp',
				'smtp_host' =>'ssl://smtp.googlemail.com',
				'smtp_port'=>465,
				'smtp_user'=>'katosourai@gmail.com',
				'smtp_pass'=>'destiny15'

			);
		$this->load->library('email',$config);
		$infoPull=$this->pullSubInfo();

		
	}

	public function pullSubInfo()
	{

		$info=$this->home_model->subInfo();

		$this->loadView($info);

	}

	public function newSelection()
	{
		// header('Content-type: application/json');
		$catchRel=$_GET['projectNum'];
		$sendRel=$this->home_model->smallInformation($catchRel);
		echo json_encode($sendRel);
			// var_dump($sendRel);


	}
	public function emailSend()
	{
		// $name=$_GET['firstLast'];
		// $email=$_GET['email'];
		// $subject=$_GET['subject'];
		// $message=$_GET['message'];

		//$this->email->set_newline('\r\n');
		$this->email->from('katosourai@gmail.com');
		$this->email->to('zero15xx@aol.com');
		$this->email->subject('hi tester');
		$this->email->message('go andre');
		$this->email->send();

var_dump($this->email->print_debugger());
		// var_dump($name);
	}
	public function loadView($myInfo)
	{
			$this->load->view('home_view',array('inPulls'=>$myInfo));

	}


	
	

}

