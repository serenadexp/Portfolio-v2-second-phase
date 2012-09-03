<?php 

class Detail_model extends CI_Controller {

	

	 function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	


	function information()
	{
		

		$query=$this->db->query("
			
			SELECT project_Name, concept_Info ,design_Info, development_Info,final_Img_1,final_Img_2,final_Img_3,final_Img_4,final_Img_5,final_Img_6,production_Img_1,production_Img_2,production_Img_3,production_Img_4
			FROM projects
			JOIN projectInformation
			on projectInformation.project_Info_Id = projects.project_Info_Id
			JOIN projectImages
			on projectImages.project_Img_Id = projects.project_Img_Id
			WHERE project_Id=1;
			");

		return $query;
	}
	
	

	
	
}

?>