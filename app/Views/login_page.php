<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container col-3 d-flex mt-5 pt-5">
        <div class="card rounded border d-flex">
            <div class="card-body">
                <form action="" method="POST">
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger text-center">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                    <?php } ?>
                    <div class=" mb-3 mt-4 fs-3 text-center ">
                        <label for="Log_In" class="form-login fw-bold">
                            Log In
                        </label>

                    </div>
                    <div class='input-group mb-3 '>
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" name="admin_username" class="form-control" id="inputUsername" placeholder="username">
                    </div>
                    <div class='input-group   '>
                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                            </svg></span>
                        <input type="password" name="admin_password" class="form-control" id="inputPassword" placeholder="password">

                    </div>
            </div>
            <div class="mb-3  text-center">
                <label for="register" class='registerpage fs-6'>
                    Dont have account? register here
                </label>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" name="login" class="btn 
                    btn-primary w-50" value="LOGIN" />
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>