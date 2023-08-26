<?php echo $this->extend('layout_utama') ?>

<?php echo $this->section('konten_utama') ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">Update Data Karyawan</h5>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end">
                                <a href="/KaryawanController/karyawan_read" class="btn btn-sm btn-success">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($errorMessages)) : ?>
                        <div style="color: red;">
                            <?php echo implode('<br>', $errorMessages); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <div class="live-preview">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Username</label>
                                        <input value="<?php echo $data_karyawan['username'] ?>" class="form-control" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Email</label>
                                        <input value="<?php echo $data_karyawan['email'] ?>" class="form-control" name="email">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo $this->endSection() ?>