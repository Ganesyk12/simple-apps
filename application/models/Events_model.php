<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events_model extends CI_Model
{

   public function __construct()
   {
      parent::__construct();
      $this->load->database();
   }

   function get_event()
   {
      $this->db->order_by('date_created', 'DESC');
      $data = $this->db->get('event')->result();
      return $data;
   }
}
