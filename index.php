<?php
  include('conn.php');
  if(isset($_POST['submit']) && $_POST['submit']=="SUBMIT")
  {
      $query="INSERT INTO `unitedstocks` (`id`,`BuyDate`, `Stock Name`, `Quantity`, `Price`,`Buy Brokerage`, `Buyer Info`, `Status`) VALUES (NULL,'".$_POST['Date']."', '".$_POST['StockName']."', '".$_POST['Quantity']."', '".$_POST['Price']."','".$_POST['BuyBrokerage']."', '".$_POST['BuyerInfo']."', '1')";
      $result = $conn->query($query);
      header("location:Portfolio.php");
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
  </head>
  <style>
    *{
      margin:0;
      padding:0;
    }
    body{
      /* background:url(images/bg1.jpeg) no-repeat center;
      height:100vh;
      background-size:cover; */
      background:rgb(209, 224, 224);
    }
    #data-entry-form{
      border: 2px solid black;
      border-radius:15px; 
      margin: 15px 15px;
      padding: 15px 15px;
    }
  </style>
  
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UnitedStocks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Portfolio.php">Our Portfolio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="CompletedOrders.php">Completed Orders</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Data entry form -->
    <form class="row g-3 needs-validation my-5 mx-5"  id="data-entry-form" method="post" novalidate>
  <div class="col-md-2">
    <label for="validationCustom01" class="form-label">Date</label>
    <input type="date" class="form-control" id="validationCustom01" name="Date"  required>
  </div>

  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="validationCustom02" name="Quantity" required>
  </div>

  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label" >Stock name</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="StockName" required>
    </div>
  </div>

  <div class="col-md-2">
    <label for="validationCustom02" class="form-label"  >Price</label>
    <input type="text" class="form-control" id="validationCustom02" name="Price" required>
  </div>

  <div class="col-md-2">
    <label for="validationCustom03" class="form-label"  >Buy Brokerage</label>
    <input type="text" class="form-control" id="validationCustom03" name="BuyBrokerage" required>
  </div>
  
  <div class="col-md-3">
    <label for="BuyerInfo" class="form-label">State</label>
    <select class="form-select form-control" id="BuyerInfo" name="BuyerInfo" required>
      <option selected disabled value="">Choose Buying account</option>
      <option>Jay Thakkar</option>
      <option>Bhavesh Mehta</option>
      <option>Maulik Kabirpanthi</option>
      <option>Vipul Chovatia</option>
    </select>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit" value="SUBMIT">Submit form</button>
  </div>
  </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>