<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin | <?= $title ?></title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="shortcut icon" href="<?= base_url('assets') ?>/img/Logo.svg" type="image/x-icon">
   <!-- Plugins -->
   <link rel="stylesheet" href="<?= base_url('assets/adminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/adminLTE') ?>/plugins/sweetalert2/sweetalert2.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/adminLTE') ?>/plugins/toastr/toastr.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/adminLTE') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/adminLTE') ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/adminLTE') ?>/plugins/select2/css/select2.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/adminLTE') ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('assets/adminLTE') ?>/dist/css/adminlte.min.css">
   <style>
      .hr-text {
         position: relative;
         border: none;
         height: 1px;
         background: #000;
      }

      .hr-text::before {
         content: attr(data-content);
         position: absolute;
         top: -0.75em;
         left: 50%;
         transform: translateX(-50%);
         background: #fff;
         padding: 0 0.25em;
      }
   </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <!-- Plugins -->
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/chart.js/Chart.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/select2/js/select2.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/moment/moment.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
   <script src="<?= base_url('assets/adminLTE') ?>/dist/js/adminlte.min.js"></script>

   <div class="wrapper">