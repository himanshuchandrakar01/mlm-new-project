<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Userlist extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
    }
    public function index(){ 
       // echo "klsfng";
        // $this->load->view('includes/header');
         $this->load->view('userlist/user');
         // $this->load->view('includes/footer');
    }
     function userListing()
    {
        // if(!$this->isAdmin())
        // {
        //     $this->loadThis();
        // }
        // else
        // {        
            $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);

            $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : District User Listing';
            
            $this->loadViews("users/district_user", $this->global, $data, NULL);
        //}
    }
     function AllStateList()
    {
        // if(!$this->isAdmin())
        // {
        //     $this->loadThis();
        // }
        // else
        // {        
            $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);

            $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : Assistant User Listing';
            
            $this->loadViews("users/all_state", $this->global, $data, NULL);
        //}
    }
     function AssistantListing()
    {
        // if(!$this->isAdmin())
        // {
        //     $this->loadThis();
        // }
        // else
        // {        
            $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);

            $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : Assistant User Listing';
            
            $this->loadViews("users/assistant_user", $this->global, $data, NULL);
        //}
    }
     function StatetListing()
    {     
           
            
             $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->StateListingCount($searchText);

            $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->StateuserListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : Assistant User Listing';
            
            $this->loadViews("users/state_user", $this->global, $data, NULL);
        //}
    } 
    function notification_add()
    {
      $id = $this->input->post('id');
                $notice_for = $this->input->post('notice_for');
                $notice_dtl = $this->input->post('notice_dtl');
                $profile = $_FILES['profile']['name'];

                 $config['upload_path']   = './uploads/notice/'; 
                 $config['allowed_types'] = 'jpeg|jpg|png'; 
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                 $this->upload->do_upload('profile');
                 $location=base_url()."uploads/notice/".$profile;
                $userInfo = array('user_type'=>$notice_for,'notification_details'=>$notice_dt,'file'=>$location);
                $this->db->insert('notification', $userInfo);
               
                if($result > 0){
                    $this->session->set_flashdata('success', 'New User created successfully');
                } else {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('addNewMem');
    }

}