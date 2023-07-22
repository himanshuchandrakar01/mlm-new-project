<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        
        $this->loadViews("general/dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function userListing()
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {        
            $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);

			$returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : User Listing';
            
            $this->loadViews("users/users", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'CodeInsect : Add New User';

            $this->loadViews("users/addNew", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('dob','Date Of Birth','required|max_length[20]');
            $this->form_validation->set_rules('address','Address','trim|required|max_length[120]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));
                $dob = $this->input->post('dob');
                 $newDate = date("d-m-Y", strtotime($dob));  
                $dateformat = $newDate;
                $address = $this->input->post('address');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $isAdmin = $this->input->post('isAdmin');
                $area = $this->input->post('area');
                 $profile = $_FILES['profile']['name'];
                 $tmp_name = $_FILES['profile']['tmp_name'];
                

                 $config['upload_path']   = './uploads/'; 
                 $config['allowed_types'] = 'jpeg|jpg|png'; 
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
               $this->upload->do_upload('profile');
               //move_uploaded_file($tmp_name,"uploads/profile/".$profile);
                
                $userInfo = array('email'=>$email,'password'=>md5($dob),'dob'=>$dateformat,'address'=>$address,'profile'=>$profile,'op_area'=>$area, 'roleId'=>$roleId, 'name'=> $name, 'mobile'=>$mobile, 'isAdmin'=>2,'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
                // print_r($userInfo);exit();
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);
                
                if($result > 0){
                    $this->session->set_flashdata('success', 'New User created successfully');
                } else {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('addNew');
            }
        }
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            if($userId == null)
            {
                redirect('userListing');
            }
            
            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);

            $this->global['pageTitle'] = 'CodeInsect : Edit User';
            
            $this->loadViews("users/editOld", $this->global, $data, NULL);
        }
    }


    function edit() {
           $this->global['pageTitle'] = 'CodeInsect : Edit User';
            
            $this->loadViews("users/editOld", $this->global, $data, NULL);
    }
    
    public function district_tree()
    {
       //  $userId = ($userId == NULL ? 0 : $userId);
        // $data['user'] = $this->db->get_where('tbl_users', array('userId' => $userId));
        $userId=$this->input->get('id');
         $this->global['names']=$this->input->get('name');
        //echo "$userId,$name";exit();
        $data['user']= $this->db->query("select * from tbl_users where userId='$userId'")->result();
        //$data['user_name']=$user_name; 
       $this->global['pageTitle'] = 'CodeInsect : District User Tree';
            
       $this->loadViews("users/district_tree", $this->global, $data);
    }

    public function admin_district_tree()
    {
         $userId=$this->input->get('id');
         $this->global['names']=$this->input->get('name');
         $this->global['lid']=$userId;
         $data['user']= $this->db->query("select * from tbl_users where userId='$userId'")->result(); // 
         $this->global['pageTitle'] = 'CodeInsect : District User Tree';
         $this->loadViews("users/admin_district_list", $this->global, $data);
    }
    public function admin_assistant_tree()
    {
         $userId=$this->input->get('id');
         $this->global['names']=$this->input->get('name');
         $this->global['lid']=$userId;
         $this->global['mobile']=$this->input->get('mobile');
         //$this->global['lid']=$userId;
         $data['user']= $this->db->query("select * from tbl_users where userId='$userId'")->result(); // 
         $this->global['pageTitle'] = 'CodeInsect : District User Tree';
         $this->loadViews("users/admin_assistant_tree", $this->global, $data);
    }
    public function state_tree($userId =NULL)
    {
       //  $userId = ($userId == NULL ? 0 : $userId);
        // $data['user'] = $this->db->get_where('tbl_users', array('userId' => $userId));
        $data['user']= $this->db->query("select * from tbl_users where userId='$userId'")->result();
        //$data['user_name']=$user_name; 
       $this->global['pageTitle'] = 'CodeInsect : State User Tree';
            
       $this->loadViews("users/state_tree", $this->global, $data);
    }
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('userId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $isAdmin = $this->input->post('isAdmin');
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name, 'mobile'=>$mobile,
                        'isAdmin'=>$isAdmin, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                    // print_r($userInfo);
                    // exit();
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'isAdmin'=>$isAdmin, 
                        'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userListing');
            }
        }
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if(!$this->isAdmin())
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId, $userInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        
        $this->loadViews("general/404", $this->global, NULL, NULL);
    }

    /**
     * This function used to show login history
     * @param number $userId : This is user id
     */
    function loginHistoy($userId = NULL)
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {
            $userId = ($userId == NULL ? 0 : $userId);

            $searchText = $this->input->post('searchText');
            $fromDate = $this->input->post('fromDate');
            $toDate = $this->input->post('toDate');

            $data["userInfo"] = $this->user_model->getUserInfoById($userId);

            $data['searchText'] = $searchText;
            $data['fromDate'] = $fromDate;
            $data['toDate'] = $toDate;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress ( "login-history/".$userId."/", $count, 10, 3);

            $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : User Login History';
            
            $this->loadViews("users/loginHistory", $this->global, $data, NULL);
        }        
    }

    /**
     * This function is used to show users profile
     */
    function profile($active = "details")
    {
        $data["userInfo"] = $this->user_model->getUserInfoWithRole($this->vendorId);
        $data["active"] = $active;
        
        $this->global['pageTitle'] = $active == "details" ? 'CodeInsect : My Profile' : 'CodeInsect : Change Password';
        $this->loadViews("users/profile", $this->global, $data, NULL);
    }

    /**
     * This function is used to update the user details
     * @param text $active : This is flag to set the active tab
     */
    function profileUpdate($active = "details")
    {
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
        $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]|callback_emailExists');        
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
            $mobile = $this->security->xss_clean($this->input->post('mobile'));
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            
            $userInfo = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->editUser($userInfo, $this->vendorId);
            
            if($result == true)
            {
                $this->session->set_userdata('name', $name);
                $this->session->set_flashdata('success', 'Profile updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Profile updation failed');
            }

            redirect('profile/'.$active);
        }
    }

    /**
     * This function is used to change the password of the user
     * @param text $active : This is flag to set the active tab
     */
    function changePassword($active = "changepass")
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password is not correct');
                redirect('profile/'.$active);
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { 
                    $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('profile/'.$active);
            }
        }
    }

    /**
     * This function is used to check whether email already exist or not
     * @param {string} $email : This is users email
     */
    function emailExists($email)
    {
        $userId = $this->vendorId;
        $return = false;

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ $return = true; }
        else {
            $this->form_validation->set_message('emailExists', 'The {field} already taken');
            $return = false;
        }

        return $return;
    }
    // public function MemberList()
    // {
    //   $id=$_SESSION['userId'];
      
    //   $data['show']=$this->user_model->allusers($id);
    //   $this->load->view("users/allusers",$data);
    // }
    public function MemberList()
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
            
            
            $this->global['pageTitle'] = 'NGO : User Listing';
            
            $this->loadViews("users/allusers", $this->global, $data, NULL);
        }
    //}


        public function userIds()
        {
        $this->global['pageTitle'] = 'Vikas Samiti : Dashboard';
        
        $this->loadViews("users/UserIds", $this->global, NULL , NULL);
        } 
        public function memberId()
        {
        $this->global['pageTitle'] = 'Vikas Samiti : Dashboard';
        
        $this->loadViews("users/member_id", $this->global, NULL , NULL);
        }
        public function generaluserids()
        {
        $this->global['pageTitle'] = 'Vikas Samiti : Dashboard';
        
        $this->loadViews("users/generaluserid", $this->global, NULL , NULL);
        }
        public function bank_details()
        {
           $this->global['pageTitle'] = 'Vikas Samiti : Dashboard';
        
        $this->loadViews("payment/member_bank_details", $this->global, NULL , NULL);
      
        }
        public function addBankDetails_db()
        {
           $userdetails = array('user_id' => $this->input->post('id'),
                                'account_no' => $this->input->post('account_no'),
                                'bank_name' => $this->input->post('bank_name'),
                                'holder_name'=> $this->input->post('holder_name'),
                                'ifsc_code' => $this->input->post('ifsc_code'),
                                'aadhar_no' => $this->input->post('aadhar_no'),
                                'pan_no' => $this->input->post('pan_no'),
                                'user_name' => $this->input->post('user_name')
                                 );
          $result= $this->user_model->add_bankDetails($userdetails);
            if($result > 0){
                    $this->session->set_flashdata('success', 'Bank Details Successfully Added');
                } else {
                    $this->session->set_flashdata('error', 'User bank details creation failed');
                }
                 redirect('bank-details');
      
        }
        public function refer_link()
        {
            $this->global['pageTitle'] = 'Vikas Samiti : Dashboard';
        
        $this->loadViews("users/refer_link", $this->global, NULL , NULL);
        }

        public function user_profile()
        {
        $this->global['pageTitle'] = 'Vikas Samiti : Dashboard';
        
        $this->loadViews("users/user_profile", $this->global, NULL , NULL);
        }
        public function add_notice()
        {
           $this->global['pageTitle'] = 'Vikas Samiti : Dashboard';
        
        $this->loadViews("users/add_notification", $this->global, NULL , NULL);
        }
        public function addNotice()
        {
            $noticedetails = array('user_type' => $this->input->post('notice_for'),
                                'notification_details' => $this->input->post('notice_dtls'));
           $result=$this->db->insert("notification",$noticedetails);
             if($result > 0){
                    $this->session->set_flashdata('success', 'Notice Successfully Added');
                } else {
                    $this->session->set_flashdata('error', 'Add Notice failed');
                }
            return redirect("add-notice");
        }

}

?>