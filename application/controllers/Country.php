<?php
class Country extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('CountryModel', 'countryModel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  public function newCountry()
  {
    $result = array('message'=>'');
    if($this->input->post('name')){
		$data = array(
			'country_name' => $this->input->post('name')			
		);
		$result['message'] = $this->countryModel->newCountry($data);
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('country/newCountry',$result);
    $this->load->view('template/footer');
  }
  function countryList()
  {
    $data['countryList']=$this->countryModel->countryList();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('country/countryList',$data);
    $this->load->view('template/footer');
  }

  public function editCountry($id)
  {
      $result = array('message'=>'');
      if($this->input->post('name'))
      {
  		  $data = array(
        'country_name' => $this->input->post('name'),

  		);
  		$result['message'] = $this->countryModel->editCountry($data,$id);
      if($result['message'] == 'SUCCESS')
      {
        $base_url=base_url();
        redirect("$base_url"."Country/countryList");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['country']=$this->countryModel->getCountry($id);
    $this->load->view('country/updateCountry',$result);
    $this->load->view('template/footer');
}
  public function deleteCountry($id)
  {
    $this->countryModel->deleteCountry($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['countryList']=$this->countryModel->countryList();
    $this->load->view('country/countryList',$data);
    $this->load->view('template/footer');
  }

}
?>
