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

	var $choosenUser;
	public function index()
	{	


		if(!$this->session->userdata('currentUser'))
		{
			redirect('home');//check if theres a session that has a user in it
		}
		else{

				$test='admin';
			$grabVids=$this->vid_model->grabUserVideos($test);
			foreach ($grabVids as $key) {
				var_dump($key->videoLink);
			}
			//var_dump($grabVids->videoLink);
			//$this->load->view('video_view');
		}
		
		

	}
	public function saveIns()
	{
		
		  $sUser = $this->session->userdata('choosenUserVid');
		  $whosLoggedIn=$this->session->userdata('currentUser');

		  $saveI=$this->vid_model->saveInst($whosLoggedIn,$sUser);

		 
		echo $_GET['name'];
	}
	public function clickedStyle()
	{	
		header('Content-type: application/json');

		$selUser = $this->session->userdata('choosenUserVid');

		$pickedStyle=$_GET['name'];
		$gatherVids= $this->vid_model->gatherVideo($selUser,$pickedStyle);
		echo json_encode($gatherVids);
	}
	public function user($id)
	{
		//var_dump($id);
		$choosenUser=$this->vid_model->grabUser($id);

		$choosenUserVids=$this->vid_model->grabUserVideos($choosenUser[0]->userName);

		$placeVid=$this->vid_model->placeVid($choosenUser[0]->userName);

		//var_dump($placeVid->videoLink);
		foreach($choosenUser as $name)
		{
			$uName=$name->userName;
		}
		//var_dump($uName);

		//$this->saveIns($uName);
		$this->session->set_userdata('choosenUserVid',$choosenUser[0]->userName);
		$this->load->view('video_view',array('userVidKinds'=>$choosenUserVids,'pickedUser'=>$uName,'playVid'=>$placeVid));

		//var_dump($this->session->all_userdata());
	}
	
	public function logOut()
	{

		$this->session->sess_destroy();
		redirect('home');
	}
		
	
	
}

