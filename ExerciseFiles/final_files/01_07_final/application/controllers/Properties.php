<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Properties extends CI_Controller
{
   public function index()
   {
      
   	$data['user_name'] = 'Bernard';
   	$data['status_group'] = ['All', 'Available', 'Unavailable'];
   	$this->load->view('layouts/header');
   	$this->load->view('layouts/foundation_nav');
   	$this->load->view('properties/index', $data);
   	$this->load->view('layouts/footer');
   }

   public function show($id)
   {
      $data['id'] = $id;
      

      $data['name'] =$this->Property->get();
      $this->load->view('properties/show', $data);
   }

   public function db_test()
   {
      
      $this->Property->connection_test();
   }

}
