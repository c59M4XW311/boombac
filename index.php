<?php
include_once 'class/login.php';
    if (isset($_POST['go']))
    {
        $user = new Login();
        $log = $_POST['login'];
        $pass = $_POST['password'];
        $user -> Entry($log, $pass);
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/unicorn.svg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="style.scss">
    <title>Boombac</title>
</head>
<body>
    <div class="container auth">
        <div class="row">
            <div class="col-sm-3">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Логин</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" name="login">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" class="form-control" required id="exampleInputPassword1" name="password">
                    </div>
                    <input type="submit" value="Войти" name="go" class="btn">
                </form>
            </div>
        </div>
    </div>

</body>
</html>