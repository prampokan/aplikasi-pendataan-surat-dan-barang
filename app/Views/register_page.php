<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     </head>

       <body>
    
    <div class="container col-4 mt-4 ">
        <div class="card rounded border d-flex">
            <div class="card-body">
                <form action="" method="POST">
                    
                    <div class=" mb-3 mt-4 fs-3 text-center ">
                        <label for="Log_In" class="form-login fw-bold">
                            Register Admin
                        </label>
                        
                    </div>
                    <div class='input-group mb-3 '>
                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-universal-access" viewBox="0 0 16 16">
  <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9V5.5Z"/>
</svg></span>
                        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username">
                    </div>
                    <div class='input-group mb-3 '>
                        <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg></span>
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class='input-group mb-3 '>
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="E-mail">
                    </div>
                    <div class='input-group mb-3  '>
                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg></span>
                        <input type="password" name="admin_password" class="form-control" id="inputPassword" placeholder="password">
</div>

                            <div class='input-group mb-3 '>
                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                    </svg></span>
                                <input type="password" name="admin_confirmpassword" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password">
                            </div>
                        <div class="mb-3 text-center">
                         <input type="submit" name="login" class="btn 
                            btn-primary w-50" value="Submit " />
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>