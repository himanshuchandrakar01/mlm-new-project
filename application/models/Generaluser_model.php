<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Task_model (Task Model)
 * Task model class to get to handle task related data 
 * @author : Kishor Mali
 * @version : 1.5
 * @since : 18 Jun 2022
 */
class Generaluser_model extends CI_Model
{
    /**
     * This function is used to get the task listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function generalListingCount($searchText)
    {
        $this->db->select('BaseTbl.id, BaseTbl.user_name, BaseTbl.user_email, BaseTbl.user_password,BaseTbl.user_confirm_password,BaseTbl.user_image,BaseTbl.created_at');
        $this->db->from('general_user as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.user_name LIKE '%".$searchText."%')";
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
    function generalListing($searchText, $page, $segment)
    {
        $this->db->select('BaseTbl.id, BaseTbl.user_name, BaseTbl.user_email, BaseTbl.user_password,BaseTbl.user_confirm_password,BaseTbl.user_image,BaseTbl.created_at');
        $this->db->from('general_user as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.user_name LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    public function generaluserdetails(){
        $generaluser = $this->db->query('select * from general_user')->result();
        return $generaluser;
    }
    
    /**
     * This function is used to add new task to system
     * @return number $insert_id : This is last inserted id
     */
    // function addNewTask($taskInfo)
    // {
    //     $this->db->trans_start();
    //     $this->db->insert('tbl_task', $taskInfo);
        
    //     $insert_id = $this->db->insert_id();
        
    //     $this->db->trans_complete();
        
    //     return $insert_id;
    // }
    
    /**
     * This function used to get task information by id
     * @param number $taskId : This is task id
     * @return array $result : This is task information
     */
    // function getTaskInfo($taskId)
    // {
    //     $this->db->select('taskId, taskTitle, description');
    //     $this->db->from('tbl_task');
    //     $this->db->where('taskId', $taskId);
    //     $this->db->where('isDeleted', 0);
    //     $query = $this->db->get();
        
    //     return $query->row();
    // }
    
    
    /**
     * This function is used to update the task information
     * @param array $taskInfo : This is task updated information
     * @param number $taskId : This is task id
     */
    // function editTask($taskInfo, $taskId)
    // {
    //     $this->db->where('taskId', $taskId);
    //     $this->db->update('tbl_task', $taskInfo);
        
    //     return TRUE;
    // }
}