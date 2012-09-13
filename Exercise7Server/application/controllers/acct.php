<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Acct extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form','file'));
		$this->load->library(array('session','upload','image_lib'));
		$this->load->model("acct_model");
		
		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{	
	if(!$this->session->userdata('currentUser'))
		{
			redirect('home');//check if theres a session that has a user in it
		}
		else{
			$theUser=$this->session->userdata('currentUser');
		 $usersInfo=$this->acct_model->gatherInfo($theUser);
		 $usersInfoSaves=$this->acct_model->pullSavedIns($theUser);
		// var_dump($usersInfo);
		$this->load->view('acct_view',array('userInfo'=>$usersInfo ,'usersInfoS'=>$usersInfoSaves));
		//$this->load->view('_view');
		}
		
		

	}
	public function editZip()
	{
		$newZip = $_POST["newvalue"];
		$grabUser=$this->session->userdata('currentUser');
		$changeZip=$this->acct_model->changeZip($newZip,$grabUser);
		echo $newZip;

	}
		public function editStyles()
	{	
		$newStyles = $_POST["newvalue"];
		$grabUser=$this->session->userdata('currentUser');
		$changeStyle=$this->acct_model->changeStyles($newStyles,$grabUser);
		echo $newStyles;
	}

	public function addLink(){

		$url= $_POST['urlLink'];
		$ourUser=$this->session->userdata('currentUser');
		$urlType= $_POST['urlType'];
		$patt= " /<[^<]+?>/";
		$pattAgain ="/[a-zA-Z]/";

		if(preg_match($pattAgain,$url)|| preg_match($pattAgain,$urlType))
		{
			if(preg_match($patt,$url)|| preg_match($patt,$urlType)){
				
				redirect("acct");
			
			}else{
		
			$add= $this->acct_model->inputLink($url,$ourUser,$urlType);
			redirect('landing');
			}
		}
		else{
			redirect("acct");
		}
	}

	function do_upload()
	{
		
		// get the uploaded image path
		$tmp_image = imagecreatefromjpeg($_FILES['userfile']['tmp_name']);

		// get user name
		$user_name = $this->session->userdata('currentUser');
		$user_name = strtolower($user_name);
		$user_name = preg_replace('/ /', "_", $user_name);

		//set file names
		$big_avatar = '/avatars/'.$user_name.'.jpg';
		$small_avatar = '/avatars/thumbs/'.$user_name.'.jpg';

		// get original width and height
		list($width, $height, $type, $attr) = getimagesize($_FILES['userfile']['tmp_name']);

		if($width>$height){
			//make the big image
			$newHeight = 220;
			$percent = $newHeight/$height;
			$newWidth = $width*$percent;
			$crop_img_big = imagecreatetruecolor(220,220);
			imagecopyresized($crop_img_big, $tmp_image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
			imagejpeg($crop_img_big,$_SERVER['DOCUMENT_ROOT'].'/avatars/'.$user_name.'.jpg',100);

			//make the small image
			$tmp_image_big = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].'/avatars/'.$user_name.'.jpg');
			list($tmp_image_big_width, $tmp_image_big_height) = getimagesize('./avatars/'.$user_name.'.jpg');
			$crop_img_small = imagecreatetruecolor(100,100);
			imagecopyresized($crop_img_small, $tmp_image_big, 0, 0, 0, 0, 100, 100, $tmp_image_big_width, $tmp_image_big_height);
			imagejpeg($crop_img_small,$_SERVER['DOCUMENT_ROOT'].'/avatars/thumbs/'.$user_name.'.jpg',100);

			$user_name = $this->session->userdata('currentUser');
			$this->acct_model->insertBigImg($big_avatar, $user_name);
			$this->acct_model->insertSmallImg($small_avatar, $user_name);
			redirect('landing','refresh');
		}else{
			//make the big image
			$newWidth = 220;
			$percent = $newWidth/$width;
			$newHeight = $height*$percent;
			$crop_img_big = imagecreatetruecolor(220,220);
			imagecopyresized($crop_img_big, $tmp_image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
			imagejpeg($crop_img_big,$_SERVER['DOCUMENT_ROOT'].'/avatars/'.$user_name.'.jpg',100);

			//make the small image
			$tmp_image_big = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].'/avatars/'.$user_name.'.jpg');
			list($tmp_image_big_width, $tmp_image_big_height) = getimagesize('./avatars/'.$user_name.'.jpg');
			$crop_img_small = imagecreatetruecolor(100,100);
			imagecopyresized($crop_img_small, $tmp_image_big, 0, 0, 0, 0, 100, 100, $tmp_image_big_width, $tmp_image_big_height);
			imagejpeg($crop_img_small,$_SERVER['DOCUMENT_ROOT'].'/avatars/thumbs/'.$user_name.'.jpg',100);

			$user_name = $this->session->userdata('currentUser');
			$this->acct_model->insertBigImg($big_avatar, $user_name);
			$this->acct_model->insertSmallImg($small_avatar, $user_name);
			redirect('landing','refresh');
		}

	}

	public function logOut()
	{

		$this->session->sess_destroy();
		redirect('home');
	}
		
	
	
}

