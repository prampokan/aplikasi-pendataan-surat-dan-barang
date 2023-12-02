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
                                <h5 class="card-title">Tambah Data surat</h5>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end">
                                <a href="/suratController/surat_read" class="btn btn-sm btn-success">Kembali</a>
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
                                        <label for="firstNameinput" class="form-label">Nomor Surat</label>
                                        <input value="<?php echo $data_surat['no_surat'] ?>" type="text" class="form-control" name="no_surat"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nama surat</label>
                                        <input value="<?php echo $data_surat['nm_surat'] ?>" type="text" class="form-control" name="nm_surat"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Pengirim</label>
                                        <input value="<?php echo $data_surat['pengirim'] ?>" type="text" class="form-control" name="id_penerima"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nama Penerima</label>
                                        <select class="form-select mb-3" name="id_penerima" aria-label="Default select example" id="suratKaryawanUpdate">
                                            <option value="<?php echo $data_surat['id_penerima'] ?>"><?php echo $data_surat['nama_penerima'] ?></option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Status</label>
                                        <select class="form-select mb-3" name="status" aria-label="Default select example">
                                            <option value="<?php echo $data_surat['status'] ?>">
                                                <?php if ($data_surat['status'] == 1) : ?>
                                                    <span class="badge text-bg-success">Belum Diterima</span>
                                                <?php elseif ($data_surat['status'] == 2) : ?>
                                                    <span class="badge text-bg-info">Sudah Diterima</span>
                                                <?php endif; ?>
                                            </option>
                                            <option value="1">Belum Diterima</option>
                                            <option value="2">Sudah Diterima</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Catatan</label>
                                        <textarea type="text" class="form-control" name="catatan"><?php echo $data_surat['catatan'] ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Pertama</label>
                                        <div class="mb-3">
                                            <?php if (!empty($data_surat['foto1'])) : ?>
                                                <img src="<?php echo base_url('img/' . $data_surat['foto1']) ?>" width="150">
                                            <?php endif; ?>
                                        </div>
                                        <input type="file" class="form-control" name="foto1" id="foto1"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Kedua</label>
                                        <div class="mb-3">
                                            <?php if (!empty($data_surat['foto2'])) : ?>
                                                <img src="<?php echo base_url('img/' . $data_surat['foto2']) ?>" width="150">
                                            <?php endif; ?>
                                        </div>
                                        <input type="file" class="form-control" name="foto2" id="foto2"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Ketiga</label>
                                        <div class="mb-3">
                                            <?php if (!empty($data_surat['foto3'])) : ?>
                                                <img src="<?php echo base_url('img/' . $data_surat['foto3']) ?>" width="150">
                                            <?php endif; ?>
                                        </div>
                                        <input type="file" class="form-control" name="foto3" id="foto3"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Ketiga</label>
                                        <div class="mb-3">
                                            <?php if (!empty($data_surat['foto4'])) : ?>
                                                <img src="<?php echo base_url('img/' . $data_surat['foto4']) ?>" width="150">
                                            <?php endif; ?>
                                        </div>
                                        <input type="file" class="form-control" name="foto4" id="foto4"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Foto Ketiga</label>
                                        <div class="mb-3">
                                            <?php if (!empty($data_surat['foto5'])) : ?>
                                                <img src="<?php echo base_url('img/' . $data_surat['foto5']) ?>" width="150">
                                            <?php endif; ?>
                                        </div>
                                        <input type="file" class="form-control" name="foto5" id="foto5"></input>
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
        $('#suratKaryawanUpdate').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Pilih Karyawan',
            ajax: {
                dataType: 'json',
                url: "<?= base_url('SuratController/selectDataKaryawan') ?>",
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