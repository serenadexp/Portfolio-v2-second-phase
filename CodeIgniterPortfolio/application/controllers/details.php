<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Details extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('session');
		$this->load->model('detail_model');

		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{	
		
		$this->pullChoice();
		
		
	}

	public function pullChoice()
	{
		
		$info=$this->detail_model->information();
		$this->loadDetail($info);

	}

	public function loadDetail($info)
	{

		$this->load->view('detail_view',array('dInfo'=>$info));

	}

		

}
