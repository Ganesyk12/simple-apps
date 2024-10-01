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
   // alternative route : home/terms
   public function terms()
   {
      $terms = new Terms();
      $terms->index();
   }
   // home/programs
   public function programs()
   {
      $prog = new Programs();
      $prog->index();
   }
   // home/contacts
   public function contacts()
   {
      $contact = new Contact();
      $contact->index();
   }
   // home/blogs
   public function blogs()
   {
      $blogs = new Blogs();
      $blogs->index();
   }
   // home/events
   public function events()
   {
      $events = new Event();
      $events->index();
   }
}

class Terms extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'Terms';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('terms/V_terms');
      $this->load->view('base/footer');
   }
}

class Programs extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'Programs';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('program/V_program');
      $this->load->view('base/footer');
   }
}

class Contact extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'Contact';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('contact/V_contact');
      $this->load->view('base/footer');
   }
}

class Blogs extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'About Us';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('about/V_about');
      $this->load->view('base/footer');
   }
}

class Event extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'Events';
      $data['event'] = $this->get_event();
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('news/V_news', $data);
      $this->load->view('news/news-js', $data);
      $this->load->view('base/footer');
   }

   function get_event()
   {
      $this->db->order_by('date_created', 'DESC');
      $data = $this->db->get('event')->result();
      return $data;
   }
}
