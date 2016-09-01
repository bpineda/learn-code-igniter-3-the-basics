<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Properties extends CI_Controller
{
   public function index()
   {

      $this->load->model('Status');

      $all_status = $this->Status->all();

      //var_dump($all_models);

      $faker = Faker\Factory::create();
      
      log_message('debug', 'My First Log');
   	$data['user_name'] = 'Guest';
   	$data['status_group'] = $all_status;
      $data['properties'] = $this->Property->all();

      $data['selected_filter'] = $this->session->selected_filter;

   	$this->load->view('layouts/header');
   	$this->load->view('layouts/foundation_nav');
   	$this->load->view('properties/index', $data);
   	$this->load->view('layouts/footer');
   }

   public function kml_export()
   {
      //$this->output->set_content_type('application/xml');
      $this->output->set_content_type('application/octet-stream');
      header('Content-Disposition: inline; filename="real_estate_kml_export.kml"');
      $data['properties'] = $this->Property->all();
      $this->load->view('properties/kml_export', $data);
   }

   public function view_image()
   {
      $image = file_get_contents('assets/images/ThinkstockPhotos-145054512_small.jpg');
      $this->output->set_content_type('jpeg')->set_output($image);
   }

   public function destroy($id)
   {
      $this->Property->delete($id);
      redirect('');
   }

   public function set_filter()
   {
      $session_data['selected_filter'] = $this->input->get('filter');
      $this->session->set_userdata($session_data);
      redirect('properties/index');
   }

   public function edit($id)
   {
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('description', 'Description', 'required');

      if($_POST)
      {

         $image = FALSE;

         if($_FILES)
         {

            $image = $this->do_upload();

         }

         $name = $this->input->post('name');
         $description = $this->input->post('description');
         $street = $this->input->post('street');
         $city = $this->input->post('city');
         $state = $this->input->post('state');
         $agents_id = $this->input->post('agents_id');
         $status_id = $this->input->post('status_id');
         $zip_code = $this->input->post('zip_code');
         $latitude = $this->input->post('latitude');
         $longitude = $this->input->post('longitude');

         $new_data['street'] = $street;
         $new_data['city'] = $city;
         $new_data['state'] = $state;
         $new_data['agents_id'] = $agents_id;
         $new_data['status_id'] = $status_id;
         $new_data['zip_code'] = $zip_code;
         $new_data['latitude'] = $latitude;
         $new_data['longitude'] = $longitude;
         
         $new_data['name'] = $name;
         $new_data['description'] = $description;



         if($image)
         {

            $new_data['image'] = $image;

         }

         if( $this->form_validation->run() )
         {
            $this->Property->update($id, $new_data);
            redirect('properties/index');
         }else
         {
            $data['property']['name'] = $this->input->post('name');
            $data['property']['description'] = $this->input->post('description');
            $this->load->view('layouts/header');
            $this->load->view('layouts/foundation_nav');
            $this->load->view('properties/edit', $data);
            $this->load->view('layouts/footer');
            return;
         }

         //$this->Property->update($id, $new_data);
         
      }

      $data['property'] = $this->Property->get($id);

      $this->load->model('Status');
      $all_status = $this->Status->all();

      $this->load->model('Agent');
      $all_agents = $this->Agent->all();

      $data['statuses'] = $all_status;
      $data['agents'] = $all_agents;

      $this->load->view('layouts/header');
      $this->load->view('layouts/foundation_nav');
      $this->load->view('properties/edit', $data);
      $this->load->view('layouts/footer');
   }

   public function do_upload()
   {
      $config['upload_path'] = './assets/images/';
      $config['allowed_types'] = 'gif|jpg|png';
      $this->load->library('upload', $config);
      $this->upload->do_upload('image_file');
      $data = $this->upload->data();
      return $data['file_name'];
   }

}
