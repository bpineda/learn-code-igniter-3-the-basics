<?php 
class Agent extends CI_Model
{

  public function __construct()
   {
       parent::__construct();
       $this->db = $this->load->database('default', TRUE);
   }

  public function all()
   {
     $result_set = $this->db->get('agents');
     $result_arr = $result_set->result_array();
     $return_arr = array();
     foreach($result_arr as $rs)
     {
      $return_arr[$rs['id']] = $rs['name'];
     }

     return $return_arr;

   }
}