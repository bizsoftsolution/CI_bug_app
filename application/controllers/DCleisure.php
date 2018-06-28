<?php
class DCleisure extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('DCleisuremodel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  
  //**********************************************************************************************************************************************
 //                                                                   [ Dive Center Leisure Start] //***********************************************************************************************************************************************
 
  public function addNew()
  {
    $result = array('message'=>'');	
	if($this->input->post('submit_DCleisure_data'))
		{  
            //Prepare array of user data
			$commonoptions = $this->input->post('commonoptions');
			$commonoptions1 ="";
			if(isset($commonoptions) && is_array($commonoptions)){
				$commonoptions1 = implode(",", $commonoptions); 
			}
			
			$product_keyword = $this->input->post('productkeyword');
			$product_keyword1 = "";
			if(isset($product_keyword) && is_array($product_keyword)){
				$product_keyword1 = implode(",", $product_keyword); 
			}
			
			$productinit = $this->input->post('productunits');
			$productinit1 = "";
			if(isset($productinit))
			{
				$productinit1 = $this->input->post('productunits');
			}
			$discount_unit = $this->input->post('dcdiscountunit');
			
			$range_start = $this->input->post('startrange');
			$range_end = $this->input->post('endrange');
			$discount_rate = $this->input->post('field_name');
			$range_start1 ="";
			if(isset($range_start) && is_array($range_start)){
				$range_start1 = implode(",", $range_start); 
			}
			$range_end1 ="";
			if(isset($range_end) && is_array($range_end)){
				$range_end1 = implode(",", $range_end); 
			}
			$discount_rate1 ="";
			if(isset($discount_rate) && is_array($discount_rate)){
				$discount_rate1 = implode(",", $discount_rate); 
			}
			
			$ap_discount_unit = $this->input->post('apdiscountunit');
			$optional_services = $this->input->post('optionalservices');
			$divercertification = $this->input->post('divercertification');
			$divercertification1 ="";
			if(isset($divercertification) && is_array($divercertification)){
				$divercertification1 = implode(",", $divercertification); 
			}
			$diverexperience = $this->input->post('diverexperience');
			$diverexperience1 ="";
			if(isset($diverexperience) && is_array($diverexperience)){
				$diverexperience1 = implode(",", $diverexperience); 
			}
			$diverspecialties = $this->input->post('diverspecialties');
			$diverspecialties1 ="";
			if(isset($diverspecialties) && is_array($diverspecialties)){
				$diverspecialties1 = implode(",", $diverspecialties); 
			}
			
			$start_range = $this->input->post('applypromo_startdate');
			$start_date_range =date("Y-m-d", strtotime($start_range));
			
			$end_range = $this->input->post('applypromo_enddate');
			$end_date_range =date("Y-m-d", strtotime($end_range));
			//echo $str_range;
			
            $userData = array(
                'product_name' => $this->input->post('name'),
                //'dcimage' => $divecenter_picture,
                'product_description' => $this->input->post('description'),
                'product_includes' => $this->input->post('product_includes'),
                'product_excludes' => $this->input->post('productexcludes'),
                'common_options' =>$commonoptions1,
                'other_info' => $this->input->post('otherinformation'),
                'product_category' => $this->input->post('productcategory'),
                'product_keyword' => $product_keyword1,
                'sequence_number' => $this->input->post('sequence_number'),
                'product_status' => $this->input->post('productstatus'),
				'product_unit' => $productinit1,
				'max_dive_day' => $this->input->post('maxdiveday'),
				'product_max_day' => $this->input->post('productmaxday'),
				'product_price' => $this->input->post('product_price'),
				'discount_bulk_purchase' => $this->input->post('dcdiscountpurchase'),
				'discount_unit' =>$discount_unit,
				'range_start' => $range_start1,
				'range_end' => $range_end1,
				'discount_rate' => $discount_rate1,
				'apply_promo' => $this->input->post('dcapplypromo'),
				'start_date' => $start_date_range,
				'end_date' => $end_date_range,
				'ap_discount_unit' => $ap_discount_unit,
				'ap_discount_rate' => $this->input->post('apdiscountrate'),
				'apply_promo_bilk_discount' => $this->input->post('apbulkdiscount'),
				'optional_services' => $this->input->post('optionalservices1'),
				'optional_services_price' => implode(",", $optional_services),
				'diver_certification' => $divercertification1,
				'diver_experience' =>$diverexperience1,
				'diver_specialties' =>$diverspecialties1
            );          
			//Pass user data to model
			$result['message'] = $this->DCleisuremodel->addNew($userData);
        }
	//$result['currency'] = $this->DCleisuremodel->getcurrency();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCleisure/DCleisureadd',$result);
    $this->load->view('template/footer');
  }
  function DCleisuredashboard()
  {
    $data['DCleisuredashboard']=$this->DCleisuremodel->DCleisurelist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCleisure/DCleisuredashboard',$data);
    $this->load->view('template/footer');
  }

  function DCleisurelist()
  {
    $data['DCleisurelist']=$this->DCleisuremodel->DCleisurelist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCleisure/DCleisurelist',$data);
    $this->load->view('template/footer');
  }
  
  public function edit($id)
  {
    $result = array('message'=>'');

	if($this->input->post('update_DCleisure_data'))
		{  
			$commonoptions = $this->input->post('commonoptions');
			$discount_unit = $this->input->post('dcdiscountunit');
			$range_start = $this->input->post('startrange');
			$range_end = $this->input->post('endrange');
			$discount_rate = $this->input->post('field_name');
			$ap_discount_unit = $this->input->post('apdiscountunit');
			$optional_services = $this->input->post('optionalservices');
			$divercertification = $this->input->post('divercertification');
			$diverexperience = $this->input->post('diverexperience');
			$diverspecialties = $this->input->post('diverspecialties');
			
			$start_range = $this->input->post('applypromo_startdate');
			$start_date_range =date("Y-m-d", strtotime($start_range));
			
			$end_range = $this->input->post('applypromo_enddate');
			$end_date_range =date("Y-m-d", strtotime($end_range));
			
			$product_keyword = $this->input->post('productkeyword');
			
            $userData = array(
                'product_name' => $this->input->post('name'),
                //'dcimage' => $divecenter_picture,
                'product_description' => $this->input->post('description'),
                'product_includes' => $this->input->post('product_includes'),
                'product_excludes' => $this->input->post('productexcludes'),
                'common_options' => implode(",", $commonoptions),
                'other_info' => $this->input->post('otherinformation'),
                'product_category' => $this->input->post('productcategory'),
                'product_keyword' => implode(",", $product_keyword),
                'sequence_number' => $this->input->post('sequence_number'),
                'product_status' => $this->input->post('productstatus'),
				'product_unit' => $this->input->post('productunits'),
				'max_dive_day' => $this->input->post('maxdiveday'),
				'product_max_day' => $this->input->post('productmaxday'),
				'product_price' => $this->input->post('product_price'),
				'discount_bulk_purchase' => $this->input->post('dcdiscountpurchase'),
				'discount_unit' => $discount_unit,
				'range_start' => implode(",", $range_start),
				'range_end' => implode(",", $range_end),
				'discount_rate' => implode(",", $discount_rate),
				'apply_promo' => $this->input->post('dcapplypromo'),
				'start_date' => $start_date_range,
				'end_date' => $end_date_range,
				'ap_discount_unit' => $ap_discount_unit,
				'ap_discount_rate' => $this->input->post('apdiscountrate'),
				'apply_promo_bilk_discount' => $this->input->post('apbulkdiscount'),
				'optional_services' => $this->input->post('optionalservices1'),
				'optional_services_price' => implode(",", $optional_services),
				'diver_certification' => implode(",", $divercertification),
				'diver_experience' => implode(",", $diverexperience),
				'diver_specialties' => implode(",", $diverspecialties)
            );          
			//Pass user data to model
			$result['message'] = $this->DCleisuremodel->updateData($userData, $id);
			if($result['message'] == 'SUCCESS')
			{
			$base_url=base_url();
			redirect("$base_url"."DCleisure/DCleisurelist");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['getEditdata']=$this->DCleisuremodel->getEditdata($id);
    $this->load->view('DCleisure/DCleisureupdate',$result);
    $this->load->view('template/footer');
	}
  public function delete($id)
  {
    $this->DCleisuremodel->deleteData($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['DCleisurelist']=$this->DCleisuremodel->DCleisurelist();
    $this->load->view('DCleisure/DCleisurelist',$data);
    $this->load->view('template/footer');
  }
  
  //**********************************************************************************************************************************************//
 //                                                                   [ Dive Center Leisure END] //***********************************************************************************************************************************************//
 
 
//**********************************************************************************************************************************************//
 //                                                                   [ Dive Center Keywords START] //***********************************************************************************************************************************************//
 
 public function addKeywords()
 {
	$result = array('message'=>'');
	if($this->input->post('submit_product_keywords'))
		{  
            $userData = array(
                'keywords' => $this->input->post('name')
            );          
			//Pass user data to model
			$result['message'] = $this->DCleisuremodel->addKeywords($userData);
        }
	//$result['currency'] = $this->DCleisuremodel->getcurrency();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCleisure/DCkeywordadd',$result);
    $this->load->view('template/footer');
 }
 function Keywordlist()
  {
    $data['Keywordlist']=$this->DCleisuremodel->Keywordlist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCleisure/DCkeywordlist',$data);
    $this->load->view('template/footer');
  }
 
 public function editKeyword($id)
  {
    $result = array('message'=>'');

	if($this->input->post('Update_product_keywords'))
		{  
		$userData = array(
			'keywords' => $this->input->post('pk_name')
		);          
			//Pass user data to model
			$result['message'] = $this->DCleisuremodel->updateKeyword($userData, $id);
			if($result['message'] == 'SUCCESS')
			{
			$base_url=base_url();
			redirect("$base_url"."DCleisure/Keywordlist");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['getKeyword']=$this->DCleisuremodel->getKeyword($id);
    $this->load->view('DCleisure/DCkeywordupdate',$result);
    $this->load->view('template/footer');
	}
	
	public function deleteKeyword($id)
  {
    $this->DCleisuremodel->deleteKeyword($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['Keywordlist']=$this->DCleisuremodel->Keywordlist();
    $this->load->view('DCleisure/DCkeywordlist',$data);
    $this->load->view('template/footer');
  }
 
}
?>
