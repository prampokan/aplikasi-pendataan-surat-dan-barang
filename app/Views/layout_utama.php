<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Multipurpose Admin & Dashboard Template">
    <meta name="author" content="Themesbrand">
    <title>Desnet | <?php echo ($data['title']) ?></title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/dist/img/logo_desnet2.webp') ?>">
    <!-- jsvectormap css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/libs/jsvectormap/css/jsvectormap.min.css') ?>">
    <!-- Sweet Alert css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/libs/sweetalert2/sweetalert2.min.css') ?>">
    <!-- Swiper slider css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/libs/swiper/swiper-bundle.min.css') ?>">
    <!-- Layout config Js -->
    <script src="<?= base_url('assets/admin/js/layout.js') ?>"></script>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>">
    <!-- Icons Css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/icons.min.css') ?>">
    <!-- App Css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/app.min.css') ?>">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/custom.min.css') ?>">
    <!-- Dropzone css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/libs/dropzone/dropzone.css') ?>">
    <!-- Filepond css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/libs/filepond/filepond.min.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php echo $this->include('header') ?>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <?php echo $this->include('sidebar') ?>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <?php echo $this->renderSection('konten_utama') ?>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <?= date('Y') ?> Data Management | PT. Des Teknologi Informasi
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class=' mdi mdi-spin mdi-cog-outline fs-22'></i>
    </div>
    </div> -->
    <!-- JAVASCRIPT -->

    <script src="<?= base_url('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/node-waves/waves.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/feather-icons/feather.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/pages/plugins/lord-icon-2.1.0.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/plugins.js') ?>"></script>
    <script src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <!-- prismjs plugin -->
    <script src="<?= base_url('assets/admin/libs/prismjs/prism.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/list.js/list.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/list.pagination.js/list.pagination.min.js') ?>"></script>

    <!-- listjs init -->
    <script src="<?= base_url('assets/admin/js/pages/listjs.init.js') ?>"></script>

    <!-- Sweet Alerts js -->
    <script src="<?= base_url('assets/admin/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

    <!-- apexcharts -->
    <script src="<?= base_url('assets/admin/libs/apexcharts/apexcharts.min.js') ?>"></script>

    <!-- Vector map-->
    <script src="<?= base_url('assets/admin/libs/jsvectormap/js/jsvectormap.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/jsvectormap/maps/world-merc.js') ?>"></script>

    <!-- Swiper slider js-->
    <script src="<?= base_url('assets/admin/libs/swiper/swiper-bundle.min.js') ?>"></script>

    <!-- Dashboard init -->
    <script src="<?= base_url('assets/admin/js/pages/dashboard-ecommerce.init.js') ?>"></script>

    <!-- dropzone min -->
    <script src="<?= base_url('assets/admin/libs/dropzone/dropzone-min.js') ?>"></script>

    <!-- filepond js -->
    <script src="<?= base_url('assets/admin/libs/filepond/filepond.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') ?>"></script>

    <script src="<?= base_url('assets/admin/js/pages/form-file-upload.init.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url('assets/admin/js/app.js') ?>"></script>

    <?php echo $this->renderSection('script_table') ?>
    <?php echo $this->renderSection('select2') ?>
</body>

</html>