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
      $this->load->view('public/service/V_service', $data);
      $this->load->view('public/service/service-js', $data);
      $this->load->view('base/footer');
   }

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

   // Fungsi untuk validasi voucher
   public function validate_voucher()
   {
      $voucherCode = $this->input->post('voucherCode');
      if (empty($voucherCode)) {
         echo json_encode(['valid' => true, 'discount' => 0]); // Tidak ada diskon
         return;
      }

      // validasi voucher
      $voucherData = $this->Main_model->get_voucher_discount($voucherCode);
      if ($voucherData['status'] !== null) {
         if ($voucherData['status'] === '1') {
            echo json_encode(['valid' => true, 'discount' => $voucherData['discount']]);
         } else if ($voucherData['status'] === '0') {
            echo json_encode(['valid' => false, 'message' => $voucherData['error']]);
         }
      } else {
         echo json_encode(['valid' => false]);
      }
   }

   public function booking()
   {
      $mdate = "TCK" . date('md');
      $key = 'sku';
      $max_sku = $this->Main_model->Max_data($mdate, $key, 'ticket')->row();
      if ($max_sku->sku == NULL) {
         $genr_sku = $mdate . '001'; // Jika tidak ada data sebelumnya, mulai dari 001
      } else {
         $genr_sku = $max_sku->sku;
         $genr_sku = "TCK" . (intval(substr($genr_sku, 3, 10)) + 1); // Tambah 1 dari SKU terakhir
      }
      // Mengambil data POST dari request
      $post_data = $this->input->post();
      $post_data['sku'] = $genr_sku;
      $this->Main_model->Input_Data($post_data, 'ticket');
      $data['status'] = 'Success';
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
   }
}
