<?php
class DCprofile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('DCprofilemodel');
        $this->load->helper('url');
        $this->load->library('session');
    }
    
    //**********************************************************************************************************************************************
    //                                                                   [ Dive Center Profile Start] //***********************************************************************************************************************************************
    
    public function addNew()
    {
        $user_id = $this->session->userdata('user_id');
        $save    = $this->DCprofilemodel->dataAvailabilityCheck($user_id);
        if ($save == 0) {
            $result = array(
                'message' => ''
            );
            
            if ($this->input->post('submit_DCprofile')) {
                //Check whether user upload picture
                if (!empty($_FILES['file']['name'])) {
                    $config['upload_path']   = './upload/DCprofile/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name']     = $_FILES['file']['name'];
                    
                    //Load upload library and initialize configuration
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload('file')) {
                        $uploadData         = $this->upload->data();
                        $divecenter_picture = $uploadData['file_name'];
                    } else {
                        $divecenter_picture = '';
                    }
                } else {
                    $divecenter_picture = '';
                }
                //Prepare array of user data
                $dcfacilities      = $this->input->post('dcfacilities');
                $dcaffiliation     = $this->input->post('dcaffiliation');
                $diveseason        = $this->input->post('diveseason');
                $dlanguages        = $this->input->post('dlanguages');
                $docrequireddiver  = $this->input->post('docrequireddiver');
                $userData          = array(
                    'dcname' => $this->input->post('name'),
                    'dcimage' => $divecenter_picture,
                    'dcdescription' => $this->input->post('description'),
                    'dccountry' => $this->input->post('dive_center_country'),
                    'dcislands' => $this->input->post('dive_center_island'),
                    'dcgps_x' => $this->input->post('gpsx'),
                    'dcgps_y' => $this->input->post('gpsy'),
                    'dcreg_co_name' => $this->input->post('rcname'),
                    'dcbusiness_reg_no' => $this->input->post('brnumber'),
                    'dcbusi_telephone_no' => $this->input->post('tpnumber'),
                    'dcbilling_address' => $this->input->post('baddress'),
                    'dcbusi_fax_no' => $this->input->post('faxnumber'),
                    'dcaddress' => $this->input->post('dcaddress'),
                    'dctelephone_no' => $this->input->post('dctpnumber'),
                    'dcfax_no' => $this->input->post('dcfaxnumber'),
                    'dcemailid' => $this->input->post('emailid'),
                    'dcsiteurl' => $this->input->post('websiteurl'),
                    'dcno_of_divemaster' => $this->input->post('divemaster'),
                    'dcno_boats' => $this->input->post('noofboats'),
                    'dcdaily_capacity' => $this->input->post('dailycapacity'),
                    'dcfacilities' => implode(",", $dcfacilities),
                    'dcaffiliation' => implode(",", $dcaffiliation),
                    'dcaffiliation_reg_no' => $this->input->post('affiliationno'),
                    'dcseason' => implode(",", $diveseason),
                    'dclanguage' => implode(",", $dlanguages),
                    'dcdocument_required' => implode(",", $docrequireddiver),
                    'dccurrency' => $this->input->post('currency'),
                    'user_id' => $this->session->userdata('user_id')
                );
                //Pass user data to model
                $result['message'] = $this->DCprofilemodel->addNew($userData);
            }
            
            $result['currency'] = $this->DCprofilemodel->getcurrency();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('DCprofile/DCprofileadd', $result);
            $this->load->view('template/footer');
        } 
        else {
            $result = array(
                'message' => ''
            );
            $id = $this->session->userdata('user_id');
            
            // Image update part
            if ($this->input->post('update_dcprofile_image')) {
                if (!empty($_FILES['file']['name'])) {
                    $config['upload_path']   = './upload/DCprofile/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name']     = $_FILES['file']['name'];
                    //Load upload library and initialize configuration
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    
                    if ($this->upload->do_upload('file')) {
                        $uploadData              = $this->upload->data();
                        $edit_divecenter_picture = $uploadData['file_name'];
                    } else {
                        $edit_divecenter_picture = '';
                    }
                } else {
                    $edit_divecenter_picture = '';
                }
                $data              = array(
                    'dcimage' => $edit_divecenter_picture
                );
                //Pass user data to model
                $result['message'] = $this->DCprofilemodel->updateData($data, $id);
                if ($result['message'] == 'SUCCESS') {
                    $base_url = base_url();
                    redirect("$base_url" . "DCprofile/DClist");
                }
            }
            if ($this->input->post('update_DCprofile_data')) {
                $dcfacilities      = $this->input->post('dcfacilities');
                $dcaffiliation     = $this->input->post('dcaffiliation');
                $diveseason        = $this->input->post('diveseason');
                $dlanguages        = $this->input->post('dlanguages');
                $docrequireddiver  = $this->input->post('docrequireddiver');
                $userData          = array(
                    'dcname' => $this->input->post('name'),
                    'dcdescription' => $this->input->post('description'),
                    'dccountry' => $this->input->post('edit_dive_center_country'),
                    'dcislands' => $this->input->post('edit_dive_center_island'),
                    'dcgps_x' => $this->input->post('gpsx'),
                    'dcgps_y' => $this->input->post('gpsy'),
                    'dcreg_co_name' => $this->input->post('rcname'),
                    'dcbusiness_reg_no' => $this->input->post('brnumber'),
                    'dcbusi_telephone_no' => $this->input->post('tpnumber'),
                    'dcbilling_address' => $this->input->post('baddress'),
                    'dcbusi_fax_no' => $this->input->post('faxnumber'),
                    'dcaddress' => $this->input->post('dcaddress'),
                    'dctelephone_no' => $this->input->post('dctpnumber'),
                    'dcfax_no' => $this->input->post('dcfaxnumber'),
                    'dcemailid' => $this->input->post('emailid'),
                    'dcsiteurl' => $this->input->post('websiteurl'),
                    'dcno_of_divemaster' => $this->input->post('divemaster'),
                    'dcno_boats' => $this->input->post('noofboats'),
                    'dcdaily_capacity' => $this->input->post('dailycapacity'),
                    'dcfacilities' => implode(",", $dcfacilities),
                    'dcaffiliation' => implode(",", $dcaffiliation),
                    'dcaffiliation_reg_no' => $this->input->post('affiliationno'),
                    'dcseason' => implode(",", $diveseason),
                    'dclanguage' => implode(",", $dlanguages),
                    'dcdocument_required' => implode(",", $docrequireddiver),
                    'dccurrency' => $this->input->post('currency'),
                    'user_id' => $this->session->userdata('user_id')
                );
                //Pass user data to model
                $result['message'] = $this->DCprofilemodel->updateData($userData, $id);
                if ($result['message'] == 'SUCCESS') {
                    $base_url = base_url();
                    redirect("$base_url" . "DCprofile/DClist");
                }
            }
            $id = $this->session->userdata('user_id');
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $result['getEditdata'] = $this->DCprofilemodel->getEditdata($id);
            $this->load->view('DCprofile/DCprofileupdate', $result);
            $this->load->view('template/footer');
            
        }
        
        
        
    }
    function DClist()
    {
		$id = $this->session->userdata('user_id');
        $data['DClist'] = $this->DCprofilemodel->DClist($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('DCprofile/DCprofilelist', $data);
        $this->load->view('template/footer');
    }
 
    public function delete($id)
    {
        $this->DCprofilemodel->deleteData($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $data['DClist'] = $this->DCprofilemodel->DClist();
        $this->load->view('DCprofile/DCprofilelist', $data);
        $this->load->view('template/footer');
    }
    
    //**********************************************************************************************************************************************//
    //                                                                   [ Dive Center Profile END] //***********************************************************************************************************************************************//
    
    //**********************************************************************************************************************************************//
    //                                                                   [ CONTACTS TAB START] //***********************************************************************************************************************************************//
    
    // Start Department
    
    function addDept()
    {
        $result = array(
            'message' => ''
        );
        if ($this->input->post('name')) {
            $userData          = array(
                'dept_name' => $this->input->post('name')
            );
            //Pass user data to model
            $result['message'] = $this->DCprofilemodel->addNewDept($userData);
        }
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('DCprofile/DCdepartmentadd', $result);
        $this->load->view('template/footer');
    }
    function deptList()
    {
        $result['department'] = $this->DCprofilemodel->getDepartment();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('DCprofile/DCdeptlist', $result);
        $this->load->view('template/footer');
    }
    public function departedit($id)
    {
        $result = array(
            'message' => ''
        );
        if ($this->input->post('name')) {
            $data              = array(
                'dept_name' => $this->input->post('name')
                
            );
            $result['message'] = $this->DCprofilemodel->departedit($data, $id);
            if ($result['message'] == 'SUCCESS') {
                $base_url = base_url();
                redirect("$base_url" . "DCprofile/deptList");
            }
        }
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $result['department'] = $this->DCprofilemodel->getData($id);
        $this->load->view('DCprofile/DCdeptUpdate', $result);
        $this->load->view('template/footer');
    }
    public function departdelete($id)
    {
        $this->DCprofilemodel->deleteDepart($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $data['department'] = $this->DCprofilemodel->getDepartment();
        $this->load->view('DCprofile/DCdeptlist', $data);
        $this->load->view('template/footer');
    }
    // end Department
    
    // Staff *************
    
    function DCstaffList()
    {
        $data['DCcontactlist'] = $this->DCprofilemodel->DCcontactlist();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('DCprofile/DCstafflist', $data);
        $this->load->view('template/footer');
    }
    
    function addStaff()
    {
        $result = array(
            'message' => ''
        );
        if ($this->input->post('submit_contact_data')) {
            $userData          = array(
                'dept_name' => $this->input->post('departments'),
                'name' => $this->input->post('name'),
                'contact_no' => $this->input->post('contactno'),
                'email' => $this->input->post('email')
            );
            //Pass user data to model
            $result['message'] = $this->DCprofilemodel->addNewStaff($userData);
        }
        $result['department'] = $this->DCprofilemodel->getDepartment();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('DCprofile/DCstaffadd', $result);
        $this->load->view('template/footer');
    }
    public function editstaff($id)
    {
        $result = array(
            'message' => ''
        );
        if ($this->input->post('submit_update_data')) {
            $data              = array(
                'dept_name' => $this->input->post('departments'),
                'name' => $this->input->post('name'),
                'contact_no' => $this->input->post('contactno'),
                'email' => $this->input->post('email')
            );
            $result['message'] = $this->DCprofilemodel->Staffdepartedit($data, $id);
            if ($result['message'] == 'SUCCESS') {
                $base_url = base_url();
                redirect("$base_url" . "DCprofile/DCstaffList");
            }
        }
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $result['department']  = $this->DCprofilemodel->getDepartment();
        $result['contactdept'] = $this->DCprofilemodel->getstaffData($id);
        $this->load->view('DCprofile/DCstaffupdate', $result);
        $this->load->view('template/footer');
    }
    public function deleteStaff($id)
    {
        $this->DCprofilemodel->deleteStaff($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $data['DCcontactlist'] = $this->DCprofilemodel->DCcontactlist();
        $this->load->view('DCprofile/DCstafflist', $data);
        $this->load->view('template/footer');
    }
    
    // Dive Master *********
    
    function DCmasterList()
    {
        $data['DCmasterlist'] = $this->DCprofilemodel->DCmasterlist();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('DCprofile/DCdivemasterList', $data);
        $this->load->view('template/footer');
    }
    function addDivemaster()
    {
        $result = array(
            'message' => ''
        );
        if ($this->input->post('submit_dive_master_data')) {
            if (!empty($_FILES['profile_photo']['name'])) {
                $config['upload_path']   = './upload/DCprofile/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $_FILES['profile_photo']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('profile_photo')) {
                    $uploadData          = $this->upload->data();
                    $divecenter_picture1 = $uploadData['file_name'];
                } else {
                    $divecenter_picture1 = '';
                }
            } else {
                $divecenter_picture1 = '';
            }
            
            $userData = array(
                'images' => $divecenter_picture1,
                'name' => $this->input->post('name'),
                'position' => $this->input->post('position'),
                'cert_body' => $this->input->post('certbody'),
                'id_no' => $this->input->post('idno')
            );
            //Pass user data to model
            $result['message'] = $this->DCprofilemodel->addNewDivemaster($userData);
        }
        //$result['department'] = $this->DCprofilemodel->getDepartment();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('DCprofile/DCdivemasterAdd', $result);
        $this->load->view('template/footer');
    }
    public function editDivemaster($id)
    {
        $result = array(
            'message' => ''
        );
        if ($this->input->post('submit_Divemaster_update_data')) {
            $data              = array(
                'name' => $this->input->post('name'),
                'position' => $this->input->post('position'),
                'cert_body' => $this->input->post('certbody'),
                'id_no' => $this->input->post('idno')
            );
            $result['message'] = $this->DCprofilemodel->editNewDivemaster($data, $id);
            if ($result['message'] == 'SUCCESS') {
                $base_url = base_url();
                redirect("$base_url" . "DCprofile/DCmasterList");
            }
        }
        
        if ($this->input->post('submit_Divemaster_update_Image_data')) {
            //Check whether user upload picture
            if (!empty($_FILES['edit_photo']['name'])) {
                $config['upload_path']   = './upload/DCprofile/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $_FILES['edit_photo']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('edit_photo')) {
                    $uploadData         = $this->upload->data();
                    $divecenter_picture = $uploadData['file_name'];
                } else {
                    $divecenter_picture = '';
                }
            } else {
                $divecenter_picture = '';
            }
            
            $data              = array(
                'photo' => $divecenter_picture
            );
            $result['message'] = $this->DCprofilemodel->editNewDivemaster($data, $id);
            if ($result['message'] == 'SUCCESS') {
                $base_url = base_url();
                redirect("$base_url" . "DCprofile/DCmasterList");
            }
            
        }
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        //$result['department'] = $this->DCprofilemodel->getDepartment();
        $result['divemasterdata'] = $this->DCprofilemodel->getdivemasterData($id);
        $this->load->view('DCprofile/DCdivemasterUpdate', $result);
        $this->load->view('template/footer');
    }
    
    public function deleteDivemaster($id)
    {
        $this->DCprofilemodel->deleteDivemaster($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $data['DCmasterlist'] = $this->DCprofilemodel->DCmasterlist();
        $this->load->view('DCprofile/DCdivemasterList', $data);
        $this->load->view('template/footer');
    }
    
    //**********************************************************************************************************************************************
    //                                                                   [ CONTACTS TAB END ] //***********************************************************************************************************************************************
    
    //**********************************************************************************************************************************************
    //                                                                   [ GALLEY TAB START ] //***********************************************************************************************************************************************
    
    function DCgalleryList()
    {
		$config['base_url'] = base_url('DCprofile/DCgalleryList');
        $config['total_rows'] = $this->db->count_all('tbl_gallery');
        $config['per_page'] = "9";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
		
		$config['full_tag_open'] = '<ul class="pagination pagination-separated">';
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
		//$data['viewallevents'] = $this->Frontmodel->get_viewAllevents($config["per_page"], $data['page']);
		$data["links"] = $this->pagination->create_links();
		
        $data['DCgallerylist'] = $this->DCprofilemodel->DCgallerylist($config["per_page"], $data['page']);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('DCprofile/DCgalleryList', $data);
        $this->load->view('template/footer');
    }
    function addGallery()
    {
        $result = array(
            'message' => ''
        );
        if ($this->input->post('submit_gallery_data')) {
            if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './upload/DCprofile/gallery/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $_FILES['gallery']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('gallery')) {
                    $uploadData          = $this->upload->data();
                    $divecenter_picture1 = $uploadData['file_name'];
                } else {
                    $divecenter_picture1 = '';
                }
            } else {
                $divecenter_picture1 = '';
            }
            
            $userData          = array(
                'gallery' => $divecenter_picture1
            );
            //Pass user data to model
            $result['message'] = $this->DCprofilemodel->addNewGallery($userData);
        }
        //$result['department'] = $this->DCprofilemodel->getDepartment();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('DCprofile/DCgalleryAdd', $result);
        $this->load->view('template/footer');
    }
    public function editGallery($id)
    {
        $result = array(
            'message' => ''
        );
        if ($this->input->post('update_gallery_Image_data')) {
            //Check whether user upload picture
            if (!empty($_FILES['edit_gallery']['name'])) {
                $config['upload_path']   = './upload/DCprofile/gallery/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $_FILES['edit_gallery']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('edit_gallery')) {
                    $uploadData         = $this->upload->data();
                    $divecenter_picture = $uploadData['file_name'];
                } else {
                    $divecenter_picture = '';
                }
            } else {
                $divecenter_picture = '';
            }
            
            $data              = array(
                'gallery' => $divecenter_picture
            );
            $result['message'] = $this->DCprofilemodel->editNewGallery($data, $id);
            if ($result['message'] == 'SUCCESS') {
                $base_url = base_url();
                redirect("$base_url" . "DCprofile/DCgalleryList");
            }
            
        }
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        //$result['department'] = $this->DCprofilemodel->getDepartment();
        $result['getgalleryData'] = $this->DCprofilemodel->getgalleryData($id);
        $this->load->view('DCprofile/DCgalleryUpdate', $result);
        $this->load->view('template/footer');
    }
    
    public function deleteGallery($id)
    {
        $this->DCprofilemodel->deleteGallery($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $data['DCgallerylist'] = $this->DCprofilemodel->DCgallerylist();
        $this->load->view('DCprofile/DCgalleryList', $data);
        $this->load->view('template/footer');
    }
    
    //**********************************************************************************************************************************************
    //                                                                   [ GALLEY TAB END ] //***********************************************************************************************************************************************
    
}
?>