<?php
  include('conn.php');
  // del the record added bymistake
  if(isset($_GET['did']) && $_GET['did']!="")
  {
    $sql="DELETE FROM `soldlist` where id=".$_GET['did'];
    $result = $conn->query($sql);
    $suc_msg="record deleted successfully";
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- DataTable css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">

    <!-- DataTable js -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
      $('#MyTable').DataTable();
      } );
    </script>

    <link rel="shortcut icon" href="images/united.jpg" type="images/jpg"><!--logo.-->
    <title>United Stocks</title>
  </head>
  
  <style>
    body{
      background:rgb(209, 224, 224);
    }
    #MyTable_wrapper{
      padding: 23px 23px 23px 23px;
      margin: 23px 23px 0px 23px;
      /* border: 2px solid red; */
      overflow:auto;
    }
    #MyTable{
      width:95% !important;
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
                <a class="nav-link active" href="CompletedOrders.php">Completed Orders</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <table class="table mx-5 mt-6" id="MyTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Stock Name</th>
        <th scope="col">Buy Date</th>
        <th scope="col">Cost Price</th>
        <th scope="col">Buyer Info</th>
        <th scope="col">Buy Quantity</th>
        <th scope="col">Sell Quantity</th>
        <th scope="col">Sell Date</th>
        <th scope="col">Sell Price</th>
        <th scope="col">Total profit</th>
        <th scope="col">Sell Brokerage</th>
        <th scope="col">Buy Brokerage</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql="SELECT * FROM soldlist WHERE Status='0'";
      $result=$conn->query($sql);
      if($result->num_rows>0){
          $id=1;
          while($row = $result->fetch_assoc()){
            $profit=$row['Sell Price'] - $row['Cost Price'];
      ?>
    <tr>
      <th scope="row"><?php echo $id?></th>
      <td><?php echo $row['Stock Name']; ?></td>
      <td><?php echo $row['Buy Date']; ?></td>
      <td><?php echo $row['Cost Price']; ?></td>
      <td><?php echo $row['Buyer Info']; ?></td>
      <td><?php echo $row['Buy Quantity']; ?></td>
      <td><?php echo $row['Sell Quantity']; ?></td>
      <td><?php echo $row['Sell Date']; ?></td>
      <td><?php echo $row['Sell Price']; ?></td>
      <td><?php echo $profit*$row['Sell Quantity']; ?></td>
      <td><?php echo $row['Sell Brokerage']; ?></td>
      <td><?php echo $row['Buy Brokerage']; ?></td>
      <td><a class="btn btn-primary btn-sm" href="CompletedOrders.php?did=<?php echo $row['id'];?>">DEL</a></td>
    </tr>
    <?php
        $id++; 
        }
        }
    ?>
  </tbody>
</table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>