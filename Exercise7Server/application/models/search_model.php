<?php 

class Search_model extends CI_Controller {

	

	 function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	function infoSearch($info)
	{
			$query= $this->db->query("
				SELECT userName, userZip,userStyles,userAvatar,userId
				FROM users
				WHERE userTypeId= 2 AND username LIKE '$info%' or userZip='$info' ;
				");
			return $query;


			
	}

	function gatherInfo($user)
	{
		

		$queryUserInfo=$this->db->query("
			SELECT userName,userTypeId,userAvatar,userStyles,userZip,userSaved
			FROM users
			WHERE username='$user';

			");
		if($queryUserInfo->num_rows==1)
			{
				
				
			}
			return $queryUserInfo->result();
	}

	function reccomendedIns($currentUser)
	{
				$query= $this->db->query("
				SELECT userName, userAvatar, userStyles,userId
				FROM users
				WHERE userStyles LIKE '%zumba%' AND userTypeId= 2 LIMIT 6
				");
			return $query;


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
							SELECT userName ,userAvatar, userStyles,userId
							FROM users
							WHERE userName in ($x)


						"); return $querySave;
							


			}



	}
	

	
	
}

?>