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
                                <h5 class="card-title">Tambah Data Barang</h5>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end">
                                <a href="<?= base_url('barang_read'); ?>" class="btn btn-sm btn-success">Kembali</a>
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
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nomor Resi</label>
                                        <input value="<?php echo $data_barang['no_resi'] ?>" type="text" class="form-control" name="no_resi"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nama Barang</label>
                                        <input value="<?php echo $data_barang['nm_barang'] ?>" type="text" class="form-control" name="nm_barang"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">ID Penerima</label>
                                        <input value="<?php echo $data_barang['id_penerima'] ?>" type="text" class="form-control"" name=" id_penerima"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Status</label>
                                        <input value="<?php echo $data_barang['status'] ?>" type="text" class="form-control" name="status"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Catatan</label>
                                        <input value="<?php echo $data_barang['catatan'] ?>" type="text" class="form-control" name="catatan"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Pertama</label>
                                        <div><img src="<?php echo base_url('img/' . $data_barang['foto1']) ?>" width="100" class="mb-3"></div>
                                        <input type="file" class="form-control" name="foto1" id="foto1"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Kedua</label>
                                        <div><img src="<?php echo base_url('img/' . $data_barang['foto2']) ?>" width="100" class="mb-3"></div>
                                        <input type="file" class="form-control" name="foto2" id="foto2"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Ketiga</label>
                                        <div><img src="<?php echo base_url('img/' . $data_barang['foto3']) ?>" width="100" class="mb-3"></div>
                                        <input type="file" class="form-control" name="foto3" id="foto3"></input>
                                    </div>
                                    <div class="card-footer">
                                        <button name="simpan" class="btn btn-primary">Simpan Data</button>
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