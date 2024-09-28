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

   public function event()
   {
      $event = new Events();
      $event->index();
   }

   public function ticket()
   {
      $ticket = new Tickets();
      $ticket->index();
   }
}

class Events extends CI_Controller
{
   public function index()
   {
      $data['title'] = 'Event';
      $this->load->view('base/admin/header', $data);
      $this->load->view('base/admin/navbar', $data);
      $this->load->view('base/admin/sidebar', $data);
      $this->load->view('admin/V_event', $data);
      $this->load->view('base/admin/footer');
   }
}

class Tickets extends CI_Controller
{
   public function index()
   {
      $data['title'] = 'Ticket & Promo';
      $this->load->view('base/admin/header', $data);
      $this->load->view('base/admin/navbar', $data);
      $this->load->view('base/admin/sidebar', $data);
      $this->load->view('admin/V_ticket', $data);
      $this->load->view('base/admin/footer');
   }
}
