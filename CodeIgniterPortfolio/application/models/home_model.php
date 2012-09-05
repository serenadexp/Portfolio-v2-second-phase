<?php 

class Home_model extends CI_Controller {

	

	 function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	


	function subInfo()
	{
		

		$query=$this->db->query("
			SELECT project_Name,sub_Info,project_Tech_1,project_Tech_2,project_Tech_3,project_Tech_4,project_Tech_5,project_Tech_6
			FROM projects 
			JOIN projectSubInfo
			on projectSubInfo.project_Sub_Id = projects.project_Sub_Id
			JOIN projectTechnology
			on projectTechnology.project_Tech_Id =projects.project_Tech_Id
			WHERE project_Id=1;

			");

		return $query;
	}
	
	
	function smallInformation($numRel)
	{

		$query=$this->db->query("
			SELECT project_Name,sub_Info,project_Tech_1,project_Tech_2,project_Tech_3,project_Tech_4,project_Tech_5,project_Tech_6
			FROM projects 
			JOIN projectSubInfo
			on projectSubInfo.project_Sub_Id = projects.project_Sub_Id
			JOIN projectTechnology
			on projectTechnology.project_Tech_Id =projects.project_Tech_Id
			WHERE project_Id='$numRel';

			");

		return $query->result_object();
	}
	
	
}

?>