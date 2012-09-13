<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

	
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
		else
		{
		$allInfo=$this->session->all_userdata();//makes the session
			$session_id = $this->session->userdata('currentUser');
			$theUser=$allInfo['currentUser'];
		
			$allInfo=$this->session->all_userdata();
			
			$this->gatherUserInfo($theUser);

		}

		
	}
	public function gatherUserInfo($theUserNow)
	{
		$queryInfo=$this->search_model->gatherInfo($theUserNow);

		$pullSave=$this->search_model->pullSavedIns($theUserNow);

		if(!$pullSave){
			$pullSave='No saved instructors';
			var_dump($pullSave);
		}
	

		$pullRec=$this->search_model->reccomendedIns($theUserNow);
		
		$this->load->view('landing_view',array('pullS'=>$pullSave,'pullR'=>$pullRec));
		
		
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
				redirect('results');
		}	
		
	}

	public function logOut()
	{
		
		$this->session->sess_destroy();
		redirect('home');
	}
		
	
	
}

