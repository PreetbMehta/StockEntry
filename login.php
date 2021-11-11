<?php
    include("conn.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/united.jpg" type="images/jpg">
    <title>UnitedStocks</title>
    <link rel="stylesheet" href="login.css">
    <!-- <style>
        *{
        margin:0;
        padding:0;
        }
        body{
        background:rgb(209, 224, 224);
        }
        .login-box{
            
        }
    </style> -->
  </head>
  <body>
        <div class="login-box">
        <div class="login-logo">
            <a href="index2.html"><b>United</b>Stocks</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?php if(isset($err_msg)&& $err_msg!=""){
                                    ?>
                                    <div class="text-danger">
                                    <?php echo $err_msg; ?>
                                    </div>
                                    <?php
                                }
                                ?>
            <form  method="post">
                <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="username"required>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password"required>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        Remember Me
                    </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block" name="login" value="login">Sign In</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
            <p class="mb-1">
                <a href="forgot-password.php">I forgot my password</a>
            </p>
            </div>
            <!-- /.login-card-body -->
        </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
  </body>
</html>