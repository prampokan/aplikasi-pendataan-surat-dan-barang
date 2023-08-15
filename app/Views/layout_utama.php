<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desnet | <?php echo $data['title'] ?></title>
    <meta charset="utf-8">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->

<body class=" hold-transition sidebar-mini layout-fixed">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Uncial+Antiqua&display=swap');
    </style>
    <div class="wrapper">
        <?php echo $this->include('admin_header') ?>
        <?php echo $this->renderSection('konten_utama') ?>
        <?php echo $this->include('admin_footer') ?>
    </div>
    <!-- ./wrapper -->

    <script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url('assets'); ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('assets'); ?>/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('assets'); ?>/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url('assets'); ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url('assets'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/pages/dashboard.js"></script>

</body>

</html>