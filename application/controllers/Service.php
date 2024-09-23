<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'Service';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('service/V_service');
      $this->load->view('base/footer');
   }
}
