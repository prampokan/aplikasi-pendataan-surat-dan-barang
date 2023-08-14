<?php echo $this->extend('layout_utama') ?>

<?php echo $this->section('konten_utama') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/BarangController/barang_read">Data Barang</a></li>
                        <li class="breadcrumb-item active">Tambah Data Barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="card card-info card-outline">
            <?php if (!empty($errorMessages)) : ?>
                <div style="color: red;">
                    <?php echo implode('<br>', $errorMessages); ?>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nomor Resi</label>
                        <input value="<?php echo $data_barang['no_resi'] ?>" type="text" class="form-control" name="no_resi"></input>
                    </div>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input value="<?php echo $data_barang['nm_barang'] ?>" type="text" class="form-control" name="nm_barang"></input>
                    </div>

                    <div class="form-group">
                        <label>ID Penerima</label>
                        <input value="<?php echo $data_barang['id_penerima'] ?>" type="text" class="form-control"" name=" id_penerima"></input>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input value="<?php echo $data_barang['status'] ?>" type="text" class="form-control" name="status"></input>
                    </div>

                    <div class="form-group">
                        <label>Catatan</label>
                        <input value="<?php echo $data_barang['catatan'] ?>" type="text" class="form-control" name="catatan"></input>
                    </div>

                    <div class="form-group">
                        <label>Foto Pertama</label>
                        <img src="<?php echo base_url('img/' . $data_barang['foto1']) ?>" width="100">
                        <input type="file" class="form-control" name="foto1" id="foto1"></input>
                    </div>

                    <div class="form-group">
                        <label>Foto Kedua</label>
                        <img src="<?php echo base_url('img/' . $data_barang['foto2']) ?>" width="100">
                        <input type="file" class="form-control" name="foto2" id="foto2"></input>
                    </div>

                    <div class="form-group">
                        <label>Foto Ketiga</label>
                        <img src="<?php echo base_url('img/' . $data_barang['foto3']) ?>" width="100">
                        <input type="file" class="form-control" name="foto3" id="foto3"></input>
                    </div>

                    <div class="form-group">
                        <button name="simpan" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection() ?>