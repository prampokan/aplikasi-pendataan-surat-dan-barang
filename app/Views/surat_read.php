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
                        <h4 class="card-title mt-2">Data Surat</h4>
                        <div class="col-sm-auto ms-auto">
                            <div>
                                <a href="<?= base_url('surat_create'); ?>" type="button" class="btn btn-info add-btn">
                                    <i class="fa-solid fa-file-circle-plus"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="table-responsive mt-3 mb-1 ">
                                <table class="table align-middle table-nowrap m" id="customerTableSurat">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Nama Surat</th>
                                            <th>Tujuan</th>
                                            <th>Pengirim</th>
                                            <th>Tanggal Input</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <?php
                                        foreach ($data['data_surat'] as $k => $v) {
                                            $modalId = "modalFoto_" . $v['id'];
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php if (!empty($v['foto1'])) : ?>
                                                        <img src="<?php echo base_url('img/' . $v['foto1']) ?>" width="70" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
                                                    <?php else : ?>
                                                        <img src="<?= base_url('assets/dist/img/not-attached.png') ?>" alt="" width="70">
                                                    <?php endif; ?>
                                                    <?php echo $v['nm_surat'] ?>
                                                </td>
                                                <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="<?php echo $modalId; ?>" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-capitalize" id="<?php echo $modalId; ?>"><?php echo $v['nm_surat'] ?></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Gambar yang lebih besar -->
                                                                <img src="<?php echo base_url('img/' . $v['foto1']) ?>" class="img-fluid" style="max-width: 100%; max-height: 400px;" alt="Foto Pertama">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <td><?php echo $v['nama_penerima'] ?></td>
                                                <td><?php echo $v['pengirim'] ?></td>
                                                <td><?php echo date("d F Y", strtotime($v['waktu'])) ?></td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal<?= $v['id']; ?>">
                                                        <?php if ($v['status'] == 1) : ?>
                                                            <span class="badge text-bg-success">Belum Diterima</span>
                                                        <?php elseif ($v['status'] == 2) : ?>
                                                            <span class="badge text-bg-info">Sudah Diterima</span>
                                                        <?php endif; ?>
                                                    </a>
                                                </td>
                                                <div class="modal fade" id="myModal<?= $v['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?= $v['id']; ?>" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myModalLabel<?= $v['id']; ?>">Ubah Status Surat</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('surat_status/' . $v['id']); ?>" method="POST" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id" value="<?= $v['id']; ?>">
                                                                    <div class="mb-3">
                                                                        <label for="statusInput<?= $v['id']; ?>" class="form-label"><?php echo $v['nm_surat'] ?></label>
                                                                        <select class="form-select mb-3" name="status" id="statusInput<?= $v['id']; ?>" aria-label="Default select example">
                                                                            <option value="1" <?php if ($v['status'] == 1) echo 'selected'; ?>>Belum Diterima</option>
                                                                            <option value="2" <?php if ($v['status'] == 2) echo 'selected'; ?>>Sudah Diterima</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <td>
                                                    <a href="surat_detail/<?php echo $v['id'] ?>"><i class="fa-solid fa-circle-info"></i></a>
                                                    <a href="surat_update/<?php echo $v['id'] ?>"><i class="fa-solid fa-pen-to-square mx-2"></i></a>
                                                    <a href="surat_delete/<?php echo $v['id'] ?>"><i class="fa-solid fa-trash text-danger"></i></a>
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
                                    <a class="page-item pagination-prev disabled" href="javascrpit:void(0)">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="javascrpit:void(0)">
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
        $('#customerTableSurat').DataTable();
    });
</script>
<?php echo $this->endSection() ?>

<?php echo $this->endSection() ?>