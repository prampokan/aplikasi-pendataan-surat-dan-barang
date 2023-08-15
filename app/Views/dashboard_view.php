<?php echo $this->extend('layout_utama') ?>

<?php echo $this->section('konten_utama') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class=" col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $data['total_barang'] ?></h3>
              <p>Data Barang</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="/BarangController/barang_read" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>100</h3>

              <p>Data Surat</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>Data Karyawan</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $data['total_pengguna'] ?></h3>

              <p>Data Pengguna</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-secret"></i>
            </div>
            <a href="/PenggunaController/pengguna_read" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="d-flex justify-content-between">
        <div class="card card-info card-outline">
          <div class="card-body">
            <h5>Top Data Barang</h5>
            <table class="table table-bordered">
              <tr>
                <th>Nama Barang</th>
                <th>ID Penerima</th>
                <th>Status Penerima</th>
                <th>Foto</th>
              </tr>
              <?php
              foreach ($data['data_barang'] as $k => $v) {
              ?>
                <tr>
                  <td><?php echo $v['nm_barang'] ?></td>
                  <td><?php echo $v['id_penerima'] ?></td>
                  <td><?php echo $v['status'] ?></td>
                  <td><img src="<?php echo base_url('img/' . $v['foto1']) ?>" width="50"></td>
                </tr>
              <?php
              }
              ?>
            </table>
          </div>
        </div>
        <div class="card card-info card-outline">
          <div class="card-body">
            <h5>Top Data Surat</h5>
            <table class="table table-bordered">
              <tr>
                <th>Nama Barang</th>
                <th>ID Penerima</th>
                <th>Status Penerima</th>
                <th>Foto</th>
              </tr>
              <?php
              foreach ($data['data_barang'] as $k => $v) {
              ?>
                <tr>
                  <td><?php echo $v['nm_barang'] ?></td>
                  <td><?php echo $v['id_penerima'] ?></td>
                  <td><?php echo $v['status'] ?></td>
                  <td><img src="<?php echo base_url('img/' . $v['foto1']) ?>" width="50"></td>
                </tr>
              <?php
              }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection() ?>