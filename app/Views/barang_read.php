<?php echo $this->extend('layout_utama') ?>

<?php echo $this->section('konten_utama') ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <?php if (session()->has('success')) : ?>
                <div style="color: green;">
                    <?php echo session('success'); ?>
                </div>
            <?php endif; ?>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Data Pengguna</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="<?= base_url('barang_create'); ?>" type="button" class="btn btn-info add-btn">
                                            <i class="fa-solid fa-file-circle-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control search" placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th>NO Resi</th>
                                            <th>Nama Barang</th>
                                            <th>ID Penerima</th>
                                            <th>Status</th>
                                            <th>Catatan</th>
                                            <th>Foto Pertama</th>
                                            <th>Foto Kedua</th>
                                            <th>Foto Ketiga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <?php
                                        foreach ($data['data_barang'] as $k => $v) {
                                        ?>
                                            <tr>
                                                <td><?php echo $v['no_resi'] ?></td>
                                                <td><?php echo $v['nm_barang'] ?></td>
                                                <td><?php echo $v['id_penerima'] ?></td>
                                                <td><?php echo $v['status'] ?></td>
                                                <td><?php echo $v['catatan'] ?></td>
                                                <td><img src="<?php echo base_url('img/' . $v['foto1']) ?>" width="70"></td>
                                                <td><img src="<?php echo base_url('img/' . $v['foto2']) ?>" width="70"></td>
                                                <td><img src="<?php echo base_url('img/' . $v['foto3']) ?>" width="70"></td>
                                                <td>
                                                    <a href="#"><i class="fa-solid fa-bars text-success"></i></a>
                                                    <a href="barang_update/<?php echo $v['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="barang_delete/<?php echo $v['id'] ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <!-- <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                    </div>
                                </div> -->
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="javascrpit:void(0)">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="javascrpit:void(0)">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection() ?>