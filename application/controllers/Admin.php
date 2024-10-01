<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function dashboard()
   {
      $data['title'] = 'Dahboard Admin';
      $this->load->view('base/admin/header', $data);
      $this->load->view('base/admin/navbar', $data);
      $this->load->view('base/admin/sidebar', $data);
      $this->load->view('admin/V_dashboard', $data);
      $this->load->view('base/admin/footer');
   }

   public function transaction()
   {
      $trx = new Transaction();
      $trx->index();
   }
}

class Transaction extends CI_Controller
{
   public function index()
   {
      $data['title'] = 'Menu Bills';
      $this->load->view('base/admin/header', $data);
      $this->load->view('base/admin/navbar', $data);
      $this->load->view('base/admin/sidebar', $data);
      $this->load->view('admin/V_bills', $data);
      $this->load->view('base/admin/footer');
   }
}
