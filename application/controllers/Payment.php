<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
// require APPPATH . '/libraries/Pdf.php';

/**
 * Class : Task (TaskController)
 * Task Class to control task related operations.
 * @author : Kishor Mali
 * @version : 1.5
 * @since : 19 Jun 2022
 */
class Payment extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_model', 'tm');
        $this->isLoggedIn();
        $this->module = 'Payment';
    }

    /**
     * This is default routing method
     * It routes to default listing page
     */
    public function index()
    {
        redirect('member-payment');
    }
    
    /**
     * This function is used to load the task list
     */
    function paymentListing()
    {
        if(!$this->hasListAccess())
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
            
            $count = $this->tm->paymentListingCount($searchText);

			$returns = $this->paginationCompress ( "paymentListing/", $count, 10 );
            
            $data['records'] = $this->tm->paymentListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'NGO : payment';
            
            $this->loadViews("payment/list", $this->global, $data, NULL);
        }
    }




    function productlist()
    {

        $this->global['pageTitle'] = 'NGO : Products Name';

        $this->loadViews("payment/productlist", $this->global, NULL, NULL);
    }



function userpaymentListing()
    {
        if(!$this->hasListAccess())
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
            
            $count = $this->tm->paymentListingCount($searchText);

            $returns = $this->paginationCompress ( "paymentListing/", $count, 10 );
            
            $data['records'] = $this->tm->userpaymentListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'NGO : user payment';
            
            $this->loadViews("payment/userpaymentlist", $this->global, $data, NULL);
        }
    }
    /**
     * This function is used to load the add new form
     */
    function add()
    {
        if(!$this->hasCreateAccess())
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'NGO : Add New payment';

            $this->loadViews("payment/add", $this->global, NULL, NULL);
        }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewpayment()
    {
        if(!$this->hasCreateAccess())
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('total_rupees','Total Rupees','trim|required|max_length[256]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->add();
            }
            else
            {
                $total_rupees = $this->security->xss_clean($this->input->post('total_rupees'));
                $admin_rupees = $this->security->xss_clean($this->input->post('admin_rupees'));
                $state_rupees = $this->security->xss_clean($this->input->post('state_rupees'));
                $district_rupees = $this->security->xss_clean($this->input->post('district_rupees'));
                $assistant_rupees = $this->security->xss_clean($this->input->post('assistant_rupees'));

                // print_r($total_rupees);exit();
                
                $paymentInfo = array('total_rupees'=>$total_rupees, 'admin_rupees'=>$admin_rupees,'state_rupees'=>$state_rupees,'district_rupees'=>$district_rupees,'assistant_rupees'=>$assistant_rupees, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));

                // print_r($paymentInfo);exit();
                
                $result = $this->tm->addNewpayment($paymentInfo);
                
                if($result > 0) {
                    $this->session->set_flashdata('success', 'payment created successfully');
                } else {
                    $this->session->set_flashdata('error', 'payment creation failed');
                }
                
                redirect('member-payment');
            }
        }
    }

    // public function test(){
    //      $this->load->view("includes/header");
    //         $this->load->view("includes/footer");
    // }

    
    /**
     * This function is used load task edit information
     * @param number $taskId : Optional : This is task id
     */
    // function edit($paymentid = NULL)
    // {
    //     if(!$this->hasUpdateAccess())
    //     {
    //         $this->loadThis();
    //     }
    //     else
    //     {
    //         if($paymentid == null)
    //         {
    //             redirect('member-payment');
    //         }
            
    //         $data['paymentInfo'] = $this->tm->getpaymentInfo($paymentid);

    //         $this->global['pageTitle'] = 'NGO : Edit payment';
            
    //         $this->loadViews("payment/edit", $this->global, $data, NULL);
    //     }
    // }
    
    
    /**
     * This function is used to edit the user information
     */
    // function editpayment()
    // {
    //     if(!$this->hasUpdateAccess())
    //     {
    //         $this->loadThis();
    //     }
    //     else
    //     {
    //         $this->load->library('form_validation');
            
    //         $taskId = $this->input->post('taskId');
            
    //         $this->form_validation->set_rules('taskTitle','Task Title','trim|required|max_length[256]');
    //         $this->form_validation->set_rules('description','Description','trim|required|max_length[1024]');
            
    //         if($this->form_validation->run() == FALSE)
    //         {
    //             $this->edit($taskId);
    //         }
    //         else
    //         {
    //             $taskTitle = $this->security->xss_clean($this->input->post('taskTitle'));
    //             $description = $this->security->xss_clean($this->input->post('description'));
                
    //             $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                
    //             $result = $this->tm->editTask($taskInfo, $taskId);
                
    //             if($result == true)
    //             {
    //                 $this->session->set_flashdata('success', 'Task updated successfully');
    //             }
    //             else
    //             {
    //                 $this->session->set_flashdata('error', 'Task updation failed');
    //             }
                
    //             redirect('task/taskListing');
    //         }
    //     }
    // }

    // public function payment(){
    //     $this->load->view('payment/list');
    // }


    public function paymentstore(){
        // echo "ladfnldfn";
        if ($_SERVER['REQUEST_METHOD']=='POST') {

        $pimg = $_FILES['payment_upload']['name'];
       
      $config['upload_path']   = './payment/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $this->load->library('upload', $config);
           $this->upload->initialize($config);
         if ( ! ($this->upload->do_upload('payment_upload'))) 
         {
            $error = array('error' => $this->upload->display_errors()); 
         }
            
         else {
   
     $payment_data = array(
                'name' => $this->input->post('name'),
                'holder_name' => $this->input->post('holder_name'),
                'amount' => $this->input->post('amount'),
                'payment_upload' => $pimg,
                
            );

        // print_r($payment_data);exit(); 

        $this->db->insert("payment", $payment_data);
        return redirect('member-payment');
        }
    }
    
    }
    public function paymentnew(){
        // echo "ladfnldfn";
        if ($_SERVER['REQUEST_METHOD']=='POST') {

        $pimg = $_FILES['payment_upload']['name'];
       
      $config['upload_path']   = './payment/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $this->load->library('upload', $config);
           $this->upload->initialize($config);
         if ( ! ($this->upload->do_upload('payment_upload'))) 
         {
            $error = array('error' => $this->upload->display_errors()); 
         }
            
         else {
   
     $payment_data = array(
                'name' => $this->input->post('name'),
                'roleId' => $this->input->post('roleId'),
                'holder_name' => $this->input->post('holder_name'),
                'amount' => $this->input->post('amount'),
                'payment_upload' => $pimg,
                'product_list' =>$this->input->post('product_list')
                
            );

        // print_r($payment_data);exit(); 

        $this->db->insert("payment", $payment_data);
        return redirect('paymentmsg');
        }
    }
    $this->global['pageTitle'] = 'NGO : Add New payment';

    $this->loadViews("payment/addnewpayment", $this->global, NULL, NULL);

    
    }

    public function paymentdelete($paymentid){
        $this->load->model("Payment_model");
        $this->Payment_model->payment_delete_row($paymentid);
    }
    public function paymentmsg()
    {
        $this->global['pageTitle'] = 'NGO : payment';
            
            $this->loadViews("payment/paymentmsg", $this->global, NULL);
    }
    public function change_sts()
    {
     $sts=$this->input->post('change_sts');
     $id=$this->input->post('id');
     $email=$this->input->post('email');
     $amount=$this->input->post('amount');
     $receive_amount=$this->input->post('receive_amount');
     $c_id=$this->input->post('c_id');
     $wallet_amount=$this->input->post('wallet_amount');

     // echo $sts,$id;
     // exit();
     $this->db->query("update tbl_users set payment_sts='$sts',sending_payment_Amount='$amount' where userId='$id'");
     $this->db->query("insert into wallet_new(user_id,sending_amount,receive_amount,contactor_id,wallet_amount)value('$id','$amount','$receive_amount','$c_id','$wallet_amount')");

   

        $sendtomail = $email;
        $subject = 'Welcome to Vikas Samiti Yojana';
        $message = '<pre>Dear user ,

        Your Payment is received.

        Receipt is sended into your vikas  samiti account.

        ID -Registered Mobile number

        password -Your Date of Birth




        </pre>';
        $from = 'vikassamiti240@gmail.com';

        $config = array(

            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => '465',
            'smtp_user'  => 'vikassamiti240@gmail.com',
            'smtp_pass' => 'gmetrgefuxqvcfoi',
            'charset' => 'utf-8',
            'mailtype' => 'html',
            'wordwrap' => true,

        );


        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($sendtomail);
        $this->email->subject($subject);
        $this->email->message($message,$amount);
        //$this->email->attach('C:\xampp\htdocs\greatfind\upload\ngo.jpg');
    

        if ($this->email->send()) {
            echo "Success";
        }else{
            echo "Error";
        }

     return redirect('member-payment');
    }
    public function paymentreceipt()
    { $this->global['pageTitle'] = 'NGO : payment';
            
    $this->loadViews("payment/paymentreceipt", $this->global, NULL); # code...
    }
    public function print_rcp()
    {
        $this->load->library('pdf');
       
        
        $html = $this->load->view('payment/GeneratePdfView', [], true);
        //$this->pdf->loadHtml($html);
        $this->pdf->createPDF($html, 'vikas-samiti-receipt',false);

    }
    public function user_wallet()
    {
        $this->global['pageTitle'] = 'NGO : User Wallet';

    $this->loadViews("wallet/user_wallet", $this->global, NULL, NULL);
    }
    public function user_wallet_db()
    {
        $arrayName = array(
            'user_id' => $this->input->post('id'),
            'name' => $this->input->post('user_name'),
            'subject' => $this->input->post('amount'),
            'message' => $this->input->post('msg'),
             );
        
   
    }
}

?>