<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Vid extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model("team_model");
		$this->load->helper(array('url','form'));
		$this->load->library('session');
		$this->load->model("vid_model");
		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{	
$this->load->view('video_view');

		// if(!$this->session->userdata('currentUser'))
		// {
		// 	redirect('home');//check if theres a session that has a user in it
		// }
		// else{

		// 		$test='admin';
		// 	$grabVids=$this->vid_model->grabUserVideos($test);
		// 	foreach ($grabVids as $key) {
		// 		var_dump($key->videoLink);
				
		// 	}
		// 	//var_dump($grabVids->videoLink);
			
		// //$this->load->view('_view');
		// }
		
		

	}
	public function user($id)
	{
		//var_dump($id);
		$choosenUser=$this->vid_model->grabUser($id);

		$choosenUserVids=$this->vid_model->grabUserVideos($choosenUser[0]->userName);
		//$this->load->view('video_view');
		var_dump($choosenUserVids);
	}
	public function logOut()
	{

		$this->session->sess_destroy();
		redirect('home');
	}
		
	
	
}

