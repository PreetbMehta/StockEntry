<?php
  include('conn.php');
  // del the record added bymistake
  if(isset($_GET['did']) && $_GET['did']!="")
 {
   $sql="DELETE FROM `unitedstocks` where id=".$_GET['did'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Data tables css -->
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- jQuery src for data tables  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
      $('#myTable').DataTable();
      } );
      //   Print button
      // $(document).ready(function() {
      //       $('#myTable').DataTable( {
      //           dom: 'Bfrtip',
      //           buttons: [
      //               'print'                    ]
      //           } );
      //       } );
    </script>
    <!-- end of datatable code  -->

    <link rel="shortcut icon" href="images/united.jpg" type="images/jpg"><!--logo.-->
    <title>UnitedStocks</title>
  </head>
  <style>
    body{
      background:rgb(209, 224, 224);
    }
    #myTable_wrapper{
      padding: 23px 23px 23px 23px;
      margin: 23px 23px 0px 23px;
      /* border: 2px solid red; */
      overflow:auto;
    }
    #myTable{
      width:98% !important;
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
                <a class="nav-link active" href="Portfolio.php">Our Portfolio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="CompletedOrders.php">Completed Orders</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <br>
    <table class="table mx-5 mt-6" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Stock Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total Buy Price</th>
      <th scope="col">Buy Brokerage</th>
      <th scope="col">Buyer Info</th>
      <th scope="col">Active/Inactive</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql="SELECT * FROM unitedstocks WHERE Status='1'";
      $result=$conn->query($sql);
      if($result->num_rows>0){
          $id=1;
          while($row = $result->fetch_assoc()){
      ?>
    <tr>
      <th scope="row"><?php echo $id?></th>
      <td><?php echo $row['BuyDate']; ?></td>
      <td><?php echo $row['Stock Name']; ?></td>
      <td><?php echo $row['Quantity']; ?></td>
      <td><?php echo $row['Price']; ?></td>
      <td><?php echo $row['Price'] * $row['Quantity']; ?></td>
      <td><?php echo $row['Buy Brokerage']; ?></td>
      <td><?php echo $row['Buyer Info']; ?></td>
      <!-- <td><?php echo $row['Status']; ?></td> -->
      <td> <a class="btn btn-primary btn-sm" href="Sold.php?sid=<?php echo $row['id'];?>">SELL</a>
      <a class="btn btn-primary btn-sm" href="Portfolio.php?did=<?php echo $row['id'];?>">DEL</a></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>