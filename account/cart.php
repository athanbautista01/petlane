<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="../css/etalage.css">
        <title>Pet Lane | Cart</title>

        <?php
            //Connect to MySQL and validate userid
            include("requiredLogin.php");
            //include the header
            include("../includeHeader.php");
        ?>

        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>Cart</h2>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li><a href="../profile.php">My Account</a></li>
                            <li class="active">Cart</a></li>
                        </ol>
                        <div class="panel panel-success">

                            <div class="panel-heading">
                                <br />
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-9">
                                    <p class="bg-primary" align="center">Pets Cart</p>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <th></th>
                                            <th>Item Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th></th>
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
                                                </td>
                                                <td>
                                                    Php <?php echo "<b>".$row["price"].".00</b>"; ?>
                                                </td>
                                                <td>
                                                    <input type="number" name="qty" class="qty" width="5px" min="1" max="<?php echo $row["available"]; ?>" size="<?php echo $row["quantity"]; ?>" value="<?php echo $row["quantity"]; ?>" />
                                                </td>
                                                <td>
                                                    Php <?php echo "<b>".$row["amount"].".00</b>"; ?>
                                                </td>
                                                <td class="row">
                                                    <button class='btn btn-success' type='submit' name='refresh' title="Refresh"><i class="fa fa-refresh"></i></button>
                                                    <a href="deleteCart.php?ID1=<?php echo $row['refno'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-trash-o"></i></a>    
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

                                    <p class="bg-primary" align="center">Pet Supplies Cart</p>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <th></th>
                                            <th>Item Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th></th>
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
                                                </td>
                                                <td>
                                                    Php <?php echo "<b>".$row["price"]."</b>"; ?>
                                                </td>
                                                <td>
                                                    <input type="number" name="qty" class="qty" width="5px" min="1" max="<?php echo $row["available"]; ?>" size="<?php echo $row["quantity"]; ?>" value="<?php echo $row["quantity"]; ?>" />
                                                </td>
                                                <td>
                                                    Php <?php echo "<b>".$row["amount"].".00</b>"; ?>
                                                </td>
                                                <td class="row">
                                                    <button class='btn btn-success' type='submit' name='refresh' title="Refresh"><i class="fa fa-refresh"></i></button>
                                                    <a href="deleteCart.php?ID1=<?php echo $row['refno'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-trash-o"></i></a>    
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
        <div class="col-lg-3">
            <div class="well">
            <?php 
                $resultCart = 0.00;
                $totalCartCount = "select sum(amount) as totalcart from orderdetail where status='InCart' AND userid=$userID having count(refno) > 0";
                $result = mysqli_query($conn, $totalCartCount);
                while($row = $result->fetch_assoc()) {
                    $resultCart = $row['totalcart'];
                }

                //$vatCart = $resultCart / .12;
                $shipping = 0.00;
                //$totCart = $resultCart + $vatCart;
                $totCart = $resultCart + $shipping;
            ?>
                <h5>Sub-Total: </h5><span style='color:Gray;'>₱ <?php echo round($resultCart, 2); ?>.00</span><br /><br />
                <!--<h5 >VAT (12%): </h5><span style='color:Red;'>₱ <?php echo round($vatCart, 2); ?></span><br /><br />-->
                <h5 >Shipping: </h5><span style='color:Red;'>Shipping fee will be calculated upon checkout</span><br /><br />
                <hr>
                <h3>Total: </h3><span style='color:Green;'><u>₱ <?php echo round($totCart, 2); ?>.00</u></span><br /><br />
                <hr>
                <a href='../pets.php' class='btn btn-success'><i class='fa fa-shopping-cart'></i> Continue Shopping</a><br /><br />      
                <a href='checkout.php' class='btn btn-danger'><i class='fa fa-shopping-cart'></i> Checkout </a>
                
            </div>
        </div>
                                
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>


        <?php
            include("../includeFooter.html");
        ?>