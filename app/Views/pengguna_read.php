<?php echo $this->extend('layout_utama') ?>

<?php echo $this->section('konten_utama') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pengguna</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Datas</a></li>
                        <li class="breadcrumb-item active">Data Pengguna</li>
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
                    <a href="/PenggunaController/pengguna_create" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    foreach ($data['data_pengguna'] as $k => $v) {
                    ?>
                        <tr>
                            <td><?php echo $v['name'] ?></td>
                            <td><?php echo $v['username'] ?></td>
                            <td><?php echo $v['email'] ?></td>
                            <td>
                                <a href="pengguna_update/<?php echo $v['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a> |
                                <a href="pengguna_delete/<?php echo $v['id'] ?>"><i class="fa-solid fa-trash" style="color: red"></i></a>
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