<?php 

class Vid_model extends CI_Controller {

	

	 function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	function grabUser($grabInfo)
	{
			$query= $this->db->query("
				SELECT userName ,userStyles
				FROM users
				WHERE userId= '$grabInfo';
				
				");

			return $query->result();			
	}

	function grabUserVideos($grabVidInfo)
	{
		$query= $this->db->query("
		 SELECT userName ,userStyle
				FROM userStyles
				WHERE userName= '$grabVidInfo';
		 ");
			return $query->result();
	}

	function saveInst($currUser,$save)
	{

		$query= $this->db->query("
		 INSERT INTO usersSaved (userName, usersSaved)
				VALUES ('$currUser','$save')
		 ");
			return $query;
	}

	function placeVid($place)
	{
		$query= $this->db->query("
				SELECT videoLink,userName
				FROM userVideos
				WHERE userName= '$place'  LIMIT 1;
			");

		return $query->result();

	}
	function gatherVideo($selU,$selSty)
	{

		$query= $this->db->query("
			SELECT videoLink,userVidType
				FROM userVideos
				WHERE userName= '$selU' and userVidType = '$selSty';

			");
		return $query->result_object();

	}
	
	
	
}

?>