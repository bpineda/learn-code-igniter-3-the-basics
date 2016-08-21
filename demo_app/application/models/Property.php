<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Here is the class. It should extend from models
//since etc...
class Property extends CI_Model
{

   public function __construct()
   {
       parent::__construct();

   }

   public function connection_test()
   {
      $this->load->database(  'default',
                              TRUE);
   }

}
