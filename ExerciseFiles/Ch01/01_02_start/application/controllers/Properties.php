<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Properties extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data['user_name'] = 'Bernard';
        $data['status_group'] = ['All', 'Available', 'Unavailable'];

        $this->load->view('layouts/header');
        $this->load->vi ew('layouts/foundation_nav');
        $this->load->view('properties/index', $data);
        $this->load->view('layouts/footer');
    }
}
