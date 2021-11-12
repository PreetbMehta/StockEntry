<?php
    include('conn.php');
    // echo $_SERVER['REQUEST_METHOD'];
    if(isset($_POST['SignIn']) && $_POST['SignIn']=="SignIn")
    {
        $sql = "SELECT * FROM signininfo WHERE Username='".$_POST['Username']."' and Password='".$_POST['Password']."' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            $_SESSION['Username']=$_POST['Username'];
            header("Location:index.php");die();
        }
        else
        {
            $_SESSION['message']="Incorrect Username or Password."; 
            header("location:signin.php");
            echo '<h3>Invalid username or password</h3>';
        }
    }
?>
<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/united.jpg" type="images/jpg">
    <title>UnitedStocks</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
        <img src="images/united.jpg" alt="logo">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UnitedStocks</a>
        </div>
    </nav>
    <section id="login-sec">
        <h1><b>Login</b></h1>
        <form id="Login-form" method="post">
            <input type="text" id="Username" name="Username" placeholder="Username" required>
            <!-- <input type="email" id="Email" name="Email" placeholder="Email Id" required> -->
            <input type="password" id="Password" name="Password" placeholder="Password" required>
            <button class="SignIn" name="SignIn" value="SignIn">Sign In</button>
        </form>
    </section>
</div>
</body>
</html>