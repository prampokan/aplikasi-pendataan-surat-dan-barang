<?php echo $this->extend('layout_utama') ?>

<?php echo $this->section('konten_utama') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Datas</a></li>
                        <li class="breadcrumb-item active">Data Barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <?php if (session()->has('success')) : ?>
            <div style="color: green;">
                <?php echo session('success'); ?>
            </div>
        <?php endif; ?>
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="/BarangController/barang_create" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>NO Resi</th>
                        <th>Nama Barang</th>
                        <th>ID Penerima</th>
                        <th>Status</th>
                        <th>Catatan</th>
                        <th>Foto Pertama</th>
                        <th>Foto Kedua</th>
                        <th>Foto Ketiga</th>
                        <th style="width:70px;">Aksi</th>
                    </tr>
                    <?php
                    foreach ($data['data_barang'] as $k => $v) {
                    ?>
                        <tr>
                            <td><?php echo $v['no_resi'] ?></td>
                            <td><?php echo $v['nm_barang'] ?></td>
                            <td><?php echo $v['id_penerima'] ?></td>
                            <td><?php echo $v['status'] ?></td>
                            <td><?php echo $v['catatan'] ?></td>
                            <td><img src="<?php echo base_url('img/' . $v['foto1']) ?>" width="100"></td>
                            <td><img src="<?php echo base_url('img/' . $v['foto2']) ?>" width="100"></td>
                            <td><img src="<?php echo base_url('img/' . $v['foto3']) ?>" width="100"></td>
                            <td>
                                <a href="barang_update/<?php echo $v['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a> |
                                <a href="barang_delete/<?php echo $v['id'] ?>"><i class="fa-solid fa-trash" style="color: red"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection() ?>