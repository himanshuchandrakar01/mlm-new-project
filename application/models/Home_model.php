<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Task_model (Task Model)
 * Task model class to get to handle task related data 
 * @author : Kishor Mali
 * @version : 1.5
 * @since : 18 Jun 2022
 */
class Home_model extends CI_Model
{
    function member_delete_row($taskId){
         $this -> db -> where('taskId', $taskId);
         $this -> db -> delete('tbl_task');
         return redirect("https://vikassamiti.org/task/taskListing");
    }   

}