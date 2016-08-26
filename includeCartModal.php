<?php
                                $cartCount = "select sum(quantity) as CartCount from orderdetail  where status='InCart' AND UserID=$userID";
                                $result = mysqli_query($conn, $cartCount);
                                if($cartCount != null){
                                    while($row = $result->fetch_assoc()) {
                                    $cart = $row['CartCount'];
                                    }
                                }else{
                                    $cart = 0;
                                }
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p class="modal-title">IN MY CART (<?php echo $cart ?> ITEMS)</p>
            </div>
            <div class="modal-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <th></th>
                                            <th>Pet In Cart Details</th>
                                        </thead>
                                        <tbody class="row clearfix">
                            <?php
                                $userID = $_SESSION['userid'];
                                //Build the query to use to fetch records
                                $query = "select od.refno, p.petid, p.image, p.breed, p.petname, p.price, p.available, od.quantity, od.amount, od.status from orderdetail od inner join pet p on od.petid = p.petid where od.status='InCart' AND od.UserID='$userID'";
                                
                                //Fetch records from MySQL
                                $result = $conn->query($query); 
                                if ($conn->error) {
                                  die("Query failed: " . $conn->error);
                                }
                                
                                
                                //If there are records fetched, iterate through the data set
                                if ($result->num_rows) {    
                                  while ($row = mysqli_fetch_assoc($result)) {
                                    $_SESSION['updpetid'] = $row['petid'];
                            ?>
                                            <form action="updateCart.php?ID1=<?php echo $row['refno'] ?>" method="post">
                                            
                                            <tr >
                                                <td>
                                                    <?php echo "<img width='80' class='img-responsive' src='../".$row['image']."' alt=''>"; ?>
                                                    
                                                </td>
                                                <td>       
                                                    <?php echo "<h3>".$row["breed"]."</h3>"; ?>
                                                    <?php echo "<p>Price / Item: Php ".$row["price"].".00</p>"; ?>
                                                    <?php echo "<p>Quantity: ".$row["quantity"]."</p>"; ?>
                                                </td>
                                            </tr>
                                        </form>
                                        
                                                <?php
                                                    }
                                                    } else {
                                                      echo "<tr>
                                                        <td colspan='6'>
                                                            <h3 class='text-center'>YOUR PET CART IS EMPTY</h3>
                                                            <br>
                                                            <a hre
                                                        </td>
                                                    </tr>";
                                                    }
                                                    
                                                    
                                                ?>
                                                    
                                                
                                            
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <th></th>
                                            <th>Pet Supplies In Cart Details</th>
                                        </thead>
                                        <tbody class="row clearfix">
                            <?php
                                // $userID = $_SESSION['userid'];
                                // //Build the query to use to fetch records
                                $query = "select od.refno, p.suppliesid, p.image, p.productname, p.price, p.available, od.quantity, od.amount, od.status from orderdetail od inner join petsupplies p on od.suppliesid = p.suppliesid where od.status='InCart' AND od.UserID='$userID'";
                                
                                //Fetch records from MySQL
                                $result = $conn->query($query); 
                                if ($conn->error) {
                                  die("Query failed: " . $conn->error);
                                }
                                
                                
                                //If there are records fetched, iterate through the data set
                                if ($result->num_rows) {    
                                  while ($row = mysqli_fetch_assoc($result)) {
                                    $_SESSION['updpetid'] = $row['suppliesid'];
                            ?>
                                            <form action="updateCart.php?ID2=<?php echo $row['refno'] ?>" method="post">
                                            
                                            <tr >
                                                <td>
                                                    <?php echo "<img width='80' class='img-responsive' src='../".$row['image']."' alt=''>"; ?>
                                                    
                                                </td>
                                                <td>       
                                                    <?php echo "<h3>".$row["productname"]."</h3>"; ?>
                                                    <?php echo "<p>Price / Item: Php ".$row["price"].".00</p>"; ?>
                                                    <?php echo "<p>Quantity: ".$row["quantity"]."</p>"; ?>
                                                </td>
                                            </tr>
                                        </form>
                                        
                                                <?php
                                                    }
                                                    } else {
                                                      echo "<tr>
                                                        <td colspan='6'>
                                                            <h3 class='text-center'>YOUR PET SUPPLIES CART IS EMPTY</h3>
                                                        </td>
                                                    </tr>";
                                                    }
                                                    
                                                    
                                                ?>
                                                    
                                                
                                            
                                        </tbody>
                                    </table>
            </div>
            <div class="modal-footer"><center>
                <div class="well">
            <?php 
                $resultCart = 0.00;
                $totalCartCount = "select sum(amount) as totalcart from orderdetail where status='InCart' AND userid=$userID having count(refno) > 0";
                $result = mysqli_query($conn, $totalCartCount);
                while($row = $result->fetch_assoc()) {
                    $resultCart = $row['totalcart'];
                }
            ?>
                <p>Sub-Total: <span style='color:Gray;'>₱ <?php echo round($resultCart, 2); ?>.00</span></p>
                </div>
                <a type="button" class="btn btn-custom" href="../account/cart">VIEW CART</a>
                <a type="button" class="btn btn-custom" href="../account/checkout">CHECKOUT NOW</a>
            </center></div>
        </div>
    </div>
</div>