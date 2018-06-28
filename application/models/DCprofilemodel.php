<?php
class DCprofilemodel extends CI_Model {
 function __construct()
    {
	  parent::__construct();
	  $this->load->database();
    }
//**********************************************************************************************************************************************
//                                                                   [ Dive Center Profile START ] //**********************************************************************************************************************************************
  function dataAvailabilityCheck($user_id)
  { 
    $this->db->select('*');
    $this->db->from('tbl_dcprofile');
    $this->db->where('user_id',$user_id);
    $query = $this->db->get();
    return $query->num_rows();

  }

   function addNew($userData)
	{
      if($this->db->insert('tbl_dcprofile',$userData))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }
	}
	function getcurrency()
	{
		//$this->db->distinct();
		//$query = $this->db->get('tbl_currency');
		//return $query->result();
		
		$query = $this->db->query("SELECT DISTINCT * FROM tbl_currency");
		$result = $query->result();
		return $result;
	}
	function DClist($id)
	{
	$this->db->where('user_id', $id);
	$query = $this->db->get('tbl_dcprofile');
	return $query->result();
    }
	
	function getEditdata($id){
  //  $sql = "SELECT * FROM employee WHERE id = ?";
    //$query =$this->db->query($sql, array($id));
    $this->db->select('*');
    $this->db->from('tbl_dcprofile');
    $this->db->where('user_id',$id);
    $query = $this->db->get();
    return $query->result();
    }
	function updateData($userData,$id)
    {
    $this->db->where('user_id',$id);      //var_dump($id);exit();
	if($this->db->update('tbl_dcprofile',$userData))
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
       $this->db->delete('tbl_dcprofile', array('id' => $id));
	   //unlink(base_url("upload/slider/".$files));
    }
	
//**********************************************************************************************************************************************
//                                                                   [ Dive Center Profile END ] //**********************************************************************************************************************************************

//**********************************************************************************************************************************************
//                                                                   [ CONTACTS STAFF START ] //**********************************************************************************************************************************************

	function addNewDept($userData)
	{
      if($this->db->insert('tbl_department',$userData))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }
	}
	function getDepartment()
	{
		$query = $this->db->get('tbl_department');
		return $query->result();
	}
	function getData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_department');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	function departedit($data,$id)
    {
      $this->db->where('id',$id);      //var_dump($id);exit();
     // $this->db->from('tbl_country');
   if($this->db->update('tbl_department',$data))
   {
     return "SUCCESS";
   }
   else
     {
       return "FAILED";
     }
    }
	function deleteDepart($id)
	{
		$this->db->delete('tbl_department', array('id' => $id));
	}
	
	function DCcontactlist()
	{
	$query = $this->db->get('tbl_contacts_staffdetails');
	return $query->result();
    }
	function addNewStaff($userData)
	{
      if($this->db->insert('tbl_contacts_staffdetails',$userData))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }
	}
	function getstaffData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_contacts_staffdetails');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	function Staffdepartedit($data,$id)
    {
      $this->db->where('id',$id);      //var_dump($id);exit();
     // $this->db->from('tbl_country');
   if($this->db->update('tbl_contacts_staffdetails',$data))
   {
     return "SUCCESS";
   }
   else
     {
       return "FAILED";
     }
    }
	function deleteStaff($id)
    {
       $this->db->delete('tbl_contacts_staffdetails', array('id' => $id));
	   //unlink(base_url("upload/slider/".$files));
    }
	
//**********************************************************************************************************************************************
//                                                                   [ CONTACTS STAFF END ] //**********************************************************************************************************************************************

//**********************************************************************************************************************************************
//                                                                   [ CONTACTS DIVE MASTER START ] //**********************************************************************************************************************************************

	function DCmasterlist()
	{
	$query = $this->db->get('tbl_contacts_divemaster');
	return $query->result();
    }
	
	function addNewDivemaster($userData)
	{
      if($this->db->insert('tbl_contacts_divemaster',$userData))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }
	}
	function getdivemasterData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_contacts_divemaster');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	function editNewDivemaster($data,$id)
    {
      $this->db->where('id',$id);      //var_dump($id);exit();
     // $this->db->from('tbl_country');
   if($this->db->update('tbl_contacts_divemaster',$data))
   {
     return "SUCCESS";
   }
   else
     {
       return "FAILED";
     }
    }
	function deleteDivemaster($id)
    {
       $this->db->delete('tbl_contacts_divemaster', array('id' => $id));
	   //unlink(base_url("upload/slider/".$files));
    }
//**********************************************************************************************************************************************
//                                                                   [ CONTACTS DIVE MASTER END ] //**********************************************************************************************************************************************

//**********************************************************************************************************************************************
//                                                                   [ CONTACTS GALLERY START ] //**********************************************************************************************************************************************

/* function DCgallerylist()
	{
	$query = $this->db->get('tbl_gallery');
	return $query->result();
    } */
	
	function DCgallerylist($limit, $start)
	{
		$this->db->select('*');
		$this->db->from('tbl_gallery'); 
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
		return false;
	}
	
	function addNewGallery($userData)
	{
      if($this->db->insert('tbl_gallery',$userData))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }
	}
	function getgalleryData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	function editNewGallery($data,$id)
    {
      $this->db->where('id',$id);      //var_dump($id);exit();
     // $this->db->from('tbl_country');
   if($this->db->update('tbl_gallery',$data))
   {
     return "SUCCESS";
   }
   else
     {
       return "FAILED";
     }
    }
	function deleteGallery($id)
    {
       $this->db->delete('tbl_gallery', array('id' => $id));
	   //unlink(base_url("upload/slider/".$files));
    }

}
?>
