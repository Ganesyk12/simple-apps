<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
      $this->load->model('Main_model');
   }

   public function index()
   {
      $data['title'] = 'Menu Bills';
      $this->load->view('base/admin/header', $data);
      $this->load->view('base/admin/navbar', $data);
      $this->load->view('base/admin/sidebar', $data);
      $this->load->view('admin/V_bills', $data);
      $this->load->view('admin/js/transaction-js', $data);
      $this->load->view('base/admin/footer');
   }

   public function view_data_where()
   {
      $tables = "ticket";
      $search = array('trxid', 'sku', 'ticketType', 'name', 'no_telp', 'email', 'reservation_date', 'reservation_time', 'ticket_quantity', 'total', 'voucher', 'discount_price', 'status', 'created_at');
      $where = array('created_at >' => '2020-01-01');
      $isWhere = null;
      header('Content-Type: application/json');
      echo $this->Main_model->get_tables_where($tables, $search, $where, $isWhere);
   }
}
