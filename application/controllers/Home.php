<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'Dashboard';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('dashboard/V_dashboard');
      $this->load->view('base/footer');
   }
}
