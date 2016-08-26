<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="../css/etalage.css">
        <title>Pet Lane | Product Details</title>

        <?php
            //Connect to MySQL and validate userid
            include("requiredLogin.php");
            
            $userID = $_SESSION['userid'];
            $cartCount = "select count(p.PetID) as CartCount from orderdetail od inner join pet p on od.petid = p.petid where od.status='InCart' AND od.UserID=$userID and od.userid=$userID";
            $result = mysqli_query($conn, $cartCount);
            while($row = $result->fetch_assoc()) {
                $cart = $row['CartCount'];
            }
            if ($cart == 0){
        ?>
        <script>
            alert('Empty In Cart Pet/Pet Supplies.');
            window.location.href='cart';
        </script>
        <?php
            }
            
            //include the header
            include("../includeHeader.php");
        ?>


        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>Checkout</h2>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li><a href="profile.php">Account</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li class="active">Checkout</a></li>
                        </ol>
                        <div class="panel panel-success">

                            <div class="panel-heading">
                                <br />
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <p class="bg-primary" align="center">Checkout</p>
                                </div>
                                <div class="col-lg-6">

                                    <?php
                                                                $userID = $_SESSION['userid'];
                                                                //Build the query to use to fetch records
                                                                $query = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
                                        a.Status,b.UserListID, b.UserTypeID, b.Password, b.Username, b.Email, b.DateAdded
                                        FROM user a INNER JOIN userlist b ON a.UserListID = b.UserListID WHERE a.UserID=$userID";
                                                                //Fetch records from MySQL
                                                                $result = $conn->query($query); 
                                                                if ($conn->error) {
                                                                die("Query failed: " . $conn->error);
                                                                }
                                        
                                        
                                                                //If there are records fetched, iterate through the data set
                                                                if ($result->num_rows) {    
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <form action="checkoutUpdate.php?ID=<?php echo $row['UserID'] ?>" method="post">
                                        <h4>
					                    Billing and Delivery Address</h4>
                                        <br />
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">
					                        First Name</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="cFirstName" value="<?php echo $row['FirstName']; ?>" class="form-first-name form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">
					                        Last Name</label>
                                            <div class="col-lg-8    ">
                                                <input type="text" name="cLastName" value="<?php echo $row['LastName'] ?>" class="form-last-name form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">
					                        Street</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="cAddress" value="<?php echo $row['Address'] ?>" class="form-address form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">
					                        Municipality</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="cAddress" value="<?php echo $row['Address'] ?>" class="form-address form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">
					                        City</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="cAddress" value="<?php echo $row['Address'] ?>" class="form-address form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">
					                        Contact No</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="cContact" value="<?php echo $row['ContactNo'] ?>" class="form-contact form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">
					                        Additional Info</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="cAddInfo" value="<?php echo $row['AdditionalInfo'] ?>" class="form-contact form-control" required>
                                            </div>
                                        </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="wish-list">
                                        <h4>
						                    Payment Summary</h4>
                                    </div>
                                    <br />

                                    <div class="panel-body">

                                        <ul class="nav nav-tabs clearfix" role="tablist">
                                            <li role="presentation" class="active" id="tab1"><a href="#cash" aria-controls="Description" role="tab" data-toggle="tab" class="tab1">Cash On Delivery</a></li>
                                            <li role="presentation" id="tab2"><a href="#paypal" aria-controls="Addtnl" role="tab" data-toggle="tab" class="tab2">Paypal</a></li>
                                        </ul>
                                        <br />
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="cash">
                                                <img width="200px" class="img-responsive" src="../images/custom/cash.png" alt=""><br>
                                                <p>YOUR PACKAGE WILL BE DELIVERED TO YOUR DOORSTEP</p><br>
                                                <p>PAY OUR DELIVERY STAFF IN CASH AND COLLECT YOUR ORDER</p>
                                                <hr>
                                                <label style="font-size:smaller; color:Gray;">
                                                    <input type="checkbox" required="Required" />&nbsp; I have agreed to the
                                                    <a href="t&a.php">Terms and Conditions</a> of this website.
                                                </label>
                                                <br><br>
                                                <div class="form-group">
                                                    <input name="payment" value="3" hidden />
                                                    <button class="btn btn-success" type="submit" name="checkout" onclientclick="return confirm(" place an order?");"><i class="fa fa-money"></i>ORDER NOW</button>
                                                    <a href="cart.php" class="btn btn-info">Back to Cart </a>
                                                </div>
                                            </div>
</form>
                                            <div role="tabpanel" class="tab-pane fade" id="paypal">
                                                <img width="200px" class="img-responsive" src="../images/custom/paypal.png" alt=""><br>
                                                <p>AFTER ORDER CONFIRMATION YOU WILL BE REDIRECTED TO THE SECURE PAYPAL SYSTEM</p><br>
                                                <p>LOGIN WITH YOUR PAYPAL CREDENTIALS TO MAKE PAYMENT</p>
                                                <hr>

                                                <?php
                                                    //paypal settings
                                                    $paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
                                                    $paypal_id='petlaneseller@petlane.com'; // Business email ID
                                                ?>
                                                <form action="<?php echo $paypal_url; ?>" method="post" id="paypal">

                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="upload" value="1">
                                                    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
                                                    <?php
                                                        include("requiredLogin.php");
                                                        $userID = $_SESSION['userid'];
                                                        $i=1;
                                                        //Build the query to use to fetch records
                                                        $query = "select od.refno, p.petid, p.image, p.breed, p.petname, p.price, p.available, od.quantity, od.amount from orderdetail od inner join pet p on od.petid = p.petid where od.status='InCart' AND od.UserID='$userID'";
                                                        //Fetch records from MySQL
                                                        $result = $conn->query($query);
                                                        if ($conn->error) {
                                                          die("Query failed: " . $conn->error);
                                                        }
                                                        //If there are records fetched, iterate through the data set
                                                        if ($result->num_rows) {
                                                    ?>
                                                    <?php
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $_SESSION['updpetid'] = $row['petid'];
                                                        
                                                    ?>
                                                    <input type="hidden" name="item_name_<?php echo $i; ?>" value="<?php echo $row['breed']; ?>">
                                                    <input type="hidden" name="item_number_<?php echo $i; ?>" value="<?php echo $row['petid']; ?>">
                                                    <input type="hidden" name="quantity_<?php echo $i; ?>" value="<?php echo $row['quantity']; ?>">
                                                    <input type="hidden" name="amount_<?php echo $i; ?>" value="<?php echo $row['price']; ?>">
                                                    <?php
                                                        $i++;
                                                          }
                                                        }
                                                    ?>
                                                    <input type="hidden" name="cancel_return" value="http://localhost:8082/projects/petlane/account/checkout">
                                                    <input type="hidden" name="return" value="http://localhost:8082/projects/petlane/account/paypal">
                                                    <input type="hidden" name="currency_code" value="PHP" />
                                                                                                            <!--<input type="image" name="submit" border="0"  class="btn btn-info" src="../images/custom/btnpaypal.png" alt="PayPal - The safer, easier way to pay online">
                                                            <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">-->
                                                    <label style="font-size:smaller; color:Gray;">
                                                        <input type="checkbox" required="Required" />&nbsp; I have agreed to the
                                                        <a href="t&a.php">Terms and Conditions</a> of this website.
                                                    </label>
                                                    <br><br>
                                                    <button class="btn btn-success" type="submit" name="submit" title="PayPal - The safer, easier way to pay online"><i class="fa fa-money"></i>ORDER NOW</button>
                                                    <a href="cart.php" class="btn btn-info">Back to Cart </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    }}
                                ?>

                                <div class="col-lg-9">
                                    <br />
                                    <p class="bg-primary" align="center">Shopping Cart</p>
                                    <br>
                                    <p class="bg-default" align="center"><span class="badge">Pets Cart</span></p>
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

                                    <p class="bg-default" align="center"><span class="badge">Pet Supplies Cart</span></p>
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
                                    <br />
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
                                        <h5>Sub-Total: </h5><span style="color:Gray;">₱ <?php echo round($resultCart, 2); ?>.00</span><br /><br />
                                        <h5>Shipping: </h5><span style="color:Red;">₱ <?php echo round($shipping, 2); ?>.00</span><br /><br />
                                        <hr>
                                        <h3>Total: </h3><span style="color:Green;"><u>₱ <?php echo $totCart; ?>.00</u></span><br /><br />
                                        <hr>
                                                                                    <!-- <a href='../pets.php' class='btn btn-success'><i class='fa fa-shopping-cart'></i> Continue Shopping</a><br /><br />      
                                                                                                                                                                            <a href='checkout.php' class='btn btn-danger'><i class='fa fa-shopping-cart'></i> Checkout </a> -->
                                    </div>
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
