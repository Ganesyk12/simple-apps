<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'Login Pages';
      $this->load->view('login/layout/header', $data);
      $this->load->view('login/V_login');
      $this->load->view('login/layout/footer');
   }

   public function login()
   {
      redirect('admin/dashboard');
   }
}
