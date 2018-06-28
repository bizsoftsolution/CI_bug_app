<?php
class DCcalendarmodel extends CI_Model {
 function __construct()
    {
	  parent::__construct();
	  $this->load->database();
    }
    
//**********************************************************************************************************************************************
//                                                                   [ Dive Center Leisure START ] //**********************************************************************************************************************************************

	function DCcalendarlist1()
	{
		$this->db->select('*');
		$this->db->from('groups');
		//$this->db->join('resources', 'resources.group_id = groups.id'); 
		//$this->db->order_by("name");
		$query = $this->db->get();
		echo json_encode($query->result_array());
	}
	function DCcalendarbookinglist()
	{
		$this->db->select('*');
		$this->db->from('events');
		//$this->db->join('resources', 'resources.group_id = groups.id'); 
		//$this->db->order_by("name");
		$query = $this->db->get();
		echo json_encode($query->result_array());
	}
	
}
?>
