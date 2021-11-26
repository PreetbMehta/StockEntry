<?php
    include ("conn.php");
    $eid = $_POST['e'];
    $sqlEdit="SELECT * FROM `unitedstocks` where `unitedstocks`.id=$eid";
    $resultEdit = $conn->query($sqlEdit);
    if($resultEdit -> num_rows>0){
        while($rowEdit = $resultEdit->fetch_assoc())
        {
    ?>
            <div class="col-md-6">
              <label for="BuyDate" class="form-label">Buy Date</label>
              <input type="date" class="form-control" id="BuyDate" name="BuyDate" value="<?php echo $rowEdit['BuyDate']; ?>">
            </div>
            <div class="col-12">
              <label for="StockName" class="form-label">Stock Name</label>
              <input type="text" class="form-control" id="StockName" name="StockName" value="<?php echo $rowEdit['Stock Name']; ?>">
            </div>
            <div class="col-md-3">
              <label for="BuyQuantity" class="form-label">Buy Quantity</label>
              <input type="number" min="1" class="form-control" id="BuyQuantity" name="BuyQuantity" value="<?php echo $rowEdit['Quantity']; ?>">
            </div>
            <div class="col-md-6">
                <label for="CostPrice" class="form-label">Cost Price</label>
                <input type="number" min="1" step="0.01" class="form-control" id="CostPrice" name="CostPrice" value="<?php echo $rowEdit['Price']; ?>">
            </div>
            <div class="col-6">
                <label for="BuyerInfo" class="form-label">Buyer Info</label>
                <input type="text" class="form-control" id="BuyerInfo" name="BuyerInfo" value="<?php echo $rowEdit['Buyer Info']; ?>">
            </div>
            <div class="col-md-3">
                <label for="UpdatedBy" class="form-label">Updated By</label>
                <input type="text" class="form-control" id="UpdatedBy" name="UpdatedBy" value="<?php echo $rowEdit['UpdatedBy']; ?>" readonly>
            </div>
            <div class="col-12">
                <!-- <button type="SUBMIT" class="btn btn-primary" id="Edit" value="Edit">Edit</button> -->
                <input class="btn btn-primary" type="submit" value="Edit" name="Edit" value="Edit">
            </div>
            <input type="hidden" name="eid" value=<?php echo $eid?>>
        <?php
        }
    }
    