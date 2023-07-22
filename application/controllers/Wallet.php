<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Task (TaskController)
 * Task Class to control task related operations.
 * @author : Kishor Mali
 * @version : 1.5
 * @since : 19 Jun 2022
 */
class Wallet extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Wallet_model', 'tm');
        $this->isLoggedIn();
        $this->module = 'Wallet';
    }

    /**
     * This is default routing method
     * It routes to default listing page
     */
    public function index()
    {
        redirect('wallet/walletListing');
    }
    public function users_wallets()
    {

       $this->global['pageTitle'] = 'NGO : Wallet';
        $this->global['userid']  =$this->input->get("id"); 
        $this->loadViews("wallet/users_wallets", $this->global, NULL);
    }
    public function users_wallets_db()
    {
        $district=$this->input->post('district_id');
        $state=$this->input->post('state_id');
        $assistant=$this->input->post('assistant_id');
        $state_amount=$this->input->post('state_amount');
        $district_wallet_amount=$this->input->post('district_wallet_amount');
        $assistant_wallet_amount=$this->input->post('assistant_wallet_amount');

      $data = array(
        'user_id' => $this->input->post('user_id'),
        'user_name' => $this->input->post('user_name'),
        'user_sending_amount' => $this->input->post('user_sending_amount'),
        'assistant_id' => $this->input->post('assistant_id'),
        'assistant_name' => $this->input->post('assistant_name'),
        'assistant_wallet_amount' => $this->input->post('assistant_wallet_amount'),
        'assistant_incentive_amount' => $this->input->post('assistant_incentive_amount'),
        'district_id' => $this->input->post('district_id'),
        'district_name' => $this->input->post('district_name'),
        'district_wallet_amount' => $this->input->post('district_wallet_amount'),
        'state_id' => $this->input->post('state_id'),
        'state_name' => $this->input->post('state_name'),
        'state_amount' => $this->input->post('state_amount'),
        
       );
     
      $result=$this->db->insert("wallet_transaction",$data);
        // if($this->db->insert("wallet_transaction",$data)){
        //     return redirect('wallet/walletListing');
        // }
      $getwallet=$this->db->query("select * from wallet_transaction_history  where (sender_id='$district' or receiver_id='$district')or (sender_id='$state' or receiver_id='$state')or(sender_id='$assistant' or receiver_id='$assistant') order by transaction_id DESC limit 1")->result();
      // print_r($getwallet);exit();
      if (!empty($getwallet)) {
          # code...
      
      foreach ($getwallet as $getwallet) {
         $wallet_amounts=$getwallet->wallet_amount;
         $idhope1=$getwallet->sender_id;
         $idhope2=$getwallet->receiver_id;
         if ($idhope1!=9890098900) {
             $idhope=$idhope1;
         }
         if ($idhope2!=9890098900) {
             $idhope=$idhope2;
         }

      }
      //echo $idhope;
      $getwalletid=$this->db->query("select * from tbl_users where mobile='$idhope'")->result();
      //print_r($getwalletid); exit();
      foreach ($getwalletid as $getwalletid) {
          $getwalletrole=$getwalletid->roleId;

      }
     // echo $getwalletrole;exit();
      if ($getwalletrole==14) {
          # code...
      
      $final_wallet_amounts=$wallet_amounts+$state_amount;
       $sts_data=array(
            "sender_id"=>9890098900,
            "sender_name"=>"admin", 
            "receiver_id"=>$this->input->post("user_id"),
            "receiver_name"=>$this->input->post("user_name"),
            "type"=>"credit",
            "wallet_amount"=>$final_wallet_amounts,
            "amount"=>$state_amount
            
        );
        $this->db->insert("wallet_transaction_history",$sts_data);
   }
   if ($getwalletrole==15) {
          # code...
      
      $final_wallet_amounts=$wallet_amounts+$district_wallet_amount;
       $district_data=array(
            "sender_id"=>9890098900,
            "sender_name"=>"admin", 
            "receiver_id"=>$this->input->post("user_id"),
            "receiver_name"=>$this->input->post("user_name"),
            "type"=>"credit",
            "wallet_amount"=>$final_wallet_amounts,
            "amount"=>$district_wallet_amount
            
        );
       $this->db->insert("wallet_transaction_history",$district_data);
   }
   if ($getwalletrole==16) {
          # code...
      
      $final_wallet_amounts=$wallet_amounts+$assistant_wallet_amount;
       $assis_data=array(
           "sender_id"=>9890098900,
            "sender_name"=>"admin", 
            "receiver_id"=>$this->input->post("user_id"),
            "receiver_name"=>$this->input->post("user_name"),
            "type"=>"credit",
            "wallet_amount"=>$final_wallet_amounts,
            "amount"=>$assistant_wallet_amount
            
        );
       $this->db->insert("wallet_transaction_history",$assis_data);
           }
        }
      if($result > 0) {
                    $this->session->set_flashdata('success', 'Wallet  successfully Sended');
                } else {
                    $this->session->set_flashdata('error', 'Wallet creation failed');
                }
            
                
                redirect('task/taskListing');
    }
    
    /**
     * This function is used to load the task list
     */
    function walletListing()
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
            
            $count = $this->tm->walletListingCount($searchText);

            $returns = $this->paginationCompress ( "walletListing/", $count, 10 );
            
            $data['records'] = $this->tm->walletListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'NGO : Wallet';
            
            $this->loadViews("wallet/list", $this->global, $data, NULL);
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
            $this->global['pageTitle'] = 'NGO : Add New wallet';

            $this->loadViews("wallet/add", $this->global, NULL, NULL);
        }
    }
      public function bank_details_admin()
        {
           $this->global['pageTitle'] = 'Vikas Samiti : User Bank Details';
        
        $this->loadViews("payment/bank_details_admin", $this->global, NULL , NULL);
      
        }
        public function bank_approve()
        {
            $id=$this->input->post('id');
            $change_sts=$this->input->post('change_sts');

     // echo $sts,$id;
     // exit();
     $this->db->query("update bank_details set status='$change_sts' where id='$id'");
        
     return redirect('Wallet/bank_details_admin');
    }
    /**
     * This function is used to add new user to the system
     */
    function wallet_details()
    {
        $this->global['pageTitle'] = 'NGO :  Wallet';

            $this->loadViews("wallet/wallet_info", $this->global, NULL, NULL);
    }
    function wallet_trs()
    {
        $amount=$this->input->post("amount");
        $mobile=$this->input->post("user_id");
        $data=array(
            "sender_id"=>$this->input->post("user_id"),
            "sender_name"=>$this->input->post("user_name"), 
            "receiver_id"=>9890098900,
            "receiver_name"=>"admin",
            "wallet_amount"=>$this->input->post("wallet_amount"),
            "amount"=>$this->input->post("amount"),
            "remark"=>$this->input->post("remark"),
            "account_no"=>$this->input->post("account_no"),
            "bank_name  "=>$this->input->post("bank_name"),
            "ifsc_code"=>$this->input->post("ifsc_code"),
            "holder_name"=>$this->input->post("holder_name"),
            "aadhar_number"=>$this->input->post("aadhar_number"),
            "pan_number"=>$this->input->post("pan_number"),
        );
        $query=$this->db->query("select sum(assistant_wallet_amount) as assistant_wallet_amount,sum(assistant_incentive_amount) as assistant_incentive_amount,sum(district_wallet_amount) as district_wallet_amount,sum(state_amount) as state_amount from wallet_transaction where assistant_id='$mobile' or district_id='$mobile' or state_id='$mobile'")->result();
        foreach ($query as $query) {
            # code...
        
        if ($_SESSION['rid']==14) {
                    $swallet=$query->state_amount;
                    if ($swallet<1000) {
                       return redirect ('wallet-details?wallet_amount_less_than_1000');
                    }
                    elseif ($swallet<$amount) {
                         return redirect ('wallet-details?wallet_amount_maintain');
                        # code...
                    }elseif ($amount<1000) {
                        return redirect ('wallet-details?wallet_amount_mnm_req');
                    }else{
                        $insertquery=$this->db->insert("wallet_transaction_history",$data);
                    if (!empty($insertquery)) {
                        $this->session->set_flashdata('success', 'Request successfully sended');
                       return redirect ('wallet-details?success');
                    }else{
                         $this->session->set_flashdata('error', 'Wallet creation failed');
                         return redirect ('wallet-details');
                    }
                    }
        }
         if ($_SESSION['rid']==15) {
           // echo $query->district_wallet_amount;
            $district_wallet_amount=$query->district_wallet_amount;
                    if ($district_wallet_amount<1000) {
                       return redirect ('wallet-details?wallet_amount_less_than_1000');
                    }
                    elseif ($district_wallet_amount<$amount) {
                         return redirect ('wallet-details?wallet_amount_maintain');
                        # code...
                    }elseif ($amount<1000) {
                        return redirect ('wallet-details?wallet_amount_mnm_req');
                    }else{
                        $insertquery=$this->db->insert("wallet_transaction_history",$data);
                    if (!empty($insertquery)) {
                        $this->session->set_flashdata('success', 'Request successfully sended');
                       return redirect ('wallet-details?success');
                    }else{
                         $this->session->set_flashdata('error', 'Wallet creation failed');
                         return redirect ('wallet-details');
                    }
                    }
        }
        if ($_SESSION['rid']==16) {
        //echo $query->assistant_wallet_amount;
        $assistant_wallet_amount=$query->assistant_wallet_amount;
        //$assistant_wallet_amount=3000;
                    if ($assistant_wallet_amount<1000) {
                       return redirect ('wallet-details?wallet_amount_less_than_1000');
                    }
                    elseif ($assistant_wallet_amount<$amount) {
                         return redirect ('wallet-details?wallet_amount_maintain');
                        # code...
                    }elseif ($amount<1000) {
                        return redirect ('wallet-details?wallet_amount_mnm_req');
                    }else{
                        $insertquery=$this->db->insert("wallet_transaction_history",$data);
                    if (!empty($insertquery)) {
                        $this->session->set_flashdata('success', 'Request successfully sended');
                       return redirect ('wallet-details?success');
                    }else{
                         $this->session->set_flashdata('error', 'Wallet creation failed');
                         return redirect ('wallet-details');
                    }
                    }
                  
        }
    }
        
    }
    function addNewWallet()
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
                
                $walletInfo = array('total_rupees'=>$total_rupees, 'admin_rupees'=>$admin_rupees,'state_rupees'=>$state_rupees,'district_rupees'=>$district_rupees,'assistant_rupees'=>$assistant_rupees, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));

                // print_r($walletInfo);exit();
                
                $result = $this->tm->addNewWallet($walletInfo);
                
                if($result > 0) {
                    $this->session->set_flashdata('success', 'Wallet created successfully');
                } else {
                    $this->session->set_flashdata('error', 'Wallet creation failed');
                }
                
                redirect('wallet/walletListing');
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
    // function edit($walletid = NULL)
    // {
    //     if(!$this->hasUpdateAccess())
    //     {
    //         $this->loadThis();
    //     }
    //     else
    //     {
    //         if($walletid == null)
    //         {
    //             redirect('wallet/walletListing');
    //         }
            
    //         $data['walletInfo'] = $this->tm->getwalletInfo($walletid);

    //         $this->global['pageTitle'] = 'NGO : Edit Wallet';
            
    //         $this->loadViews("wallet/edit", $this->global, $data, NULL);
    //     }
    // }
    
    
    /**
     * This function is used to edit the user information
     */
    // function editwallet()
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

    public function wallet(){
        $this->load->view('wallet/list');
    }


    public function walletstore(){
        // echo "ladfnldfn";
        if ($_SERVER['REQUEST_METHOD']=='POST') {
   
     $wallet_data = array(
                'total_rupees' => $this->input->post('total_rupees'),
                'admin_rupees' => $this->input->post('admin_rupees'),
                'state_rupees' => $this->input->post('state_rupees'),
                'district_rupees' => $this->input->post('district_rupees'),
                'assistant_rupees' => $this->input->post('assistant_rupees')
                
            );

        // print_r($wallet_data);exit(); 

        $this->db->insert("wallet", $wallet_data);
        return redirect('wallet/walletListing');
        }
    
    }
    public function wallet_response()
    {
        $type=$this->input->post("type");

        $wallet_amount=$this->input->post("wallet_amount");
        $send_amount=$this->input->post("send_amount");
        $update_wallet=$wallet_amount-$send_amount;
        if ($type=="credit") {
            # code...
        
        $data=array(

            "sender_id"=>9890098900,
            "sender_name"=>"admin",
            "receiver_id"=>$this->input->post("user_id"),
            "receiver_name"=>$this->input->post("receiver_name"),
            "type"=>$this->input->post("type"),
            "wallet_amount"=>$update_wallet,
            "amount"=>$this->input->post("send_amount"),
            "remark"=>$this->input->post("remark"),
            "account_no"=>$this->input->post("account_no"),
            "bank_name  "=>$this->input->post("bank_name"),
            "ifsc_code"=>$this->input->post("ifsc_code"),
            "holder_name"=>$this->input->post("holder_name"),
            "aadhar_number"=>$this->input->post("aadhar_number"),
            "pan_number"=>$this->input->post("pan_number"),
        );
        $insertquery=$this->db->insert("wallet_transaction_history",$data);
                    if (!empty($insertquery)) {
                        $this->session->set_flashdata('wsuccess', 'Request successfully sended');
                       return redirect ('wallet/walletListing?wsuccess');
                    }else{
                         $this->session->set_flashdata('error', 'Wallet creation failed');
                         return redirect ('wallet/walletListing?error');
                    }
                }else{

        $data=array(

            "user_id"=>$this->input->post("user_id"),
            "user_name"=>"admin",
            "type"=>$this->input->post("type"),
            "wallet_amount"=>$wallet_amount,
            "amount"=>$this->input->post("send_amount"),
            "remark"=>$this->input->post("remark"),
            "account_no"=>$this->input->post("account_no"),
            "bank_name  "=>$this->input->post("bank_name"),
            "ifsc_code"=>$this->input->post("ifsc_code"),
            "holder_name"=>$this->input->post("holder_name"),
            "aadhar_number"=>$this->input->post("aadhar_number"),
            "pan_number"=>$this->input->post("pan_number"),
        );
        $insertquery=$this->db->insert("wallet_transaction_history",$data);
                    if (!empty($insertquery)) {
                        $this->session->set_flashdata('wsuccess', 'Request successfully sended');
                       return redirect ('wallet/walletListing?wsuccess');
                    }else{
                         $this->session->set_flashdata('error', 'Wallet creation failed');
                         return redirect ('wallet/walletListing?error');
                    }
                }

    }
}

?>