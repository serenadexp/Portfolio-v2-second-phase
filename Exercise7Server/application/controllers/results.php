<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Results extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->model("search_model");
		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{
			if(!$this->session->userdata('currentUser'))
		{
			redirect('home');//check if theres a session that has a user in it
		}
		else{
		
		$uSearch=$this->session->userdata('searchQ');
		//var_dump($this->session->userdata('typedSearch'));
		$this->load->view('results_view',array('userSearch'=>$uSearch,'lastTyped'=>$this->session->userdata('typedSearch')));
		}
		
		

	}
		public function searchInfo()
	{
		$searchingUser = $_GET["usersSearch"];

		$patt= "/<[^<]+?>/";
		
		if($searchingUser =='' || preg_match($patt,$searchingUser))
		{
			print_r("nope");
			
		}
		else{
				
				$searchQuery=$this->search_model->infoSearch($searchingUser);
			}
		if($searchQuery)
		{
			$this->session->set_userdata('searchQ',$searchQuery->result());
			$this->session->set_userdata('typedSearch',$searchingUser);
			redirect('results','refresh');
		}
	}
	public function logOut()
	{

		$this->session->sess_destroy();
		redirect('home');
	}
		
	
	
}

