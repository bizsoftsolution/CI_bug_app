<?php
class DCpolicies extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('DCpoliciesmodel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  
  //**********************************************************************************************************************************************
 //                                                                   [ Dive Center Profile Start] //***********************************************************************************************************************************************
 
 function DCpoliciesdashboardlist()
  {
    //$data['DCpoliciesdashboardlist']=$this->DCpoliciesmodel->DCpoliciesdashboardlist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCpolicies/DCpoliciesdashboard');
    $this->load->view('template/footer');
  }
  
  
  public function addNew()
  {
    $result = array('message'=>'');	
	if($this->input->post('submit_DCpolicies_data'))
		{  
            //Prepare array of user data
			$booking_amount = $this->input->post('booking_amount');
			$booking_amount1 ="";
			if(isset($booking_amount) && is_array($booking_amount)){
				$booking_amount1 = implode(",", $booking_amount); 
			}
			$booking_total_product = $this->input->post('booking_total_product');
			$booking_total_product1 ="";
			if(isset($booking_total_product) && is_array($booking_total_product)){
				$booking_total_product1 = implode(",", $booking_total_product); 
			}
			$booking_days = $this->input->post('booking_days');
			$booking_days1 ="";
			if(isset($booking_days) && is_array($booking_days)){
				$booking_days1 = implode(",", $booking_days); 
			}
			$booking_period = $this->input->post('booking_period');
			$booking_period1 ="";
			if(isset($booking_period) && is_array($booking_period)){
				$booking_period1 = implode(",", $booking_period); 
			}
            $userData = array(
                'booking_name' => $this->input->post('name'),
                'deposit_required' => $this->input->post('depositrequired'),
                'booking_deposit' => $this->input->post('booking_deposit'),
                'booking_amount' => $booking_amount1,
                'booking_total_product' => $booking_total_product1,
                'booking_days' => $booking_days1,
                'booking_period' => $booking_period1
            );          
			//Pass user data to model
			$result['message'] = $this->DCpoliciesmodel->addNew($userData);
        }
	//$result['currency'] = $this->DCleisuremodel->getcurrency();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCpolicies/DCpoliciesadd', $result);
    $this->load->view('template/footer');
  }
  function DCpolicieslist()
  {
    $data['DCpolicieslist']=$this->DCpoliciesmodel->DCpolicieslist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCpolicies/DCpolicieslist',$data);
    $this->load->view('template/footer');
  }

  function edit($id)
  {
    $result = array('message'=>'');

	if($this->input->post('update_DCpolicies_data'))
		{  
			//Prepare array of user data
			$booking_amount = $this->input->post('booking_amount');
			$booking_amount1 ="";
			if(isset($booking_amount) && is_array($booking_amount)){
				$booking_amount1 = implode(",", $booking_amount); 
			}
			$booking_total_product = $this->input->post('booking_total_product');
			$booking_total_product1 ="";
			if(isset($booking_total_product) && is_array($booking_total_product)){
				$booking_total_product1 = implode(",", $booking_total_product); 
			}
			$booking_days = $this->input->post('booking_days');
			$booking_days1 ="";
			if(isset($booking_days) && is_array($booking_days)){
				$booking_days1 = implode(",", $booking_days); 
			}
			$booking_period = $this->input->post('booking_period');
			$booking_period1 ="";
			if(isset($booking_period) && is_array($booking_period)){
				$booking_period1 = implode(",", $booking_period); 
			}
            $userData = array(
                'booking_name' => $this->input->post('name'),
                'deposit_required' => $this->input->post('depositrequired'),
                'booking_deposit' => $this->input->post('booking_deposit'),
                'booking_amount' => $booking_amount1,
                'booking_total_product' => $booking_total_product1,
                'booking_days' => $booking_days1,
                'booking_period' => $booking_period1
            );          
			//Pass user data to model
			$result['message'] = $this->DCpoliciesmodel->updateData($userData, $id);
			if($result['message'] == 'SUCCESS')
			{
			$base_url=base_url();
			redirect("$base_url"."DCpolicies/DCpolicieslist");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['getEditdata']=$this->DCpoliciesmodel->getEditdata($id);
    $this->load->view('DCpolicies/DCpoliciesupdate',$result);
    $this->load->view('template/footer');
	}
  public function delete($id)
  {
    $this->DCpoliciesmodel->deleteData($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['DCpolicieslist']=$this->DCpoliciesmodel->DCpolicieslist();
    $this->load->view('DCpolicies/DCpolicieslist',$data);
    $this->load->view('template/footer');
  }
  
  //**********************************************************************************************************************************************//
 //                                                                   [ Dive Center Profile END] //***********************************************************************************************************************************************//

  //**********************************************************************************************************************************************
 //                                                                   [ Dive Cancellation Policy Start] //***********************************************************************************************************************************************
 public function addCancellation()
  {
    $result = array('message'=>'');	
	if($this->input->post('submit_DCcancellationpolicies_data'))
		{  
            //Prepare array of user data
			$cancellation_amount = $this->input->post('cancellation_amount');
			$cancellation_amount1 ="";
			if(isset($cancellation_amount) && is_array($cancellation_amount)){
				$cancellation_amount1 = implode(",", $cancellation_amount); 
			}
			$cancellation_total_product = $this->input->post('cancellation_total_product');
			$cancellation_total_product1 ="";
			if(isset($cancellation_total_product) && is_array($cancellation_total_product)){
				$cancellation_total_product1 = implode(",", $cancellation_total_product); 
			}
			$cancellation_days = $this->input->post('cancellation_days');
			$cancellation_days1 ="";
			if(isset($cancellation_days) && is_array($cancellation_days)){
				$cancellation_days1 = implode(",", $cancellation_days); 
			}
			$cancellation_period = $this->input->post('cancellation_period');
			$cancellation_period1 ="";
			if(isset($cancellation_period) && is_array($cancellation_period)){
				$cancellation_period1 = implode(",", $cancellation_period); 
			}
            $userData = array(
                'cancellation_name' => $this->input->post('name'),
                'cancellation_policy_type' => $this->input->post('cancellation_policy_type'),
                'cancellation_amount' => $cancellation_amount1,
                'cancellation_total_product' => $cancellation_total_product1,
                'cancellation_days' => $cancellation_days1,
                'cancellation_period' => $cancellation_period1
            );          
			//Pass user data to model
			$result['message'] = $this->DCpoliciesmodel->addCancellation($userData);
        }
	//$result['currency'] = $this->DCleisuremodel->getcurrency();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCpolicies/DCcancelpoliciesadd', $result);
    $this->load->view('template/footer');
  }
  function DCcancelpolicieslist()
  {
    $data['DCcancelpolicieslist']=$this->DCpoliciesmodel->DCcancelpolicieslist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCpolicies/DCcancelpolicieslist',$data);
    $this->load->view('template/footer');
  }
  function editCancellation($id)
  {
    $result = array('message'=>'');

	if($this->input->post('update_DCcancellationpolicies_data'))
		{  
			 //Prepare array of user data
			$cancellation_amount = $this->input->post('cancellation_amount');
			$cancellation_amount1 ="";
			if(isset($cancellation_amount) && is_array($cancellation_amount)){
				$cancellation_amount1 = implode(",", $cancellation_amount); 
			}
			$cancellation_total_product = $this->input->post('cancellation_total_product');
			$cancellation_total_product1 ="";
			if(isset($cancellation_total_product) && is_array($cancellation_total_product)){
				$cancellation_total_product1 = implode(",", $cancellation_total_product); 
			}
			$cancellation_days = $this->input->post('cancellation_days');
			$cancellation_days1 ="";
			if(isset($cancellation_days) && is_array($cancellation_days)){
				$cancellation_days1 = implode(",", $cancellation_days); 
			}
			$cancellation_period = $this->input->post('cancellation_period');
			$cancellation_period1 ="";
			if(isset($cancellation_period) && is_array($cancellation_period)){
				$cancellation_period1 = implode(",", $cancellation_period); 
			}
            $userData = array(
                'cancellation_name' => $this->input->post('name'),
                'cancellation_policy_type' => $this->input->post('cancellation_policy_type'),
                'cancellation_amount' => $cancellation_amount1,
                'cancellation_total_product' => $cancellation_total_product1,
                'cancellation_days' => $cancellation_days1,
                'cancellation_period' => $cancellation_period1
            );          
			//Pass user data to model
			$result['message'] = $this->DCpoliciesmodel->updatecancelData($userData, $id);
			if($result['message'] == 'SUCCESS')
			{
			$base_url=base_url();
			redirect("$base_url"."DCpolicies/DCcancelpolicieslist");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['getEditdata']=$this->DCpoliciesmodel->getCanceldata($id);
    $this->load->view('DCpolicies/DCcancelpoliciesupdate',$result);
    $this->load->view('template/footer');
	}
  public function deleteCancellation($id)
  {
    $this->DCpoliciesmodel->deleteCancellation($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['DCcancelpolicieslist']=$this->DCpoliciesmodel->DCcancelpolicieslist();
    $this->load->view('DCpolicies/DCcancelpolicieslist',$data);
    $this->load->view('template/footer');
  }
  
}
?>
