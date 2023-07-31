<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        read barang
    </title>
</head>
<style>
    table,
    th,
    tr,
    td,
    td {
        border-collapse: collapse;
        border: 1px solid #333;
    }

    table {
        width: 80%;
    }
</style>

<body>
    <?php if (session()->has('success')) : ?>
        <div style="color: green;">
            <?php echo session('success'); ?>
        </div>
    <?php endif; ?>
    <table>
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
        <?php
        foreach ($data_barang as $k => $v) {
        ?>
            <tr>
                <td><?php echo $v['no_resi'] ?></td>
                <td><?php echo $v['nm_barang'] ?></td>
                <td><?php echo $v['id_penerima'] ?></td>
                <td><?php echo $v['status'] ?></td>
                <td><?php echo $v['catatan'] ?></td>
                <td><img src="<?php echo base_url('/public/img/' . $v['foto1']) ?>" width="100"></td>
                <td><img src="<?php echo base_url('/public/img/' . $v['foto2']) ?>" width="100"></td>
                <td><img src="<?php echo base_url('/public/img/' . $v['foto3']) ?>" width="100"></td>
                <td>
                    <a href="pengguna_update/<?php echo $v['id'] ?>">Update</a> |
                    <a href="pengguna_delete/<?php echo $v['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>