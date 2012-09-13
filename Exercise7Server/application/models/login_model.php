<?php 

class Login_model extends CI_Controller {

	

	 function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	function signUp($userN,$passW)
	{
			$query= $this->db->query("
				INSERT INTO users (userName, userPassword,userTypeId,userAvatar,userAvatarBig,userZip,userStyles)
				VALUES ('$userN','$passW' ,'1','avatars/dummyLarge.png','avatars/dummyLarge.png','00000','Add Style')
				");
			//make check if the query is true var dump query will give u a 1 meaning its true
			if($query==true)
			{
			return $query;
			}

	}

	function login($logUser,$logPass)
	{
			$query=$this->db->query("
				SELECT userName,userPassword
				FROM users
				WHERE userName='$logUser' and userPassword='$logPass'
				");
			
			//make check if the query is true by checking the num of rows
			if($query->num_rows==1)
			{	
				return $query = true;
				//return $query->result();
				// foreach($query->result() as $row)
				// {
				// 	$myUser=$row->userName;
				// 	//$this->gatherInfo($myUser);
				// }
			}

			
	}
	
	function signUpInstructor($insUser,$insPass)
	{

			$query= $this->db->query("
				INSERT INTO users (userName, userPassword,userTypeId,userAvatar,userAvatarBig,userZip,userStyles)
				VALUES ('$insUser','$insPass' ,'2','avatars/dummyLarge.png','avatars/dummyLarge.png','00000','Add Style')
				");
			//make check if the query is true
			if($query==true)
			{
			return $query;
			}

	}
	
	
}

?>