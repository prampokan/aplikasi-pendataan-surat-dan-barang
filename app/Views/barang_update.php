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
                                        <label for="firstNameinput" class="form-label">Nama Penerima</label>
                                        <select class="form-select mb-3" name="id_penerima" aria-label="Default select example" id="barangKaryawanUpdate">
                                            <option value="<?php echo $data_barang['id_penerima'] ?>"><?php echo $data_barang['nama_penerima'] ?></option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Status</label>
                                        <select class="form-select mb-3" name="status" aria-label="Default select example">
                                            <option value="<?php echo $data_barang['status'] ?>">
                                                <?php if ($data_barang['status'] == 1) : ?>
                                                    Belum Diterima
                                                <?php elseif ($data_barang['status'] == 2) : ?>
                                                    Sudah Diterima
                                                <?php endif; ?>
                                            </option>
                                            <?php if ($data_barang['status'] == 1) : ?>
                                                <option value="2">Sudah Diterima</option>
                                            <?php endif; ?>
                                            <?php if ($data_barang['status'] == 2) : ?>
                                                <option value="1">Belum Diterima</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Catatan</label>
                                        <textarea class="form-control" name="catatan"><?php echo $data_barang['catatan'] ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Pertama</label>
                                        <div class="mb-3">
                                            <?php if (!empty($data_barang['foto1'])) : ?>
                                                <img src="<?php echo base_url('img/' . $data_barang['foto1']) ?>" width="150">
                                            <?php endif; ?>
                                        </div>
                                        <input type="file" class="form-control" name="foto1" id="foto1"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Kedua</label>
                                        <div class="mb-3">
                                            <?php if (!empty($data_barang['foto2'])) : ?>
                                                <img src="<?php echo base_url('img/' . $data_barang['foto2']) ?>" width="150">
                                            <?php endif; ?>
                                        </div>
                                        <input type="file" class="form-control" name="foto2" id="foto2"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Ketiga</label>
                                        <div class="mb-3">
                                            <?php if (!empty($data_barang['foto3'])) : ?>
                                                <img src="<?php echo base_url('img/' . $data_barang['foto3']) ?>" width="150">
                                            <?php endif; ?>
                                        </div>
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

<?php echo $this->section('select2') ?>
<script>
    function selectDataKaryawan() {
        $('#barangKaryawanUpdate').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Pilih Karyawan',
            ajax: {
                dataType: 'json',
                url: "<?= base_url('BarangController/selectDataKaryawan') ?>",
                delay: 500,
                data: function(params) {
                    return {
                        search: params.term
                    }
                },
                processResults: function(data, page) {
                    return {
                        results: data
                    }
                }
            }
        });
    }
    $(document).ready(function() {
        selectDataKaryawan()
    });
</script>
<?php echo $this->endSection() ?>
<?php echo $this->endSection() ?>