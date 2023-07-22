<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Home extends CI_Controller
{
    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('frontend/index');
    }

    public function memberstore(){
       // echo "ksfw";
        if ($_SERVER['REQUEST_METHOD']=='POST') {

            // $this->load->library('form_validation');
            
            // $this->form_validation->set_rules('apply_for','Applying for','trim|required|max_length[256]');
            
            
          //echo "Pooja";
   
        $img = $_FILES['attach_doc']['name'];

      $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         // $config['max_size']      = 100; 
         // $config['max_width']     = 1024; 
         // $config['max_height']    = 768;  
         $this->load->library('upload', $config);
           $this->upload->initialize($config);
         if ( ! $this->upload->do_upload('attach_doc')) 
         {
            $error = array('error' => $this->upload->display_errors()); 
            // $this->load->view('upload_form', $error); 
         }
            
         else {
           // echo $img;

     $member_data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'confirm_password' => $this->input->post('confirm_password'),
                'attach_doc'=> $img,
                'state' => $this->input->post('state'),
                'district' => $this->input->post('district'),
                
            ); 

        $this->db->insert("tbl_task", $member_data);
        return redirect('/?success');
        }
    }
    }

    public function userstore(){
        if ($_SERVER['REQUEST_METHOD']=='POST') {

        $image = $_FILES['user_image']['name'];

      $config['upload_path']   = './userimage/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         // $config['max_size']      = 100; 
         // $config['max_width']     = 1024; 
         // $config['max_height']    = 768;  
         $this->load->library('upload', $config);
           $this->upload->initialize($config);
         if ( ! $this->upload->do_upload('user_image')) 
         {
            $error = array('error' => $this->upload->display_errors()); 
            // $this->load->view('upload_form', $error); 
         }
            
         else {
        
     $user_data = array(
                'user_name' => $this->input->post('user_name'),
                'user_email' => $this->input->post('user_email'),
                'user_password' => $this->input->post('user_password'),
                'user_confirm_password' => $this->input->post('user_confirm_password'),
                'user_image' =>$image
                
            );

     // print_r($hostelitem_data);exit();

        $this->db->insert('general_user', $user_data);
        return redirect('/?success');
        }
    }
    }

    public function membersignup(){
        $this->load->view('frontend/member_signup');
    }

    public function membersignup_store(){
         if ($_SERVER['REQUEST_METHOD']=='POST') {
        $img = $_FILES['profilepic']['name'];
        $img1 = $_FILES['frontcard']['name'];
        $img2 = $_FILES['backcard']['name'];
        $img3 = $_FILES['otherdoc']['name'];

      $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $this->load->library('upload', $config);
           $this->upload->initialize($config);
         if ( ! ($this->upload->do_upload('profilepic')&& $this->upload->do_upload('frontcard')&& $this->upload->do_upload('backcard')&& $this->upload->do_upload('otherdoc'))) 
         {
            $error = array('error' => $this->upload->display_errors()); 
         }
            
         else {

     $membersignup_data = array(
                'apply_for' => $this->input->post('apply_for'),
                'assistant_id' => $this->input->post('assistant_id'),
                'assistant_name' => $this->input->post('assistant_name'),
                'name' => $this->input->post('name'),
                'gender' => $this->input->post('gender'),
                'rashan_card' => $this->input->post('rashan_card'),
                'dob' => $this->input->post('dob'),
                'father_husbandname' => $this->input->post('father_husbandname'),
                'profession' => $this->input->post('profession'),
                'blood_group' => $this->input->post('blood_group'),
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'mobileno' => $this->input->post('mobileno'),
                'aadharno' => $this->input->post('aadharno'),
                'address' => $this->input->post('address'),
                'pincode' => $this->input->post('pincode'),
                'idcard' => $this->input->post('idcard'),
                 'profilepic'=> $img,
                 'frontcard'=> $img1,
                 'backcard'=> $img2,
                 'otherdoc'=> $img3,
                // 'state' => $this->input->post('state'),
                // 'district' => $this->input->post('district'),
                
            ); 
     $name = ucwords(strtolower($this->input->post('name')));
                $email = (strtolower($this->input->post('email')));
                $dob = $this->input->post('dob');
                 $newDate = date("d-m-Y", strtotime($dob));  
                $dateformat = $newDate;
                $address = $this->input->post('address');
                $roleId = 17;
                $mobile = $this->input->post('mobileno');
                $isAdmin = 2;
                $id = $this->input->post('assistant_id');
        // print_r($membersignup_data);
        $this->db->insert("tbl_task", $membersignup_data);
        $userInfo = array('email'=>$email,'password'=>md5($dob),'dob'=>$dateformat,'address'=>$address, 'roleId'=>$roleId,
                        'name'=> $name, 'mobile'=>$mobile, 'isAdmin'=>$isAdmin,
                        'createdBy'=>$id, 'createdDtm'=>date('Y-m-d H:i:s'));
                // print_r($userInfo);exit();
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);

        // print_r($membersignup_data);
       // $this->db->insert("tbl_task", $membersignup_data);
         return redirect('/?success');
        }
    }
    }

     public function memberdelete($taskId){
        $this->load->model("Home_model");
        $this->Home_model->member_delete_row($taskId);
        
    }


    public function idfirst()
    {
        $this->load->view('frontend/idcard1');
    }

    public function idsecond()
    {
        $this->load->view('frontend/idcard2');
    }  


    public function donate(){
        $this->load->view('frontend/donate');
    }

    public function about(){
        $this->load->view('frontend/about');
    } 

    public function vision(){
        $this->load->view('frontend/vission');
    } 

    public function leader(){
        $this->load->view('frontend/leaders');
    }

    public function events()
    {
        $this->load->view('frontend/events');
    }

    public function career(){
        $this->load->view('frontend/career');
    }

    public function privacy(){
        $this->load->view('frontend/privacy');
    }

    public function term(){
        $this->load->view('frontend/termcondition');
    }

    public function disclaimer(){
        $this->load->view('frontend/disclaimers');
    }
}