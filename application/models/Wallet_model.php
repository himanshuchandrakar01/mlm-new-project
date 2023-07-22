<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Task_model (Task Model)
 * Task model class to get to handle task related data 
 * @author : Kishor Mali
 * @version : 1.5
 * @since : 18 Jun 2022
 */
class Wallet_model extends CI_Model
{
    /**
     * This function is used to get the task listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function walletListingCount($searchText)
    {
        $this->db->select('BaseTbl.walletid,BaseTbl.total_rupees,BaseTbl.admin_rupees,BaseTbl.state_rupees, BaseTbl.district_rupees, BaseTbl.assistant_rupees,BaseTbl.created_at');
        $this->db->from('wallet as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.total_rupees LIKE '%".$searchText."%')";
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
    function walletListing($searchText, $page, $segment)
    {
        $this->db->select('BaseTbl.walletid,BaseTbl.total_rupees,BaseTbl.admin_rupees,BaseTbl.state_rupees, BaseTbl.district_rupees, BaseTbl.assistant_rupees,BaseTbl.created_at');
        $this->db->from('wallet as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.total_rupees LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->order_by('BaseTbl.walletid', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to add new task to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewWallet($walletInfo)
    {
        // print_r($walletInfo);exit();
        $this->db->trans_start();
        $this->db->insert('wallet', $walletInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    /**
     * This function used to get task information by id
     * @param number $taskId : This is task id
     * @return array $result : This is task information
     */
    function getwalletInfo($walletid)
    {
        $this->db->select('walletid, total_rupees, admin_rupees,state_rupees,district_rupees,assistant_rupees');
        $this->db->from('wallet');
        $this->db->where('walletid', $walletid);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    
    /**
     * This function is used to update the task information
     * @param array $taskInfo : This is task updated information
     * @param number $taskId : This is task id
     */
    function editwallet($walletInfo, $walletid)
    {
        $this->db->where('walletid', $walletid);
        $this->db->update('wallet', $walletInfo);
        
        return TRUE;
    }
    public function count_member()
    {
        $userId=$_SESSION['userId'];
       $r= $this->db->query("select * from payment where amount=600 and name=1")->result();
        return $r;
    }
}