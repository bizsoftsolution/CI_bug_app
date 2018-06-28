<?php
class DCavailabiltycalendar extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('DCcalendarmodel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  
  //**********************************************************************************************************************************************
 //                                                                   [ Dive Center Profile Start] //***********************************************************************************************************************************************
 
 
  
  function index()
  {
 //   $data=$this->DCcalendarmodel->DCcalendarlist1();

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('mybookings/DCavailability_calendar');
    $this->load->view('template/footer');
  }  
  function datavalue()
  {
    $data=$this->DCcalendarmodel->DCcalendarlist1();
  }
  
  function bookingvalue()
  {
	 $data=$this->DCcalendarmodel->DCcalendarbookinglist();
  }
  
  
  //**********************************************************************************************************************************************//
 //                                                                   [ Dive Center Profile END] //***********************************************************************************************************************************************//

}
?>
