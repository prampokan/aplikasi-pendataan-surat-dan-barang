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
                                        <input type="text" class="form-control" name="no_resi"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" name="nm_barang"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nama Penerima</label>
                                        <select class="form-select mb-3" name="id_penerima" aria-label="Default select example" id="barangKaryawan"></select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Status</label>
                                        <select class="form-select mb-3" name="status" aria-label="Default select example">
                                            <option value="1">Belum Diterima</option>
                                            <option value="2">Sudah Diterima</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Catatan</label>
                                        <textarea type="text" class="form-control" name="catatan"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Pertama</label>
                                        <input type="file" class="form-control" name="foto1" id="foto1"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Kedua</label>
                                        <input type="file" class="form-control" name="foto2" id="foto2"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Ketiga</label>
                                        <input type="file" class="form-control" name="foto3" id="foto3"></input>
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
<?php echo $this->section('select2') ?>
<script>
    function selectDataKaryawan() {
        $('#barangKaryawan').select2({
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