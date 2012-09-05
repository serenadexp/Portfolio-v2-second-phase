<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('session');
		$this->load->model("home_model");


		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{	
		
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

	public function loadView($myInfo)
	{
			$this->load->view('home_view',array('inPulls'=>$myInfo));

	}

	
	

}

