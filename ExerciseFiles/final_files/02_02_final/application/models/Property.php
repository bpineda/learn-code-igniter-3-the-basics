<?php 
class Property extends CI_Model
{

   public function __construct()
   {
       parent::__construct();
       $this->db = $this->load->database('default', TRUE);
   }

   public function get()
   {
   	return "4 Bedroom 2 Story House";
   }

   public function connection_test()
   {
   	
   }

   public function get_version()
   {
      $result_set = $this->db->query('SELECT VERSION()');
      return $result_set;
   }

   public function all()
   {
     $result_set = $this->db->get('properties');
     return $result_set->result_array();
   }

   
}