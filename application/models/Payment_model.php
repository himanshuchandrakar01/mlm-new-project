<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Task_model (Task Model)
 * Task model class to get to handle task related data 
 * @author : Kishor Mali
 * @version : 1.5
 * @since : 18 Jun 2022
 */
class Payment_model extends CI_Model
{
    /**
     * This function is used to get the task listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function paymentListingCount($searchText)
    {
        $this->db->select('BaseTbl.paymentid,BaseTbl.name,BaseTbl.holder_name,BaseTbl.amount, BaseTbl.payment_upload ,BaseTbl.created_at');
        $this->db->from('payment as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    /**
     * This function is used to get the task listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function paymentListing($searchText, $page, $segment)
    {
       $query = $this->db->query("select * from tbl_users left join payment on payment.name=tbl_users.userId order by payment.paymentid DESC")->result();
        // $this->db->select('BaseTbl.paymentid,BaseTbl.name,BaseTbl.holder_name,BaseTbl.amount, BaseTbl.payment_upload ,BaseTbl.created_at');
        // $this->db->from('payment as BaseTbl');
        // if(!empty($searchText)) {
        //     $likeCriteria = "(BaseTbl.name LIKE '%".$searchText."%')";
        //     $this->db->where($likeCriteria);
        // }
        // $this->db->where('BaseTbl.isDeleted', 0);
        // $this->db->order_by('BaseTbl.paymentid', 'DESC');
       // $this->db->limit($page, $segment);
        // $query = $this->db->get();
        
        // $result = $query->result();        
        return $query;
    }
    function userpaymentListing($searchText, $page, $segment)
     {
        $query = $this->db->query("select * from tbl_users left join payment on payment.name=tbl_users.userId where tbl_users.roleId = '17' order by payment.paymentid DESC ")->result();
        return $query;
    //     $this->db->select('BaseTbl.paymentid,BaseTbl.name,BaseTbl.holder_name,BaseTbl.amount, BaseTbl.payment_upload ,BaseTbl.created_at');
    //     $this->db->from('payment as BaseTbl');
    //     if(!empty($searchText)) {
    //         $likeCriteria = "(BaseTbl.name LIKE '%".$searchText."%')";
    //         $this->db->where($likeCriteria);
    //     }
    //     $this->db->where('BaseTbl.isDeleted', 0);
    //     $this->db->where('BaseTbl.roleId', 17);
    //     $this->db->order_by('BaseTbl.paymentid', 'DESC');
    //     $this->db->limit($page, $segment);
    //     $query = $this->db->get();
        
    //     $result = $query->result();        
    //     return $result;
    }
    
    /**
     * This function is used to add new task to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewpayment($paymentInfo)
    {
        // print_r($paymentInfo);exit();
        $this->db->trans_start();
        $this->db->insert('payment', $paymentInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    /**
     * This function used to get task information by id
     * @param number $taskId : This is task id
     * @return array $result : This is task information
     */
    function getpaymentInfo($paymentid)
    {
        $this->db->select('paymentid, name, holder_name,amount,payment_upload');
        $this->db->from('payment');
        $this->db->where('paymentid', $paymentid);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    
    /**
     * This function is used to update the task information
     * @param array $taskInfo : This is task updated information
     * @param number $taskId : This is task id
     */
    function editpayment($paymentInfo, $paymentid)
    {
        $this->db->where('paymentid', $paymentid);
        $this->db->update('payment', $paymentInfo);
        
        return TRUE;
    }

    function payment_delete_row($paymentid){
         $this -> db -> where('paymentid', $paymentid);
         $this -> db -> delete('payment');
    }
}