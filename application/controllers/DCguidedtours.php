<?php
class DCguidedtours extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('DCguidedtoursmodel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  
  //**********************************************************************************************************************************************
 //                                                                   [ Dive Center Package Start] //***********************************************************************************************************************************************
 
  public function addNew()
  {
    $result = array('message'=>'');	
	if($this->input->post('submit_DCguidedtours_data'))
		{  
			 //Check whether user upload picture
            if(!empty($_FILES['gallery']['name'])){
                $config['upload_path'] = './upload/DCguidedtours/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['gallery']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('gallery')){
                    $uploadData = $this->upload->data();
                    $divecenter_picture = $uploadData['file_name'];
                }else{
                    $divecenter_picture = '';
                }
            }else{
                $divecenter_picture = '';
            }
			
            //Prepare array of user data
			$commonoptions = $this->input->post('commonoptions');
			$discount_unit = $this->input->post('dcdiscountunit');
			$discount_unit1 ="";
			if(isset($discount_unit)){
				$discount_unit1 = $discount_unit; 
			}
			$single_room = $this->input->post('single_room');
			$twin_room = $this->input->post('twin_room');
			$three_person_room = $this->input->post('three_person_room');
			$quad_room = $this->input->post('quad_room');	
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
			$amenities = $this->input->post('amenities');
			$amenities1 ="";
			if(isset($amenities) && is_array($amenities)){
				$amenities1 = implode(",", $amenities); 
			}
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
			$divesites = $this->input->post('divesites');	

			$start_range = $this->input->post('bpdatestart');
			//$str_range = substr($start_range ,0,10);
			$start_date_range =date("Y-m-d", strtotime($start_range));
			
			$end_range = $this->input->post('bpdateend');
			//$ed_range = substr($end_range ,14,23);
			$end_date_range =date("Y-m-d", strtotime($end_range));
			
			$start_range1 = $this->input->post('tpdatestart');
			$start_date_range1 =date("Y-m-d", strtotime($start_range1));
			
			$end_range1 = $this->input->post('tpdateend');
			$end_date_range1 =date("Y-m-d", strtotime($end_range1));
			
			$start_range3 = $this->input->post('applypromo_startdate');
			$start_date_range3 =date("Y-m-d", strtotime($start_range3));
			
			$end_range3 = $this->input->post('applypromo_enddate');
			$end_date_range3 =date("Y-m-d", strtotime($end_range3));
			
			$product_keyword = $this->input->post('productkeyword');
			$product_keyword1 ="";
			if(isset($product_keyword) && is_array($product_keyword)){
				$product_keyword1 = implode(",", $product_keyword); 
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
                'product_keyword' => $product_keyword1,			
                'booking_period_start_date' => $start_date_range,				
                'booking_period_end_date' => $end_date_range,				
                'travel_period_start_date' => $start_date_range1,				
                'travel_period_end_date' => $end_date_range1,	
                'sequence_number' => $this->input->post('sequence_number'),
                'product_status' => $this->input->post('productstatus'),
				'product_unit' => $this->input->post('productunits'),
				'product_max_day' => $this->input->post('productmaxday'),			
				'single_room' => $single_room,
				'twin_room' => $twin_room,
				'three_person_room' =>$three_person_room,
				'quad_room' => $quad_room,			
				'discount_bulk_purchase' => $this->input->post('dcdiscountpurchase'),			
				'discount_unit' =>$discount_unit1,
				'range_start' => $range_start1,
				'range_end' => $range_end1,
				'discount_rate' => $discount_rate1,
				'apply_promo' => $this->input->post('dcapplypromo'),
				'start_date' => $start_date_range3,
				'end_date' => $end_date_range3,
				'ap_discount_unit' => $ap_discount_unit,
				'ap_discount_rate' => $this->input->post('apdiscountrate'),
				'apply_promo_bilk_discount' => $this->input->post('apbulkdiscount'),
				'optional_services' => implode(",", $optional_services),
				'accomodation_name' => $this->input->post('accomodation_name'),
				'oneperson_bed_type' => $this->input->post('1person_bed_type'),
				'twoperson_bed_type' => $this->input->post('2person_bed_type'),
				'threeperson_bed_type' => $this->input->post('3person_bed_type'),
				'fourperson_bed_type' => $this->input->post('4person_bed_type'),
				'checkintime' => $this->input->post('checkintime'),
				'checkouttime' => $this->input->post('checkouttime'),
				'actype' => $this->input->post('actype'),
				'amenities' => $amenities1,
				'diver_certification' => $divercertification1,
				'diver_experience' => $diverexperience1,
				'diver_specialties' => $diverspecialties1,				
				'country' => $this->input->post('dive_center_country'),
				'island' => $this->input->post('dive_center_island'),
				'gpsx' => $this->input->post('gpsx'),
				'gpsy' => $this->input->post('gpsy'),
				'dive_sites' => implode(",", $divesites),
				'photo' => $divecenter_picture
            );          
			//Pass user data to model
			$result['message'] = $this->DCguidedtoursmodel->addNew($userData);
        }
	//$result['currency'] = $this->DCleisuremodel->getcurrency();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCguidedtours/DCguidedtoursadd',$result);
    $this->load->view('template/footer');
  }
  function DCguidedtourslist()
  {
    $data['DCguidedtourslist']=$this->DCguidedtoursmodel->DCguidedtourslist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('DCguidedtours/DCguidedtourslist',$data);
    $this->load->view('template/footer');
  }

  public function edit($id)
  {
    $result = array('message'=>'');
	
	if($this->input->post('Update_DCguidedtours_Data'))
		{  
			//Prepare array of user data
			$commonoptions = $this->input->post('commonoptions');
			$discount_unit = $this->input->post('dcdiscountunit');
			$single_room = $this->input->post('single_room');
			$twin_room = $this->input->post('twin_room');
			$three_person_room = $this->input->post('three_person_room');
			$quad_room = $this->input->post('quad_room');		
			$discount_unit = $this->input->post('dcdiscountunit');		
			$range_start = $this->input->post('startrange');
			$range_end = $this->input->post('endrange');
			$discount_rate = $this->input->post('field_name');
			//$range_start1 ="";
			if(isset($range_start) && is_array($range_start)){
				$range_start1 = implode(",", $range_start); 
			}
			//$range_end1 ="";
			if(isset($range_end) && is_array($range_end)){
				$range_end1 = implode(",", $range_end); 
			}
			//$discount_rate1 ="";
			if(isset($discount_rate) && is_array($discount_rate)){
				$discount_rate1 = implode(",", $discount_rate); 
			}
			
			$ap_discount_unit = $this->input->post('apdiscountunit');
			$optional_services = $this->input->post('optionalservices');
			$divercertification = $this->input->post('divercertification');
			$diverexperience = $this->input->post('diverexperience');
			$diverspecialties = $this->input->post('diverspecialties');
			$divesites = $this->input->post('divesites');	
				
			$start_range = $this->input->post('bpdatestart');
			//$str_range = substr($start_range ,0,10);
			$start_date_range =date("Y-m-d", strtotime($start_range));
			
			$end_range = $this->input->post('bpdateend');
			//$ed_range = substr($end_range ,14,23);
			$end_date_range =date("Y-m-d", strtotime($end_range));
			
			$start_range1 = $this->input->post('tpdatestart');
			$start_date_range1 =date("Y-m-d", strtotime($start_range1));
			
			$end_range1 = $this->input->post('tpdateend');
			$end_date_range1 =date("Y-m-d", strtotime($end_range1));
			
			$start_range3 = $this->input->post('applypromo_startdate');
			$start_date_range3 =date("Y-m-d", strtotime($start_range3));
			
			$end_range3 = $this->input->post('applypromo_enddate');
			$end_date_range3 =date("Y-m-d", strtotime($end_range3));
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
                'product_keyword' => $product_keyword,			
                'booking_period_start_date' => $start_date_range,				
                'booking_period_end_date' => $end_date_range,				
                'travel_period_start_date' => $start_date_range1,				
                'travel_period_end_date' => $end_date_range1,	
                'sequence_number' => $this->input->post('sequence_number'),
                'product_status' => $this->input->post('productstatus'),
				'product_unit' => $this->input->post('productunits'),
				'product_max_day' => $this->input->post('productmaxday'),
				'single_room' => $single_room,
				'twin_room' => $twin_room,
				'three_person_room' => $three_person_room,
				'quad_room' => $quad_room,			
				'discount_bulk_purchase' => $this->input->post('dcdiscountpurchase'),			
				'discount_unit' => implode(",", $discount_unit),
				'range_start' => $range_start1,
				'range_end' => $range_end1,
				'discount_rate' => $discount_rate1,
				'apply_promo' => $this->input->post('dcapplypromo'),
				'start_date' => $start_date_range3,
				'end_date' => $end_date_range3,
				'ap_discount_unit' => implode(",", $ap_discount_unit),
				'ap_discount_rate' => $this->input->post('apdiscountrate'),
				'apply_promo_bilk_discount' => $this->input->post('apbulkdiscount'),
				'optional_services' => implode(",", $optional_services),
				'accomodation_name' => $this->input->post('accomodation_name'),
				'oneperson_bed_type' => $this->input->post('1person_bed_type'),
				'twoperson_bed_type' => $this->input->post('2person_bed_type'),
				'threeperson_bed_type' => $this->input->post('3person_bed_type'),
				'fourperson_bed_type' => $this->input->post('4person_bed_type'),
				'checkintime' => $this->input->post('checkintime'),
				'checkouttime' => $this->input->post('checkouttime'),
				'actype' => $this->input->post('actype'),
				'amenities' => $this->input->post('amenities'),
				'diver_certification' => implode(",", $divercertification),
				'diver_experience' => implode(",", $diverexperience),
				'diver_specialties' => implode(",", $diverspecialties),				
				'country' => $this->input->post('edit_dive_center_country'),
				'island' => $this->input->post('edit_dive_center_island'),
				'gpsx' => $this->input->post('gpsx'),
				'gpsy' => $this->input->post('gpsy'),
				'dive_sites' => implode(",", $divesites)
            );                    
			//Pass user data to model
			$result['message'] = $this->DCguidedtoursmodel->updateData($userData, $id);
			if($result['message'] == 'SUCCESS')
			{
			$base_url=base_url();
			redirect("$base_url"."DCguidedtours/DCguidedtourslist");
			}
		}
		if($this->input->post('Update_DCguidedtours_Image_Data'))
		{
			 //Check whether user upload picture
            if(!empty($_FILES['gallery']['name'])){
                $config['upload_path'] = './upload/DCguidedtours/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['gallery']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('gallery')){
                    $uploadData = $this->upload->data();
                    $divecenter_picture = $uploadData['file_name'];
                }else{
                    $divecenter_picture = '';
                }
            }else{
                $divecenter_picture = '';
            }
			 $userData = array(
                'photo' => $divecenter_picture
				);
			//Pass user data to model
			$result['message'] = $this->DCguidedtoursmodel->updateData($userData, $id);
			if($result['message'] == 'SUCCESS')
			{
			$base_url=base_url();
			redirect("$base_url"."DCguidedtours/DCguidedtourslist");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['getEditdata']=$this->DCguidedtoursmodel->getEditdata($id);
    $this->load->view('DCguidedtours/DCguidedtoursupdate',$result);
    $this->load->view('template/footer');
	}
  public function delete($id)
  {
    $this->DCguidedtoursmodel->deleteData($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['DCguidedtourslist']=$this->DCguidedtoursmodel->DCguidedtourslist();
    $this->load->view('DCguidedtours/DCguidedtourslist',$data);
    $this->load->view('template/footer');
  }
  
  //**********************************************************************************************************************************************//
 //                                                                   [ Dive Center Leisure END] //***********************************************************************************************************************************************//
 
}
?>
