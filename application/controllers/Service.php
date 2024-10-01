<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->helper('date');
      $this->load->model('Main_model');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'Service';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('service/V_service', $data);
      $this->load->view('service/service-js', $data);
      $this->load->view('base/footer');
   }

   // function subsciption()
   // {
   //    $post_data = $this->input->post();
   //    if (filter_var($post_data['email'], FILTER_VALIDATE_EMAIL) === false) {
   //       $data['status'] = 'Error';
   //       $data['message'] = 'Invalid email address';
   //       $this->output->set_content_type('application/json')->set_output(json_encode($data));
   //       return;
   //    }
   //    $existing_email = $this->Main_model->Get_Data(['email' => $post_data['email']], 'newsletter');
   //    if ($existing_email) {
   //       $data['status'] = 'Error';
   //       $data['message'] = 'Email already subscribed';
   //       $this->output->set_content_type('application/json')->set_output(json_encode($data));
   //       return;
   //    }
   //    $post_data2 = array(
   //       'email' => $this->input->post('email'),
   //       'date_add' => date('Y-m-d'),
   //       'status' => '1',
   //    );
   //    $post_datamerge = array_merge($post_data, $post_data2);
   //    $this->Main_model->Input_Data($post_datamerge, 'newsletter');

   //    $data['status'] = 'Success';
   //    $this->output->set_content_type('application/json')->set_output(json_encode($data));
   // }
   public function subscription()
   {
      // Mengambil data POST dari request
      $email = $this->input->post('email');

      // Validasi email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $data['status'] = 'Error';
         $data['message'] = 'Invalid email address';
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
         return;
      }

      // Mengecek apakah email sudah ada di database
      $existing_email = $this->Main_model->Get_Data(['email' => $email], 'newsletter');
      if ($existing_email) {
         $data['status'] = 'Error';
         $data['message'] = 'Email already subscribed';
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
         return;
      }

      // Menyimpan email ke database
      $data_insert = array(
         'email' => $email,
         'date_add' => date('Y-m-d'),
         'status' => '1',
      );
      $this->Main_model->Input_Data($data_insert, 'newsletter');

      // Mengembalikan respons sukses
      $data['status'] = 'Success';
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
   }
}
