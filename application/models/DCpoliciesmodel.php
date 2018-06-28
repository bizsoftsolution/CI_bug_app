<?php
class DCpoliciesmodel extends CI_Model {
 function __construct()
    {
	  parent::__construct();
	  $this->load->database();
    }
    
//**********************************************************************************************************************************************
//                                                                   [ Dive Center Leisure START ] //**********************************************************************************************************************************************
    function addNew($userData)
	{
      if($this->db->insert('tbl_booking_policies',$userData))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }
	}
	function DCpolicieslist()
	{
	//$this->db->order_by("","ASC")
	$query = $this->db->get('tbl_booking_policies');
	return $query->result();
    }
	
	function getEditdata($id){
  //  $sql = "SELECT * FROM employee WHERE id = ?";
    //$query =$this->db->query($sql, array($id));
    $this->db->select('*');
    $this->db->from('tbl_booking_policies');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
    }
	function updateData($userData,$id)
    {
    $this->db->where('id',$id);      //var_dump($id);exit();
	if($this->db->update('tbl_booking_policies',$userData))
	{
     return "SUCCESS";
	}
	else 
	{
		return "FAILED";
	}
    }
 function deleteData($id)
    {
       $this->db->delete('tbl_booking_policies', array('id' => $id));
	   //unlink(base_url("upload/slider/".$files));
    }
	
	//**********************************************************************************************************************************************
//                                                                   [ Dive Cancellation policy START ] //**********************************************************************************************************************************************
    function addCancellation($userData)
	{
      if($this->db->insert('tbl_cancellation_policies',$userData))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }
	}
	function DCcancelpolicieslist()
	{
	$query = $this->db->get('tbl_cancellation_policies');
	return $query->result();
    }
	
	function getCanceldata($id){
  //  $sql = "SELECT * FROM employee WHERE id = ?";
    //$query =$this->db->query($sql, array($id));
    $this->db->select('*');
    $this->db->from('tbl_cancellation_policies');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
    }
	function updatecancelData($userData,$id)
    {
    $this->db->where('id',$id);      //var_dump($id);exit();
	if($this->db->update('tbl_cancellation_policies',$userData))
	{
     return "SUCCESS";
	}
	else 
	{
		return "FAILED";
	}
    }
	function deleteCancellation($id)
    {
       $this->db->delete('tbl_cancellation_policies', array('id' => $id));
	   //unlink(base_url("upload/slider/".$files));
    }
}
?>