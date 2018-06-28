<?php
class CountryModel extends CI_Model {
 function __construct()
    {
              parent::__construct();
              $this->load->database();
    }
    function newCountry($data)
{
      if($this->db->insert('tbl_country',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

}
function countryList()
{
 $query = $this->db->get('tbl_country');
  return $query->result();
    }
function editCountry($data,$id)
    {

      $this->db->where('country_id',$id);      //var_dump($id);exit();
     // $this->db->from('tbl_country');
   if($this->db->update('tbl_country',$data))
   {
     return "SUCCESS";
   }
   else {
     {
       return "FAILED";
     }
   }
        }

  function getCountry($id){
  //  $sql = "SELECT * FROM employee WHERE id = ?";
    //$query =$this->db->query($sql, array($id));
    $this->db->select('*');
    $this->db->from('tbl_country');
    $this->db->where('country_id',$id);
    $query = $this->db->get();
    return $query->result();
    }
 function deleteCountry($id)
    {
       $this->db->delete('tbl_country', array('country_id' => $id));
    }
       }
?>
