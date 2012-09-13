<?php 

class Acct_model extends CI_Controller {

	
var $gallery_path;
	 function __construct()
	{
		parent::__construct();	
		$this->load->database();
		$this->gallery_path = realpath(APPPATH.'../avatars');
	}
	function gatherInfo($user)
	{
		$queryUserInfo=$this->db->query("
			SELECT userName,userTypeId,userAvatarBig,userStyles,userZip,userSaved
			FROM users
			WHERE username='$user';

			");
		
			return $queryUserInfo->result();
	}
	function pullSavedIns($currentUser)
	{
			$query= $this->db->query("
				SELECT usersSaved
				FROM usersSaved
				WHERE userName='$currentUser'
				");
			$currentUserResult=array($query->result());
			foreach ($currentUserResult as $row) {
						
						$x = "'a'";
						foreach ($row as $keyNameSaved ) {//little work around to grab the info since it kept return one object
							$x = $x .",'".$keyNameSaved->usersSaved."'";
						}

						$mySaves=$keyNameSaved->usersSaved;
						
							$querySave= $this->db->query("
							SELECT userName ,userAvatar, userStyles
							FROM users
							WHERE userName in ($x)


						"); return $querySave;
								//var_dump($querySave->result());
						//$userSaved=$row->usersSaved;
						// foreach ($row as $keyNameSaved ) {
							
						// 	$mySaves=$keyNameSaved->usersSaved;
						// 	$querySave= $this->db->query("
						// 	SELECT userName ,userAvatar, userStyles
						// 	FROM users
						// 	WHERE userName='$mySaves'


			}



	}

	function inputLink($insertUrl,$insertUser,$insertType){

		$query= $this->db->query("
				 INSERT INTO userVideos (videoLink, userName,userVidType,kindId)
				VALUES ('$insertUrl','$insertUser','$insertType','1')
				 
				");

			return $query;
	}
	
	function changeZip($gotZip,$gotUser)
	{
			$query= $this->db->query("
				 
				 UPDATE users set
				 userZip='$gotZip'
				 WHERE userName='$gotUser';
				");

			return $query;
			
	}

	function changeStyles($gotStyle,$gotUser)
	{
			$query= $this->db->query("
				 
				 UPDATE users set
				 userStyles='$gotStyle'
				 WHERE userName='$gotUser';
				");

			return $query;
			
	}


	function do_upload()
	{
		$config = array(
			'allowed_type'=> 'jpg|jpeg|gif|png',
			'upload_path' =>$this->gallery_path
			);
			$this->load->library('upload',$config);
			$this->upload->do_upload();
	}

	function insertBigImg($file, $user_name)
	{	
		$sql = "UPDATE users set userAvatarBig = ? WHERE userName = ?"; 

		$query = $this->db->query($sql, array($file, $user_name));

		if($query){
			return true;
		}
	}

	function insertSmallImg($file, $user_name)
	{	
		$sql = "UPDATE users set userAvatar = ? WHERE userName = ?"; 

		$query = $this->db->query($sql, array($file, $user_name));

		if($query){
			return true;
		}
	}

	
	
	
}

?>