<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper(array('url', 'date', 'file'));
      $this->load->database();
      $this->load->model('Main_model');
   }

   public function index()
   {
      $data['title'] = 'Event';
      $this->load->view('base/admin/header', $data);
      $this->load->view('base/admin/navbar', $data);
      $this->load->view('base/admin/sidebar', $data);
      $this->load->view('admin/V_event', $data);
      $this->load->view('admin/js/event-js', $data);
      $this->load->view('base/admin/footer');
   }

   public function view_data_where()
   {
      $tables = "event";
      $search = array('id', 'sku', 'title', 'content', 't_c', 'event_start', 'event_end', 'img_url', 'status');
      $where = array('date_created >' => '2020-01-01');
      $isWhere = null;
      header('Content-Type: application/json');
      echo $this->Main_model->get_tables_where($tables, $search, $where, $isWhere);
   }

   public function add_event()
   {
      $mdate = "EVT" . date('md');
      $key = 'sku';
      $max_sku = $this->Main_model->Max_data($mdate, $key, 'event')->row();
      if ($max_sku->sku == NULL) {
         $generated_sku = $mdate . "001"; // Jika tidak ada data sebelumnya, mulai dari 001
      } else {
         $generated_sku = $max_sku->sku;
         $generated_sku = "EVT" . (intval(substr($generated_sku, 3, 10)) + 1); // Tambah 1 dari SKU terakhir
      }
      $post_data2 = array(
         'sku' => $generated_sku,
         'date_created' => date('Y-m-d'),
         'event_start' => $this->input->post('event_start'),
         'event_end' => $this->input->post('event_end'),
      );
      $post_data = $this->input->post();
      // ********************* Upload Gambar *********************
      $sketch = isset($_FILES['img_url']) ? $_FILES['img_url']['name'] : null;
      if (!empty($sketch)) {
         $this->upload_file_sketch('img_url', $generated_sku, 'event');
         $post_data['img_url'] = $generated_sku . '.' . pathinfo($_FILES['img_url']['name'], PATHINFO_EXTENSION);
      } else {
         $post_data['img_url'] = null;
      }
      $post_datamerge = array_merge($post_data, $post_data2);
      // ********************* Simpan data ke database *********************
      $this->Main_model->Input_Data($post_datamerge, 'event');
      $data['status'] = 'Success';
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
   }

   function upload_file_sketch($filename, $hdrid, $table)
   {
      if (!empty($_FILES[$filename]['name'])) {
         $config['upload_path'] = './assets/uploads/';
         $config['allowed_types'] = 'jpg|png|jpeg|tiff|gif';
         $config['file_ext_tolower'] = TRUE;
         $config['overwrite'] = True;
         $config['max_size']  = '1000000';    // 1000000 KB ≈ 976.56 MB 
         $config['file_name'] = $hdrid;

         $this->load->library('upload', $config);
         $this->upload->initialize($config);

         if (!$this->upload->do_upload($filename)) {
            $msg = $this->upload->display_errors();
         } else {
            $new_filename = $hdrid . '.' . pathinfo($filename, PATHINFO_EXTENSION);
            $data_update = array($filename => $new_filename);
            $where = array('sku' => $hdrid);
            $this->Main_model->Update_Data($where, $data_update, $table);
         }
      }
   }

   function ajax_delete()
   {
      $hdrid = $this->input->post('id');
      $berita = $this->db->get_where('event', array('id' => $hdrid))->row();
      if (is_object($berita)) {
         $photo_path = 'assets/uploads/';
         $filePaths = [
            $photo_path . $berita->img_url
         ];

         foreach ($filePaths as $filePath) {
            if (!empty($filePath) && file_exists($filePath)) {
               chmod($filePath, 0775);
               unlink($filePath);
            }
         }
      }
      $this->Main_model->Delete_Data(array('id' => $hdrid), 'event');
      $data['status'] = "Success!";
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
   }
}
