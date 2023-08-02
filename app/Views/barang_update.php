<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        create barang
    </title>
</head>

<body>
    <?php if (!empty($errorMessages)) : ?>
        <div style="color: red;">
            <?php echo implode('<br>', $errorMessages); ?>
        </div>
    <?php endif; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>No Resi</td>
                <td>
                    <input value="<?php echo $data_barang['no_resi'] ?>" type="text" style="width:400px;" name="no_resi"></input>
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input value="<?php echo $data_barang['nm_barang'] ?>" type="text" style="width:400px;" name="nm_barang"></input>
                </td>
            </tr>
            <tr>
                <td>ID Penerima</td>
                <td>
                    <input value="<?php echo $data_barang['id_penerima'] ?>" type="text" style="width:400px;" name="id_penerima"></input>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input value="<?php echo $data_barang['status'] ?>" type="text" style="width:400px;" name="status"></input>
                </td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td>
                    <input value="<?php echo $data_barang['catatan'] ?>" type="text" style="width:400px;" name="catatan"></input>
                </td>
            </tr>
            <tr>
                <td>Foto Pertama</td>
                <td>
                    <img src="<?php echo base_url('img/' . $data_barang['foto1']) ?>" width="100">
                    <input type="file" style="width:400px;" name="foto1" id="foto1"></input>
                </td>
            </tr>
            <tr>
                <td>Foto Kedua</td>
                <td>
                    <img src="<?php echo base_url('img/' . $data_barang['foto2']) ?>" width="100">
                    <input type="file" style="width:400px;" name="foto2" id="foto2"></input>
                </td>
            </tr>
            <tr>
                <td>Foto Ketiga</td>
                <td>
                    <img src="<?php echo base_url('img/' . $data_barang['foto3']) ?>" width="100">
                    <input type="file" style="width:400px;" name="foto3" id="foto3"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="simpan" value="Simpan Data">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>