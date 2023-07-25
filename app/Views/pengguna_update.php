<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        create pengguna
    </title>
</head>

<body>
    <?php if (!empty($errorMessages)) : ?>
        <div style="color: red;">
            <?php echo implode('<br>', $errorMessages); ?>
        </div>
    <?php endif; ?>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input value="<?php echo $data_pengguna['name'] ?>" type="text" style="width:400px;" name="name">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input value="<?php echo $data_pengguna['username'] ?>" style="width:400px;" name="username">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input value="<?php echo $data_pengguna['email'] ?>" style="width:400px;" name="email">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="Simpan Data">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>