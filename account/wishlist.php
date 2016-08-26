<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Pet Lane | My Wishlist</title>

        <?php
            //include("requiredLogin.php");
            //Connect to MySQL
            require_once("../database/connect.php");
            //include the header
            include("../includeHeader.php");
                   $userlistidtwo = $_SESSION['userlistid']; // user
                   $qid = $_SESSION['userid'];
        ?>
        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>My Wishlist</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="../profile.php">My Account</a></li>
                                <li class="list-group-item"><a href="editprofile.php?ID=<?php echo $qid ?>">Edit Profile</a></li>
                                <li class="list-group-item"><a href="../sellpet.php">Sell Pet</a></li>
                                <li class="list-group-item"><a href="createBlog.php">Create Blog</a></li>
                                <li class="list-group-item"><a href="../include/viewappointment.php">View Appointment</a></li>
                                <li class="list-group-item"><a href="../account/cart.php">My Cart</a></li>
                                <li class="list-group-item active">My Wishlist</li>
                                <li class="list-group-item"><a href="../account/pending.php">Orders & Tracking</a></a></li>
                            </ul>
                        </div>
                        <fieldset>
                            <div class="col-lg-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading" align="center"><h4><b></b></h4></div>
                                    <div class="panel-body">
                                        <div class="col-lg-12">
                                            <p class="bg-primary" align="center">Pet</p>
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
                                                        $query = "select od.refno, p.petid, p.image, p.breed, p.petname, p.price, p.available, od.quantity, od.amount, od.status from orderdetail od inner join pet p on od.petid = p.petid where od.status='InWishlist' AND od.UserID='$userID'";
                                                        
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
                                                    <form action="updateCart.php?ID3=<?php echo $row['refno'] ?>" method="post">

                                                <tr>
                                                    <td>
                                                        <?php echo "<img width='80' class='img-responsive' src='../".$row['image']."' alt=''>"; ?>

                                                    </td>
                                                    <td>
                                                        <a href="../include/petDetails.php?ID=<?php echo $row['petid'] ?>" style="text-decoration: none;">
                                                        <?php echo "<h3>".$row["breed"]."</h3>"; ?>
                                                        </a>
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
                                                        <button class="btn btn-success" type="submit" name="refresh" title="Add To Cart"><i class="fa fa-shopping-cart"></i></button>
                                                        <a href="deleteCart.php?ID3=<?php echo $row['refno'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                        </form>
                                                <?php
                                                    }
                                                    } else {
                                                      echo "<tr>
                                                        <td colspan='6'>
                                                            <h3 class='text-center'>No items found</h3>
                                                        </td>
                                                    </tr>";
                                                    }
                                                ?>
                                        </tbody>
                                            </table>

                                            <p class="bg-primary" align="center">Pet Supplies</p>
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
                                $query = "select od.refno, p.suppliesid, p.image, p.productname, p.price, p.available, od.quantity, od.amount, od.status from orderdetail od inner join petsupplies p on od.suppliesid = p.suppliesid where od.status='InWishlist' AND od.UserID='$userID'";
                                
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
                                            <form action="updateCart.php?ID4=<?php echo $row['refno'] ?>" method="post">
                                            
                                            <tr >
                                                <td>
                                                    <?php echo "<img width='80' class='img-responsive' src='../".$row['image']."' alt=''>"; ?>
                                                    
                                                </td>
                                                <td>       
                                                    <a href="../include/productDetails.php?ID=<?php echo $row['suppliesid'] ?>" style="text-decoration: none;">
                                                    <?php echo "<h3>".$row["productname"]."</h3>"; ?>
                                                        </a>
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
                                                        <button class="btn btn-success" type="submit" name="refresh" title="Add To Cart"><i class="fa fa-shopping-cart"></i></button>
                                                        <a href="deleteCart.php?ID3=<?php echo $row['refno'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                            </tr>
                                        </form>
                                        
                                                <?php
                                                    }
                                                    } else {
                                                      echo "<tr>
                                                        <td colspan='6'>
                                                            <h3 class='text-center'>No items found</h3>
                                                        </td>
                                                    </tr>";
                                                    }
                                                    
                                                    
                                                ?>
                                                    
                                                
                                            
                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </section>






        <?php
            include("../includeFooter.html");
        ?>
