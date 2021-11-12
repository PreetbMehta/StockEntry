<?php
    include('conn.php');
    if(isset($_GET['sid']) && $_GET['sid']!="")
    {
        $sid=$_GET['sid'];
        $sql="SELECT * FROM `unitedstocks` where `unitedstocks`.id=$sid";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        // $suc_msg="Stock sold successfully";
    }
    else
    {
        echo "Stock id not found";
    }
?>
  <!-- Database updation php -->
  <?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
        // if(isset($_POST['SUBMIT']) && $_POST['SUBMIT']=="SUBMIT")
        {
             $insertSql="INSERT INTO `soldlist` (`id`, `Stock Name`, `Buy Date`, `Cost Price`, `Buyer Info`, `Buy Quantity`, `Sell Quantity`, `Sell Date`, `Sell Price`,`UpdatedBy`, `Status`) VALUES (NULL, '".$_POST['StockName']."', '".$_POST['BuyDate']."', '".$_POST['CostPrice']."','".$_POST['BuyerInfo']."', '".$_POST['BuyQuantity']."', '".$_POST['SellQuantity']."', '".$_POST['SellDate']."', '".$_POST['SellPrice']."','".$_SESSION['Username']."', '0')";
             $result = $conn->query($insertSql);
             
             header("location:CompletedOrders.php");
             
             // Update in portfolio table
                $BQ=$_POST["BuyQuantity"];
                $SQ=$_POST["SellQuantity"];
                if($SQ==$BQ)
                {
                    $sid=$_GET['sid'];
                    $delSql="DELETE FROM `unitedstocks` where `unitedstocks`.id=$sid";
                    $result = $conn->query($delSql);
                }
                else if($SQ<$BQ)
                {
                    $diffQ = $BQ-$SQ;
                    $sid=$_GET['sid'];
                    $upSql="UPDATE `unitedstocks` SET Quantity=$diffQ where `unitedstocks`.id=$sid";
                    $result= $conn->query($upSql);
                }

        }
        // else
        // {
        //     echo "Stock not Inserted in sold list";
        // }
       
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
      background:rgb(209, 224, 224);
    }
    #Sell-form{
        margin:15px 5px;
        padding:15px 15px;
        border: 2px solid black;
        border-radius:14px;
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
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Portfolio.php">Our Portfolio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="CompletedOrders.php">Completed Orders</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Data entry form -->
    <form class="row g-3" id="Sell-form" onsubmit="return validateForm()" method="POST">
        <div class="col-12">
          <label for="StockName" class="form-label">Stock Name</label>
          <input type="text" class="form-control" id="StockName" name="StockName" value="<?php echo $row['Stock Name']; ?>" readonly>
        </div>
        <div class="col-md-6">
            <label for="BuyDate" class="form-label">Buy Date</label>
            <input type="date" class="form-control" id="BuyDate" name="BuyDate" value="<?php echo $row['BuyDate']; ?>" readonly>
        </div>
        <div class="col-md-6">
            <label for="CostPrice" class="form-label">Cost Price</label>
            <input type="number" min="1" step="0.01" class="form-control" id="CostPrice" name="CostPrice" value="<?php echo $row['Price']; ?>" readonly>
        </div>
        <div class="col-6">
            <label for="BuyerInfo" class="form-label">Buyer Info</label>
            <input type="text" class="form-control" id="BuyerInfo" name="BuyerInfo" value="<?php echo $row['Buyer Info']; ?>" readonly>
        </div>
        <div class="col-md-3">
            <label for="Buy Quantity" class="form-label">Buy Quantity</label>
            <input type="number" min="1" class="form-control" id="Buy Quantity" name="BuyQuantity" value="<?php echo $row['Quantity']; ?>" readonly>
        </div>
        <div class="col-md-3">
            <label for="Sell Quantity" class="form-label">Sell Quantity</label>
            <input type="number" min="1" class="form-control" id="SellQuantity" name="SellQuantity" required>
        </div>
        <div class="col-md-6">
            <label for="SellDate" class="form-label">Sell Date</label>
            <input type="date" class="form-control" id="SellDate" name="SellDate" required>
        </div>
        <div class="col-md-6">
            <label for="SellPrice" class="form-label">Sell Price</label>
            <input type="number" min="0.01" step="0.01" class="form-control" id="SellPrice" name="SellPrice" required>
        </div>
        <!-- <div class="col-md-6">
            <label for="SellBrokerage" class="form-label">Sell Brokerage</label>
            <input type="text" class="form-control" id="SellBrokerage" name="SellBrokerage" value="0" readonly>
        </div> -->
        <!-- <div class="col-md-6">
            <label for="SellBrokerage" class="form-label">Buy Brokerage</label>
            <input type="text" class="form-control" id="BuyBrokerage" name="BuyBrokerage" value="<?php echo $row['Buy Brokerage']; ?>" readonly>
        </div> -->
        <div class="col-12">
            <button type="SUBMIT" class="btn btn-primary" id="SUBMIT" value="SUBMIT">Confirm Sell</button>
        </div>
        <!-- <?php
            // echo $_POST['StockName'];
            echo $_SERVER['REQUEST_METHOD'];
        ?> -->
    </form>

    <!-- JS Validation -->
        <script>
        function validateForm() {
            let x = document.forms["Sell-form"]["BuyQuantity"].value;
            let y = document.forms["Sell-form"]["SellQuantity"].value;
            promt(x && y);
            if (y>x) {
              alert("Sell Quantity can't be greater than Buy Quantity");
              return false;
            }
          }
        </script>
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