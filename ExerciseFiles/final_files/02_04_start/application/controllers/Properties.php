<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Properties extends CI_Controller
{
   public function index()
   {
      
   	$data['user_name'] = 'Bernard';
   	$data['status_group'] = ['All', 'Available', 'Unavailable'];
      $data['properties'] = $this->Property->all();
   	$this->load->view('layouts/header');
   	$this->load->view('layouts/foundation_nav');
   	$this->load->view('properties/index', $data);
   	$this->load->view('layouts/footer');
   }

   public function show($id)
   {
      $data['id'] = $id;
      

      $data['name'] =$this->Property->get();
      $version = $this->Property->get_version();
      $data['version'] = $version->conn_id->server_info;
      $this->load->view('properties/show', $data);
   }

   public function db_test()
   {
      
      $this->Property->connection_test();
   }

   public function edit($id)
   {

      if($_POST)
      {

         $name = $this->input->post('name');
         $description = $this->input->post('description');
         $new_data['name'] = $name;
         $new_data['description'] = $description;

         $this->Property->update($id, $new_data);
         redirect('properties/index');
      }

      $data['property'] = $this->Property->get($id);
      $this->load->view('layouts/header');
      $this->load->view('layouts/foundation_nav');
      $this->load->view('properties/edit', $data);
      $this->load->view('layouts/footer');
   }

}