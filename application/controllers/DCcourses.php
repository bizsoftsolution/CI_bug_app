<?php
class DCcourses extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('DCcoursesmodel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  
  //**********************************************************************************************************************************************
 //                                                                   [ Dive Center Profile Start] //***********************************************************************************************************************************************
 
  public function addNew()
  {
    $result = array('message'=>'');	
	if($this->input->post('submit_DCcourses_data'))
		{  
            //Prepare array of user data
			$commonoptions = $this->input->post('commonoptions');
			$commonoptions1 ="";
			if(isset($commonoptions) && is_array($commonoptions)){
				$commonoptions1 = implode(",", $commonoptions); 
			}
			
			$discount_unit = $this->input->post('dcdiscountunit');
			$range_start = $this->input->post('startrange');
			$range_end = $this->input->post('endrange');
			$discount_rate = $this->input->post('field_name');
			$ap_discount_unit = $this->input->post('apdiscountunit');
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
			
			$product_keyword = $this->input->post('productkeyword');
			$product_keyword1 ="";
			if(isset($product_keyword) && is_array($product_keyword)){
				$product_keyword1 = implode(",", $product_keyword); 
			}
			
			// newfeatcures 
			$product_inclusive_accomodation_single = $this->input->post('product_inclusive_accomodation_single');
			$product_inclusive_accomodation_single1 ="";
			if(isset($product_inclusive_accomodation_single) && is_array($product_inclusive_accomodation_single)){
				$product_inclusive_accomodation_single1 = implode(",", $product_inclusive_accomodation_single); 
			}
			$product_inclusive_accomodation_twin = $this->input->post('product_inclusive_accomodation_twin');
			$product_inclusive_accomodation_twin1 ="";
			if(isset($product_inclusive_accomodation_twin) && is_array($product_inclusive_accomodation_twin)){
				$product_inclusive_accomodation_twin1 = implode(",", $product_inclusive_accomodation_twin); 
			}
			$product_inclusive_accomodation_threeperson = $this->input->post('product_inclusive_accomodation_threeperson');
			$product_inclusive_accomodation_threeperson1 ="";
			if(isset($product_inclusive_accomodation_threeperson) && is_array($product_inclusive_accomodation_threeperson)){
				$product_inclusive_accomodation_threeperson1 = implode(",", $product_inclusive_accomodation_threeperson); 
			}
			$product_inclusive_accomodation_quad = $this->input->post('product_inclusive_accomodation_quad');
			$product_inclusive_accomodation_quad1 ="";
			if(isset($product_inclusive_accomodation_quad) && is_array($product_inclusive_accomodation_quad)){
				$product_inclusive_accomodation_quad1 = implode(",", $product_inclusive_accomodation_quad); 
			}
			
			$accommodation_extension_single = $this->input->post('accommodation_extension_single');
			$accommodation_extension_single1 ="";
			if(isset($accommodation_extension_single) && is_array($accommodation_extension_single)){
				$accommodation_extension_single1 = implode(",", $accommodation_extension_single); 
			}
			$accommodation_extension_twin = $this->input->post('accommodation_extension_twin');
			$accommodation_extension_twin1 ="";
			if(isset($accommodation_extension_twin) && is_array($accommodation_extension_twin)){
				$accommodation_extension_twin1 = implode(",", $accommodation_extension_twin); 
			}
			$accommodation_extension_threeperson = $this->input->post('accommodation_extension_threeperson');
			$accommodation_extension_threeperson1 ="";
			if(isset($accommodation_extension_threeperson) && is_array($accommodation_extension_threeperson)){
				$accommodation_extension_threeperson1 = implode(",", $accommodation_extension_threeperson); 
			}
			$accommodation_extension_quad = $this->input->post('accommodation_extension_quad');
			$accommodation_extension_quad1 ="";
			if(isset($accommodation_extension_quad) && is_array($accommodation_extension_quad)){
				$accommodation_extension_quad1 = implode(",", $accommodation_extension_quad); 
			}
			
			$services = $this->input->post('services');
			$services1 ="";
			if(isset($services) && is_array($services)){
				$services1 = implode(",", $services); 
			}
			$price_of_service = $this->input->post('price_of_service');
			$price_of_service1 ="";
			if(isset($price_of_service) && is_array($price_of_service)){
				$price_of_service1 = implode(",", $price_of_service); 
			}
			$quantity_require = $this->input->post('quantity_require');
			$quantity_require1 ="";
			if(isset($quantity_require) && is_array($quantity_require)){
				$quantity_require1 = implode(",", $quantity_require); 
			}
			$amenities = $this->input->post('amenities');
			$amenities1 ="";
			if(isset($amenities) && is_array($amenities)){
				$amenities1 = implode(",", $amenities); 
			}
            $userData = array(
                'product_name' => $this->input->post('name'),
                //'dcimage' => $divecenter_picture,
                'product_description' => $this->input->post('description'),
                'product_includes' => $this->input->post('product_includes'),
                'product_excludes' => $this->input->post('productexcludes'),
                'common_options' => $commonoptions1,
                'other_info' => $this->input->post('otherinformation'),
                'product_category' => $this->input->post('productcategory'),
                'product_keyword' => $product_keyword1,
                'sequence_number' => $this->input->post('sequence_number'),
                'product_status' => $this->input->post('productstatus'),
				'product_unit' => $this->input->post('productunits1'),
				'max_dive_day' => $this->input->post('maxdiveday'),
				'product_max_day' => $this->input->post('productmaxday'),
				
				'product_normal_rate' => $this->input->post('product_normal_price'),
				'product_weekend_rate' => $this->input->post('product_weekend_price'),
				'product_peakseason_rate' =>$this->input->post('product_peakseason_price'),
				'product_superpeak_rate' =>$this->input->post('product_super_peakseason_price'),
				'product_inclusive_accomodation' =>$this->input->post('dcinclusiveaccomodation'),
				'product_inclusive_accomodation_single' =>$product_inclusive_accomodation_single1,
				'product_inclusive_accomodation_twin' =>$product_inclusive_accomodation_twin1,
				'product_inclusive_accomodation_3person' =>$product_inclusive_accomodation_threeperson1,
				'product_inclusive_accomodation_quad' =>$product_inclusive_accomodation_quad1,
				'accomodation_extension' =>$this->input->post('dcaccommodationextension'),
				'accomodation_extension_single' =>$accommodation_extension_single1,
				'accomodation_extension_twin' =>$accommodation_extension_twin1,
				'accomodation_extension_3person' =>$accommodation_extension_threeperson1,
				'accomodation_extension_quad' =>$accommodation_extension_quad1,
				
				'discount_bulk_purchase' => $this->input->post('dcdiscountpurchase'),
				'discount_unit' =>$discount_unit,
				'range_start' => implode(",", $range_start),
				'range_end' => implode(",", $range_end),
				'discount_rate' => implode(",", $discount_rate),
				'apply_promo' => $this->input->post('dcapplypromo'),
				'start_date' => $start_date_range,
				'end_date' => $end_date_range,
				'ap_discount_unit' =>$ap_discount_unit,
				'ap_discount_rate' => $this->input->post('apdiscountrate'),
				'apply_promo_bilk_discount' => $this->input->post('apbulkdiscount'),
				
				'optional_services' =>$this->input->post('optionalservices1'),
				'optional_services_service' =>$services1,
				'optional_services_price' =>$price_of_service1,
				'optional_service_qty_required' =>$quantity_require1,
				'accomodation_name' =>$this->input->post('accomodation_name'),
				'oneperson_bed_type' =>$this->input->post('1person_bed_type'),
				'twoperson_bed_type' =>$this->input->post('2person_bed_type'),
				'threeperson_bed_type' =>$this->input->post('3person_bed_type'),
				'fourperson_bed_type' =>$this->input->post('4person_bed_type'),
				'checkintime' =>$this->input->post('checkintime'),
				'checkouttime' =>$this->input->post('checkouttime'),
				'actype' =>$this->input->post('actype'),
				'amenities' => $amenities1,
				'diver_certification' => $divercertification1,
				'diver_experience' => $diverexperience1,
				'diver_specialties' => $diverspecialties1
            );          
			//Pass user data to model
			$result['message'] = $this->DCcoursesmodel->addNew($userData);
        }
	//$result['currency'] = $this->DCleisuremodel->getcurrency();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCcourses/DCcoursesadd', $result);
    $this->load->view('template/footer');
  }
  
  function DCcoursesdashboard()
  {
    $data['DCcoursesdashboard']=$this->DCcoursesmodel->DCcourseslist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCcourses/DCcoursesdashboard',$data);
    $this->load->view('template/footer');
  }
  
  function DCcourseslist()
  {
    $data['DCcourseslist']=$this->DCcoursesmodel->DCcourseslist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCcourses/DCcourseslist',$data);
    $this->load->view('template/footer');
  }

  function edit($id)
  {
    $result = array('message'=>'');

	if($this->input->post('update_DCcourses_data'))
		{  
			$commonoptions = $this->input->post('commonoptions');
			$discount_unit = $this->input->post('dcdiscountunit');
			$range_start = $this->input->post('startrange');
			$range_end = $this->input->post('endrange');
			$discount_rate = $this->input->post('field_name');
			$ap_discount_unit = $this->input->post('apdiscountunit');

			$divercertification = $this->input->post('divercertification');
			$diverexperience = $this->input->post('diverexperience');
			$diverspecialties = $this->input->post('diverspecialties');
			
			$start_range = $this->input->post('applypromo_startdate');
			$start_date_range =date("Y-m-d", strtotime($start_range));
			
			$end_range = $this->input->post('applypromo_enddate');
			$end_date_range =date("Y-m-d", strtotime($end_range));
			
			$product_keyword = $this->input->post('productkeyword');
			
			$product_inclusive_accomodation_single = $this->input->post('product_inclusive_accomodation_single');
			$product_inclusive_accomodation_single1 ="";
			if(isset($product_inclusive_accomodation_single) && is_array($product_inclusive_accomodation_single)){
				$product_inclusive_accomodation_single1 = implode(",", $product_inclusive_accomodation_single); 
			}
			$product_inclusive_accomodation_twin = $this->input->post('product_inclusive_accomodation_twin');
			$product_inclusive_accomodation_twin1 ="";
			if(isset($product_inclusive_accomodation_twin) && is_array($product_inclusive_accomodation_twin)){
				$product_inclusive_accomodation_twin1 = implode(",", $product_inclusive_accomodation_twin); 
			}
			$product_inclusive_accomodation_threeperson = $this->input->post('product_inclusive_accomodation_threeperson');
			$product_inclusive_accomodation_threeperson1 ="";
			if(isset($product_inclusive_accomodation_threeperson) && is_array($product_inclusive_accomodation_threeperson)){
				$product_inclusive_accomodation_threeperson1 = implode(",", $product_inclusive_accomodation_threeperson); 
			}
			$product_inclusive_accomodation_quad = $this->input->post('product_inclusive_accomodation_quad');
			$product_inclusive_accomodation_quad1 ="";
			if(isset($product_inclusive_accomodation_quad) && is_array($product_inclusive_accomodation_quad)){
				$product_inclusive_accomodation_quad1 = implode(",", $product_inclusive_accomodation_quad); 
			}
			
			$accommodation_extension_single = $this->input->post('accommodation_extension_single');
			$accommodation_extension_single1 ="";
			if(isset($accommodation_extension_single) && is_array($accommodation_extension_single)){
				$accommodation_extension_single1 = implode(",", $accommodation_extension_single); 
			}
			$accommodation_extension_twin = $this->input->post('accommodation_extension_twin');
			$accommodation_extension_twin1 ="";
			if(isset($accommodation_extension_twin) && is_array($accommodation_extension_twin)){
				$accommodation_extension_twin1 = implode(",", $accommodation_extension_twin); 
			}
			$accommodation_extension_threeperson = $this->input->post('accommodation_extension_threeperson');
			$accommodation_extension_threeperson1 ="";
			if(isset($accommodation_extension_threeperson) && is_array($accommodation_extension_threeperson)){
				$accommodation_extension_threeperson1 = implode(",", $accommodation_extension_threeperson); 
			}
			$accommodation_extension_quad = $this->input->post('accommodation_extension_quad');
			$accommodation_extension_quad1 ="";
			if(isset($accommodation_extension_quad) && is_array($accommodation_extension_quad)){
				$accommodation_extension_quad1 = implode(",", $accommodation_extension_quad); 
			}
			
			$services = $this->input->post('services');
			$services1 ="";
			if(isset($services) && is_array($services)){
				$services1 = implode(",", $services); 
			}
			$price_of_service = $this->input->post('price_of_service');
			$price_of_service1 ="";
			if(isset($price_of_service) && is_array($price_of_service)){
				$price_of_service1 = implode(",", $price_of_service); 
			}
			$quantity_require = $this->input->post('quantity_require');
			$quantity_require1 ="";
			if(isset($quantity_require) && is_array($quantity_require)){
				$quantity_require1 = implode(",", $quantity_require); 
			}
			$amenities = $this->input->post('amenities');
			$amenities1 ="";
			if(isset($amenities) && is_array($amenities)){
				$amenities1 = implode(",", $amenities); 
			}
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
				
				'product_normal_rate' => $this->input->post('product_normal_price'),
				'product_weekend_rate' => $this->input->post('product_weekend_price'),
				'product_peakseason_rate' =>$this->input->post('product_peakseason_price'),
				'product_superpeak_rate' =>$this->input->post('product_super_peakseason_price'),
				'product_inclusive_accomodation' =>$this->input->post('dcinclusiveaccomodation'),
				'product_inclusive_accomodation_single' =>$product_inclusive_accomodation_single1,
				'product_inclusive_accomodation_twin' =>$product_inclusive_accomodation_twin1,
				'product_inclusive_accomodation_3person' =>$product_inclusive_accomodation_threeperson1,
				'product_inclusive_accomodation_quad' =>$product_inclusive_accomodation_quad1,
				'accomodation_extension' =>$this->input->post('dcaccommodationextension'),
				'accomodation_extension_single' =>$accommodation_extension_single1,
				'accomodation_extension_twin' =>$accommodation_extension_twin1,
				'accomodation_extension_3person' =>$accommodation_extension_threeperson1,
				'accomodation_extension_quad' =>$accommodation_extension_quad1,
				
				'discount_bulk_purchase' => $this->input->post('dcdiscountpurchase'),
				'discount_unit' =>$discount_unit,
				'range_start' => implode(",", $range_start),
				'range_end' => implode(",", $range_end),
				'discount_rate' => implode(",", $discount_rate),
				'apply_promo' => $this->input->post('dcapplypromo'),
				'start_date' => $start_date_range,
				'end_date' => $end_date_range,
				'ap_discount_unit' =>$ap_discount_unit,
				'ap_discount_rate' => $this->input->post('apdiscountrate'),
				'apply_promo_bilk_discount' => $this->input->post('apbulkdiscount'),
				
				'optional_services' =>$this->input->post('optionalservices1'),
				'optional_services_service' =>$services1,
				'optional_services_price' =>$price_of_service1,
				'optional_service_qty_required' =>$quantity_require1,
				'accomodation_name' =>$this->input->post('accomodation_name'),
				'oneperson_bed_type' =>$this->input->post('1person_bed_type'),
				'twoperson_bed_type' =>$this->input->post('2person_bed_type'),
				'threeperson_bed_type' =>$this->input->post('3person_bed_type'),
				'fourperson_bed_type' =>$this->input->post('4person_bed_type'),
				'checkintime' =>$this->input->post('checkintime'),
				'checkouttime' =>$this->input->post('checkouttime'),
				'actype' =>$this->input->post('actype'),
				'amenities' => $amenities1,
				'diver_certification' => implode(",", $divercertification),
				'diver_experience' => implode(",", $diverexperience),
				'diver_specialties' => implode(",", $diverspecialties)
            );          
			//Pass user data to model
			$result['message'] = $this->DCcoursesmodel->updateData($userData, $id);
			if($result['message'] == 'SUCCESS')
			{
			$base_url=base_url();
			redirect("$base_url"."DCcourses/DCcourseslist");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['getEditdata']=$this->DCcoursesmodel->getEditdata($id);
    $this->load->view('DCcourses/DCcoursesupdate',$result);
    $this->load->view('template/footer');
	}
  public function delete($id)
  {
    $this->DCcoursesmodel->deleteData($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['DCcourseslist']=$this->DCcoursesmodel->DCcourseslist();
    $this->load->view('DCcourses/DCcourseslist',$data);
    $this->load->view('template/footer');
  }
  
  //**********************************************************************************************************************************************//
 //                                                                   [ Dive Center Profile END] //***********************************************************************************************************************************************//

}
?>
