<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        read pengguna
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
        width: 50%;
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
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($data_pengguna as $k => $v) {
        ?>
            <tr>
                <td><?php echo $v['name'] ?></td>
                <td><?php echo $v['username'] ?></td>
                <td><?php echo $v['email'] ?></td>
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