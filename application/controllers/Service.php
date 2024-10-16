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
      $email = $this->input->post('email');
      $name = $this->input->post('name');
      // validasi email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $data['status'] = 'Error';
         $data['message'] = 'Invalid email address';
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
         return;
      }
      $existing_email = $this->Main_model->Get_Data(['email' => $email], 'newsletter');
      if ($existing_email) {
         $data['status'] = 'Error';
         $data['message'] = 'Email already subscribed';
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
         return;
      }

      $post_data = array(
         'email' => $email,
         'name'   => $name,
         'date_add' => date('Y-m-d'),
         'status' => '1',
      );
      $this->Main_model->Input_Data($post_data, 'newsletter');

      $subject = 'Welcome to Arena Bocil!';
      $message = 'Thank you for subscribing to Arena Bocil!';

      $send_email_status = $this->sendEmail($email, $name, $subject, $message, 'subscription');
      if ($send_email_status) {
         $data['status'] = 'Success';
         $data['message'] = 'Subscription successful and email sent!';
      } else {
         $data['status'] = 'Error';
         $data['message'] = 'Subscription successful, but failed to send email.';
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
   }
   // Fungsi untuk validasi voucher
   public function validate_voucher()
   {
      $voucherCode = $this->input->post('voucherCode');
      if (empty($voucherCode)) {
         echo json_encode(['valid' => true, 'discount' => 0]);
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
      $genrId = $this->generate_trxid(); // Generate trxid
      $ticketType = $this->input->post('ticketType');
      $mdatePrefix = ($ticketType === 'HT') ? 'HT' : 'DT';
      $mdate = $mdatePrefix . date('md');

      $post_data = $this->input->post();
      $post_data['trxid'] = $genrId;
      $post_data['sku'] = $this->generate_sku($mdate); //generate_sku
      $post_data['total'] = $this->input->post('total');
      $post_data['discount_price'] = $this->input->post('discount_price');
      $post_data['status'] = '1';
      unset($post_data['termsCheck']);
      $this->Main_model->Input_Data($post_data, 'ticket');
      $email = $this->input->post('email');

      $existing_email = $this->Main_model->Get_Data(['email' => $email], 'newsletter');
      if (!empty($email)) {
         if (!$existing_email) {
            $newsletter_data = [
               'email' => $email,
               'status' => $post_data['status'],
               'date_add' => date('Y-m-d')
            ];
            $this->Main_model->Input_Data($newsletter_data, 'newsletter');
         }
      }

      // send email
      $subject = 'Booking Confirmation - Transaction ID: ' .  $genrId . ' !';
      $name    = $this->input->post('name');
      $message['trxid'] = $genrId;
      $message['ticketType'] = $ticketType;
      $message['sku'] = $post_data['sku'];
      $message['telp']    = $this->input->post('no_telp');
      $message['reserv_date']    = $this->input->post('reservation_date');
      $message['reserv_time']    = $this->input->post('reservation_time');
      $message['qty']    = $this->input->post('ticket_quantity');
      $message['voucher']    = $this->input->post('voucher');
      $message['total'] = $post_data['total'];
      $message['discount_price'] = $post_data['discount_price'];

      $send_email_status = $this->sendEmail($email, $name, $subject, $message, 'booking');
      if ($send_email_status) {
         $data['status'] = 'Success';
         $data['message'] = 'Subscription successful and email sent!';
      } else {
         $data['status'] = 'Error';
         $data['message'] = 'Subscription successful, but failed to send email.';
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
   }

   private function generate_trxid()
   {
      $mdate = "TRX" . date('md');
      $key = 'trxid';
      $ticketId = $this->Main_model->Max_data($mdate, $key, 'ticket')->row();
      if ($ticketId->trxid == NULL) {
         return $mdate . '001';
      } else {
         $genrId = $ticketId->trxid;
         return "TRX" . (intval(substr($genrId, 3, 10)) + 1);
      }
   }

   private function generate_sku($mdate)
   {
      $key = 'sku';
      $skuId = $this->Main_model->Max_data($mdate, $key, 'ticket')->row();
      if ($skuId->sku == NULL) {
         return $mdate . '001';
      } else {
         $nextSku = intval(substr($skuId->sku, -3)) + 1;
         return $mdate . str_pad($nextSku, 3, '0', STR_PAD_LEFT);
      }
   }

   public function sendEmail($to, $name, $subject, $message, $template)
   {
      $email_status = $this->Main_model->send_email($to, $name, $subject, $message, $template);
      return $email_status;
   }
}
