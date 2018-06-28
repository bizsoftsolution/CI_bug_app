<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Front extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('session');
		$this->load->model('Front_model', 'front_model');
    }
	public function index()
	{	
		//$data['total_rows'] = $this->db->count_all('special_offer');
		$data['specialoffer'] = $this->front_model->get_specialoffer();	
		$data['populardivedestination'] = $this->front_model->get_populardivedestination();
		$data['guidedtour'] = $this->front_model->get_guidedtour();
		$data['slider'] = $this->front_model->get_slider();
		
		$this->load->view('front/header');
		$this->load->view('front/slider', $data);
		$this->load->view('front/index', $data);
		$this->load->view('front/footer');	   
	}
	
	public function splOffer(){
		
		$data['specialoffer'] = $this->front_model->get_splOffer();
		$data['populardivedestination'] = $this->front_model->get_populardivedestination();
		$data['slider'] = $this->front_model->get_slider();

		$this->load->view('front/header');
		$this->load->view('front/slider', $data);
		$this->load->view('front/sploffer', $data);
		$this->load->view('front/footer');
    }
	
	function get_Allspecialoffer()
	{
		$config['base_url'] = base_url('Front/get_Allspecialoffer');
        $config['total_rows'] = $this->db->count_all('special_offer');
        $config['per_page'] = "12";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["links"] = $this->pagination->create_links();
		$data['offerpagination'] = $this->front_model->get_specialoffer_all($config["per_page"], $data['page']);
		$this->load->view('front/header');
		$this->load->view('front/viewmoreOffer', $data);
		$this->load->view('front/footer');
	}
	
	public function popularDestination()
	{	
		$data['specialoffer'] = $this->front_model->get_specialoffer();
		$data['populardivedestination'] = $this->front_model->get_ppldestination();
		$data['slider'] = $this->front_model->get_slider();
		
		$this->load->view('front/header');
		$this->load->view('front/slider', $data);
		$this->load->view('front/popularDestination', $data);
		$this->load->view('front/footer');	   
	}
	
	function get_AllPDD()
	{
		$config['base_url'] = base_url('Front/get_AllPDD');
        $config['total_rows'] = $this->db->count_all('daily_plan');
        $config['per_page'] = "12";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["links"] = $this->pagination->create_links();
		$data['populardivedestination'] = $this->front_model->get_popularpagination($config["per_page"], $data['page']);
		$this->load->view('front/header');
		$this->load->view('front/viewmorePopular', $data);
		$this->load->view('front/footer');	   
	}
	
	function get_island($country)
	{
	 $this->load->model('front_model');
	 header('Content-Type: application/x-json; charset=utf-8');
	 echo(json_encode($this->front_model->get_island($country)));
	}
	function search()
	{	
		//if($this->input->post('search_result'))
		//{
		$country = $this->input->post('scountry');
		$islands = $this->input->post('islands');
		
		$config['base_url'] = base_url('index.php/Front/search');
		$query = $this->db->where('dccountry', $country)->where('dcislands', $islands)->get('tbl_dcprofile');
        $config['total_rows'] = $query->num_rows();
		
        //$config['total_rows'] = $this->db->count_all('tbl_dcprofile');
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
       // $choice = $config["total_rows"] / $config["per_page"];
        //$config["num_links"] = floor($choice);
        $config["num_links"] =  $config['total_rows'];
        //config for bootstrap pagination class integration
		$config['use_page_numbers']  = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item disabled">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["links"] = $this->pagination->create_links();
		//$cin = $this->input->post('checkin');
		$data['Sdate']= $this->input->post('checkin');
		//$cout = $this->input->post('checkout');
		$data['Edate']= $this->input->post('checkout');
		
		$data['Noofpersons']= $this->input->post('no_of_persons');	
		//}
		$data['per_page'] = $config['per_page'];
		$data['search'] = $this->front_model->get_searchdetails($config["per_page"], $data['page']);
		
		$data['num_rows'] = count($data['search']);
		if($data['search'] == 'fail')
		{
				  redirect('front/error_page');
				//$this->load->view('front/error_page');
		}
		else
		{
			$this->load->view('front/search', $data);
		}
		
		// date diff function
		/* $strdate = $this->input->post('start');
		$end1date = $this->input->post('end');	
		$diff = abs(strtotime($strdate) - strtotime($end1date));		
		$diff_val1 = floor($diff / (60 * 60 * 24)); //86400
		$diff_val = strval($diff_val1);
		
		// country island 
		$cname ="";
		$curty = $this->input->post('scountry');
		$country = $this->front_model->countryname($curty);
			//var_dump( $country);
		foreach($country as $country1){
            $cname = $country1->country_name;
        }
		
		$island ="";
		$islnd = $this->input->post('islands');
		$island = $this->front_model->islandname($islnd);
		foreach($island as $island1){
            $island = $island1->island_name;
        }		
		$ci =  $cname.",".$island;
		
		// Get price from daily_plan
		$ciprice ="";
		$price = $this->front_model->getDailyplan($curty, $islnd);
		foreach($price as $price1){
            $ciprice = $price1->per_day_amount;
        }
		
		// insert data to cart
		$insert = array(
			'name' =>$ci,
            'qty' => $diff_val,
            'price' => $ciprice
            );
			//var_dump($insert);
        $this->cart->insert($insert);
		
		$data['search'] = $this->front_model->get_searchdetails(); */
		//$data['islands'] = $this->front_model->get_cities();
		/* $this->load->view('front/header'); */
		//$this->load->view('front/slider');
		
		/* $this->load->view('front/footer'); */
	}
	
	function error_page()
	{
		$this->load->view('front/error_page');
		$this->load->view('front/footer');
	}
	function filter_language()
	{
		if($this->input->post('brandss')){
			//$brandis=array();
			//parse_str($this->input->post('brandss'),$brandis); //changing string into array 
			//split 1st array elements
			//foreach($brandis as $ids)
			//{
			//$ids;
			//}
			//$brandii=implode("','",$ids);
			$brandii=$this->input->post('brandss');
			$fll = $this->front_model->filter_language($brandii);
			//foreach($fll as $farrayval)
			//{
				//echo $farrayval['dcname'];
			//}
		}
	}
	function divecenter($id,$sDate,$eDate,$no_of_persons)
	{
		//echo $sDate;
		/* $cin = $this->input->post('checkin');
		$data['Sdate']= $this->session->userdata($cin);
		
		$cout = $this->input->post('checkout');
		$data['Edate']= $this->session->userdata($cout); */
		
	//	$data['Noofpersons']= $this->input->post('no_of_persons');
		
		$data['divecenterpage'] = $this->front_model->get_allDetails($id);
		//$newDate = date('d-m-Y', strtotime($sDate));
		$data['sDate'] = $sDate;
		$data['eDate'] = $eDate;
		$data['no_of_persons'] = $no_of_persons;
		$data['d_id'] = $id;
		//$this->load->view('front/dive_center', $data);
		//$this->load->view('front/footer');
		if($data['divecenterpage'] == 'fail')
		{
				  redirect('front/error_page');
				//$this->load->view('front/error_page');
		}
		else
		{
			$this->load->view('front/dive_center', $data);
		}
	}
	function divecenter_search()
	{
		if($this->input->post('dive_search'))
		{
		$no_of_persons = $this->input->post('no_of_persons');
		$sDate = $this->input->post('checkin');
		$eDate = $this->input->post('checkout');
		$id = $this->input->post('diveid');
		return $this->divecenter($id,$sDate,$eDate,$no_of_persons);
		}
	}
	function tellmemore($id,$iid)
	{
		$data['tellmemore'] = $this->front_model->get_tellmemore($id);
		$data['iid'] = $id;
		$data['cid'] = $iid;
		//$this->load->view('front/tellmemore', $data);
		if($data['tellmemore'] == 'fail')
		{
				  redirect('front/error_page');
				//$this->load->view('front/error_page');
		}
		else
		{
			$this->load->view('front/tellmemore', $data);
		}
	}

	function help()
	{
		$data['help'] = $this->front_model->get_help();
		$this->load->view('front/header');
		$this->load->view('front/help', $data);
		$this->load->view('front/footer');
	}
    function addCart()
    {
        //$product = $this->front_model->get_product($this->input->post('id'));
        //var_dump($product);
		$p_id="p-".$this->input->post("lproduct_id");
        $insert = array(
              "id"  => $_POST["product_id"],
		    "name"  => $_POST["product_name"],
			"qty"  => $_POST["quantity"],
		    "price"  => $_POST["product_price"]
            );
			$option_value = $this->input->post('optional_service');
			$option_value_new="";
			if(isset($option_value) && is_array($option_value))
			{	
				
				foreach($option_value as $row_option)
				{	
					$i=0;
					$option_value_new= explode('-', $row_option);
					
					foreach($option_value_new as $o1)
					{
						if($i==0)
						{
							 $product_name="product_name =".$o1."<br>";
						}
						else
						{
							 $price="Price =".$o1."<br>";
						}
						
						$i++;
					}
				
				} 
			}
			
			//echo $option_value_new;

			//var_dump($option_value_new);
			$this->cart->insert($insert);
			echo $this->view_cart();
		
    }
	 function view_cart()
 {
  $this->load->library("cart");
  $output = '<table class="table table-striped" id="cart_details">';
  
  $count = 0;
  foreach($this->cart->contents() as $items)
  {
   $count++;
   $output .= '
   <tr style="font-size:12px;"> 
    <td >'.$items["name"].'</td>
    <td style="padding:2px;">MYR '.$items["price"].' X '.$items["qty"].'</td>
    <td ">'.$items["subtotal"].'</td>
    <td style="padding:2px;"><a class="btn btn-danger btn-xs remove_inventory" id="'.$items["rowid"].'"><i class="fa fa-remove"></i></a</td>
   </tr>
   ';
  }
  $output .= '
   <tr>
    <td colspan="3" align="right">Total</td>
    <td>'.$this->cart->total().'</td>
   </tr>
   </table>
  ';

  if($count == 0)
  {
   $output = '<h3 align="center">Cart is Empty</h3>';
  }
  return $output;
 }
    function remove1($rowid) {
                    // Check rowid value.
        if ($rowid==="all"){
                       // Destroy data which store in  session.
            $this->cart->destroy();
        }
        else{
                    // Destroy selected rowid in session.
            $data = array(
                'rowid'   => $rowid,
                'qty'     => 0
            );
                     // Update cart data, after cancle.
            $this->cart->update($data);
        }
        
                 // This will show cancle data in cart.
        redirect('Front/divecenter');
    }
    function update_cart(){
                
                // Recieve post values,calcute them and update
       $cart_info =  $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {   
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                        $data = array(
                'rowid'   => $rowid,
                                'price'   => $price,
                                'amount' =>  $amount,
                'qty'     => $qty
            );
             
            $this->cart->update($data);
        }
        redirect('Front/divecenter');        
    }   
	 function remove()
 {
  $this->load->library("cart");
  $row_id = $_POST["row_id"];
  $data = array(
   'rowid'  => $row_id,
   'qty'  => 0
  );
  $this->cart->update($data);
  echo $this->view_cart();
 }
 function clear()
 {
  $this->load->library("cart");
  $this->cart->destroy();
  echo $this->view_cart();
 }
    

    function removeCart($rowid)
    {
        $this->cart->update( array(
            'rowid' => $rowid,
            'qty' => 0 

            ));
        redirect('front/divecenter');
    }
    function updateCart()
    {
        $contents = $this->input->post();
        var_dump($contents);
        
        foreach ($contents as $content)
        {
            $info = array(
           'rowid' => $content['rowid'],
           'qty'   => $content['qty']
             );

            $this->cart->update($info);

        }
        //redirect('front/checkout');
    }
    function checkout()
    {
        $this->load->view('front/header');
        $this->load->view('front/checkout');
        $this->load->view('front/footer');
    }

	
function insertReview()
	{
		if($this->input->post('content'))
		{
			$review_date = date("Y-m-d H:i:s");
			$data = array(
			'description'=>$this->input->post('content'),
			'divecenter_id'=>$this->input->post('diveid'),
			'customer_id'=>$this->input->post('uuuid'),
			'date'=>$review_date
			);
		$this->front_model->insertReview($data);
		}
		
		
		//if($ir == 'true')
		//{
			//echo json_encode(array('status'=>TRUE));
		//}
	}
	
}


