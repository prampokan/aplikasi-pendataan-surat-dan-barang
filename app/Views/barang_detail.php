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
                                <h5 class="card-title">Detail Data Barang</h5>
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
                                        <label for="firstNameinput" class="form-label">Nama Barang</label>
                                        <input value="<?php echo esc($data_barang['nm_barang']) ?>" type="text" class="form-control" name="nm_barang" disabled></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nomor Resi</label>
                                        <input value="<?php echo $data_barang['no_resi'] ?>" type="text" class="form-control" name="no_resi" disabled></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">ID Penerima</label>
                                        <input value="<?php echo $data_barang['id_penerima'] ?>" type="text" class="form-control"" name=" id_penerima" disabled></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nama Penerima</label>
                                        <input value="<?php echo $data_barang['nama_penerima'] ?>" type="text" class="form-control"" name=" nama_penerima" disabled></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Email Penerima</label>
                                        <input value="<?php echo $data_barang['email_penerima'] ?>" type="text" class="form-control"" name=" email_penerima" disabled></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Status</label><br>
                                        <?php if ($data_barang['status'] == 1) : ?>
                                            <span class="badge text-bg-success">Belum Diterima</span>
                                        <?php elseif ($data_barang['status'] == 2) : ?>
                                            <span class="badge text-bg-info">Sudah Diterima</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Catatan</label>
                                        <textarea class="form-control" name="catatan" disabled><?php echo $data_barang['catatan'] ?></textarea>
                                    </div>
                                    <div class="d-flex">
                                        <div class="border p-2">
                                            <label for="firstNameinput" class="form-label">Foto Pertama</label>
                                            <div>
                                                <?php if (!empty($data_barang['foto1'])) : ?>
                                                    <img src="<?php echo base_url('img/' . $data_barang['foto1']) ?>" width="250">
                                                <?php else : ?>
                                                    <img src="<?= base_url('assets/dist/img/not-attached.png') ?>" alt="" width="250">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="mx-3 border p-2">
                                            <label for="firstNameinput" class="form-label">Foto Kedua</label>
                                            <div>
                                                <?php if (!empty($data_barang['foto2'])) : ?>
                                                    <img src="<?php echo base_url('img/' . $data_barang['foto2']) ?>" width="250">
                                                <?php else : ?>
                                                    <img src="<?= base_url('assets/dist/img/not-attached.png') ?>" alt="" width="250">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="border p-2">
                                            <label for="firstNameinput" class="form-label">Foto Ketiga</label>
                                            <div>
                                                <?php if (!empty($data_barang['foto3'])) : ?>
                                                    <img src="<?php echo base_url('img/' . $data_barang['foto3']) ?>" width="250">
                                                <?php else : ?>
                                                    <img src="<?= base_url('assets/dist/img/not-attached.png') ?>" alt="" width="250">
                                                <?php endif; ?>
                                            </div>
                                        </div>
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