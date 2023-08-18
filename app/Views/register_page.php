<?php echo $this->extend('main_auth') ?>

<?php echo $this->section('konten') ?>

<div class="auth-page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mt-sm-5 mb-4 text-white-50">
                    <div>
                        <a href="#" class="d-inline-block auth-logo">
                            <img src="<?= base_url('assets/dist/img/logo_desnet.png') ?>" alt="" height="60">
                        </a>
                    </div>
                    <p class="mt-3 fs-15 fw-medium">Item and mail management website</p>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-4">

                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">Halaman Register</h5>
                        </div>

                        <!-- Alerts-->
                        <?php if (session()->has('success')) : ?>
                            <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                                <?= session('success') ?>
                            </div>
                        <?php elseif (session()->has('gagal')) : ?>
                            <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                                <?= session('gagal') ?>
                            </div>
                        <?php endif; ?>

                        <!-- End of Alerts -->
                        <div class="p-2 mt-4">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" required="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password-input">Password</label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" name="password" id="password-input" required="">
                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-success w-100" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="mt-4 text-center">
                    <p class="mb-0">Sudah punya akun ? <a href="/LoginController/login" class="fw-semibold text-primary text-decoration-underline"> Login! </a> </p>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

<?php echo $this->endSection() ?>