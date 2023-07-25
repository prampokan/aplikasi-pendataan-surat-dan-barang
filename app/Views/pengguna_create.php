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
                <td>Nama</td>
                <td>
                    <input type="text" style="width:400px;" name="name"></input>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" style="width:400px;" name="username"></input>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" style="width:400px;" name="email"></input>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" style="width:400px;" name="password"></input>
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