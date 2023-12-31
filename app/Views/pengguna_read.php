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
                        <h4 class="card-title mt-2">Data Pengguna</h4>
                        <div class="col-sm-auto ms-auto">
                            <div>
                                <a href="<?= base_url('pengguna_create'); ?>" type="button" class="btn btn-info add-btn">
                                    <i class="fa-solid fa-file-circle-plus"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="row g-4 mb-3">

                            </div>
                            <div class="table-responsive mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTablePengguna">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Ganti Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <?php
                                        foreach ($data['data_pengguna'] as $k => $v) {
                                        ?>
                                            <tr>
                                                <td><?php echo $v['name'] ?></td>
                                                <td><?php echo $v['username'] ?></td>
                                                <td><?php echo $v['email'] ?></td>
                                                <td>
                                                    <a type="button" class="btn btn-warning add-btn p-2" href="pengguna_password/<?php echo $v['id'] ?>">Ganti Password</a>
                                                </td>
                                                <td>
                                                    <a href="pengguna_update/<?php echo $v['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="pengguna_delete/<?php echo $v['id'] ?>"><i class="fa-solid fa-trash" style="color: red"></i></a>
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
        $('#customerTablePengguna').DataTable();
    });
</script>
<?php echo $this->endSection() ?>

<?php echo $this->endSection() ?>