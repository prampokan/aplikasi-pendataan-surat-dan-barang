<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8">
    <title>Desnet | <?php echo ($data['title']) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/admin/images/favicon.ico') ?>">

    <!-- Layout config Js -->
    <script src="<?= base_url('assets/admin/js/layout.js') ?>"></script>
    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="<?= base_url('assets/admin/css/icons.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="<?= base_url('assets/admin/css/app.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- custom Css -->
    <link href="<?= base_url('assets/admin/css/custom.min.css') ?>" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <?php echo $this->renderSection('konten') ?>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Data Managemet | PT.Desnet Human Technology
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- Bootstrap Js -->
    <script src="<?= base_url('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Simplebar Js -->
    <script src="<?= base_url('assets/admin/libs/simplebar/simplebar.min.js') ?>"></script>
    <!-- Waves Js -->
    <script src="<?= base_url('assets/admin/libs/node-waves/waves.min.js') ?>"></script>
    <!-- Feather Icons Js -->
    <script src="<?= base_url('assets/admin/libs/feather-icons/feather.min.js') ?>"></script>
    <!-- Lord Icon Js -->
    <script src="<?= base_url('assets/admin/js/pages/plugins/lord-icon-2.1.0.js') ?>"></script>
    <!-- Plugins Js -->
    <script src="<?= base_url('assets/admin/js/plugins.js') ?>"></script>
    <!-- Particles Js -->
    <script src="<?= base_url('assets/admin/libs/particles.js/particles.js') ?>"></script>
    <!-- Particles App Js -->
    <script src="<?= base_url('assets/admin/js/pages/particles.app.js') ?>"></script>
    <!-- Password Addon Init -->
    <script src="<?= base_url('assets/admin/js/pages/password-addon.init.js') ?>"></script>


</body>

</html>