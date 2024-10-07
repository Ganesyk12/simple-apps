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
      $data['title'] = 'Home';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('public/home/index');
      $this->load->view('base/footer');
   }
   // alternative route : home/terms
   public function terms()
   {
      $terms = new Terms();
      $terms->index();
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
      $this->load->view('public/terms/V_terms');
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
      $this->load->view('public/contact/V_contact');
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
      $this->load->view('public/about/V_about');
      $this->load->view('base/footer');
   }
}

class Event extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('Events_model', 'eventModel');
   }

   public function index()
   {
      $data['title'] = 'Events';
      $data['event'] = $this->eventModel->get_event();
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('public/news/V_news', $data);
      $this->load->view('public/news/news-js', $data);
      $this->load->view('base/footer');
   }
}
