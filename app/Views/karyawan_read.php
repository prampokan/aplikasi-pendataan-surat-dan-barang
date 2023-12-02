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
                    <div class="card-header d-flex">
                        <h4 class="card-title mt-2">Data Karyawan</h4>
                        <div class="col-sm-auto ms-auto">
                            <div>
                                <a href="<?= base_url('karyawan_create'); ?>" type="button" class="btn btn-info add-btn">
                                    <i class="fa-solid fa-file-circle-plus"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="table-responsive mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTableKaryawan">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <?php
                                        foreach ($data['data_karyawan'] as $k => $v) {
                                        ?>
                                            <tr>
                                                <td><?php echo $v['id'] ?></td>
                                                <td><?php echo $v['username'] ?></td>
                                                <td><?php echo $v['email'] ?></td>
                                                <td>
                                                    <a href="karyawan_update/<?php echo $v['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="karyawan_delete/<?php echo $v['id'] ?>"><i class="fa-solid fa-trash" style="color: red"></i></a>
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
                            <!-- <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->section('script_table') ?>
<script>
    $(document).ready(function() {
        $('#customerTableKaryawan').DataTable();
    });
</script>
<?php echo $this->endSection() ?>

<?php echo $this->endSection() ?>