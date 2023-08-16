<?php echo $this->extend('layout_utama') ?>

<?php echo $this->section('konten_utama') ?>


<!-- Content Wrapper. Contains page content -->
<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="h-100">
          <div class="row mb-3 pb-1">
            <div class="col-12">
              <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                <div class="flex-grow-1">
                  <h4 class="fs-16 mb-1">Halo, Admin Desnet!</h4>
                  <p class="text-muted mb-0">Here's what's happening with your store today.</p>
                </div>

              </div><!-- end card header -->
            </div>
            <!--end col-->
          </div>
          <!--end row-->

          <div class="row">
            <div class="col-xl-3 col-md-6">
              <!-- card -->
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                      <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Data Barang</p>
                    </div>
                    <!-- <div class="flex-shrink-0">
                      <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                      </h5>
                    </div> -->
                  </div>
                  <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                      <h4 class="fs-22 fw-semibold ff-secondary mb-4"><?php echo $data['total_barang'] ?></h4>
                      <a href="/BarangController/barang_read" class="text-decoration-underline">Lihat semua data</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-primary rounded fs-3">
                        <i class="fa-solid fa-box-open text-primary"></i>
                      </span>
                    </div>
                  </div>
                </div><!-- end card body -->
              </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
              <!-- card -->
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                      <p class="text-uppercase fw-medium text-muted text-truncate mb-0">TOTAL DATA SURAT</p>
                    </div>
                    <!-- <div class="flex-shrink-0">
                      <h5 class="text-danger fs-14 mb-0">
                        <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %
                      </h5>
                    </div> -->
                  </div>
                  <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                      <h4 class="fs-22 fw-semibold ff-secondary mb-4">123</h4>
                      <a href="#" class="text-decoration-underline">Lihat semua data</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-warning rounded fs-3">
                        <i class="fa-solid fa-envelope-open-text text-warning"></i>
                      </span>
                    </div>
                  </div>
                </div><!-- end card body -->
              </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
              <!-- card -->
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                      <p class="text-uppercase fw-medium text-muted text-truncate mb-0">TOTAL DATA PENGGUNA</p>
                    </div>
                    <!-- <div class="flex-shrink-0">
                      <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                      </h5>
                    </div> -->
                  </div>
                  <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                      <h4 class="fs-22 fw-semibold ff-secondary mb-4"><?php echo $data['total_pengguna'] ?></h4>
                      <a href="/PenggunaController/pengguna_read" class="text-decoration-underline">Lihat semua data</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-success rounded fs-3">
                        <i class="fa-solid fa-user text-success"></i>
                      </span>
                    </div>
                  </div>
                </div><!-- end card body -->
              </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
              <!-- card -->
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                      <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> total data karyawan</p>
                    </div>
                    <!-- <div class="flex-shrink-0">
                      <h5 class="text-muted fs-14 mb-0">
                        +0.00 %
                      </h5>
                    </div> -->
                  </div>
                  <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                      <h4 class="fs-22 fw-semibold ff-secondary mb-4">321</h4>
                      <a href="#" class="text-decoration-underline">Lihat semua data</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-info rounded fs-3">
                        <i class="fa-solid fa-users text-info"></i>
                      </span>
                    </div>
                  </div>
                </div><!-- end card body -->
              </div><!-- end card -->
            </div><!-- end col -->
          </div> <!-- end row-->



          <div class="row">
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Top Data Barang</h4>
                  <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                      <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fw-semibold text-uppercase fs-12">Sort by:
                        </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Today</a>
                        <a class="dropdown-item" href="#">Yesterday</a>
                        <a class="dropdown-item" href="#">Last 7 Days</a>
                        <a class="dropdown-item" href="#">Last 30 Days</a>
                        <a class="dropdown-item" href="#">This Month</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                      </div>
                    </div>
                  </div>
                </div><!-- end card header -->

                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table table-bordered">
                      <thead class="table-light">
                        <tr>
                          <th>Barang</th>
                          <th>ID Penerima</th>
                          <th>Status Penerima</th>
                        </tr>
                      </thead>
                      <?php
                      foreach ($data['data_barang'] as $k => $v) {
                      ?>
                        <tr>
                          <td><img src="<?php echo base_url('img/' . $v['foto1']) ?>" width="50">
                            <?php echo $v['nm_barang'] ?></td>
                          <td><?php echo $v['id_penerima'] ?></td>
                          <td><?php echo $v['status'] ?></td>
                        </tr>
                      <?php
                      }
                      ?>
                    </table>
                  </div>

                  <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                    <div class="col-sm">
                      <div class="text-muted">
                        Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                      </div>
                    </div>
                    <div class="col-sm-auto  mt-3 mt-sm-0">
                      <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                        <li class="page-item disabled">
                          <a href="#" class="page-link">←</a>
                        </li>
                        <li class="page-item">
                          <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                          <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                          <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                          <a href="#" class="page-link">→</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-xl-6">
              <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Top Data Surat</h4>
                  <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                      <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Download Report</a>
                        <a class="dropdown-item" href="#">Export</a>
                        <a class="dropdown-item" href="#">Import</a>
                      </div>
                    </div>
                  </div>
                </div><!-- end card header -->

                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table table-bordered">
                      <thead class="table-light">
                        <tr>
                          <th>Barang</th>
                          <th>ID Penerima</th>
                          <th>Status Penerima</th>
                        </tr>
                      </thead>
                      <?php
                      foreach ($data['data_barang'] as $k => $v) {
                      ?>
                        <tr>
                          <td><img src="<?php echo base_url('img/' . $v['foto1']) ?>" width="50">
                            <?php echo $v['nm_barang'] ?></td>
                          <td><?php echo $v['id_penerima'] ?></td>
                          <td><?php echo $v['status'] ?></td>
                        </tr>
                      <?php
                      }
                      ?>
                    </table>
                  </div>

                  <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                    <div class="col-sm">
                      <div class="text-muted">
                        Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                      </div>
                    </div>
                    <div class="col-sm-auto  mt-3 mt-sm-0">
                      <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                        <li class="page-item disabled">
                          <a href="#" class="page-link">←</a>
                        </li>
                        <li class="page-item">
                          <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                          <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                          <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                          <a href="#" class="page-link">→</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- .card-body-->
              </div> <!-- .card-->
            </div> <!-- .col-->
          </div> <!-- end row-->



        </div> <!-- end .h-100-->

      </div> <!-- end col -->

    </div>

  </div>
  <!-- container-fluid -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection() ?>