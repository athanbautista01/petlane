<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Pet Lane | Orders & Tracking</title>

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
                    <h2>Orders & Tracking</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="../include/profile.php">My Account</a></li>
                                <li class="list-group-item"><a href="../include/editprofile.php?ID=<?php echo $qid ?>">Edit Profile</a></li>
                                <li class="list-group-item"><a href="../sellpet.php">Sell Pet</a></li>
                                <li class="list-group-item"><a href="../include/createBlog.php">Create Blog</a></li>
                                <li class="list-group-item"><a href="../include/viewappointment.php">View Appointment</a></li>
                                <li class="list-group-item"><a href="cart.php">My Cart</a></li>
                                <li class="list-group-item"><a href="wishlist.php">My Wishlist</a></li>
                                <li class="list-group-item active">Orders & Tracking</a></li>
                            </ul>
                        </div>
                        <fieldset>
                            <div class="col-lg-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading" align="center"><h4><b></b></h4></div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <th>Order No</th>
                                            <th>Date Ordered</th>
                                            <th>Payment Method</th>
                                            <th>Amount</th>
                                            <th>Date Delivered</th>
                                            <th>Status</th>
                                            </thead>
                                            <tbody class="row">
                                            <tr>

                                                <?php
                                                    
                                                    $query = "SELECT a.OrderNo, a.DateDelivered, a.Status, b.OrderNo, b.Amount, b.UserID, c.OrderNo, c.DateOrdered, c.PaymentMethod FROM delivery a INNER JOIN orderdetail b ON a.OrderNo = b.OrderNo INNER JOIN orders c ON b.OrderNo = c.OrderNo WHERE b.UserID='$qid'";
                                                        $result = $conn->query($query); 
                                                                       if ($conn->error) {
                                                                         die("Query failed: " . $conn->error);
                                                                       } 
                                                                       //If there are records fetched, iterate through the data set
                                                                       if ($result->num_rows) {    
                                                                         while ($row = mysqli_fetch_assoc($result)) {
                                                    
                                                                             echo "<td>";
                                                                             echo  $row['OrderNo'];
                                                                              echo "</td>";
                                                                             echo "<td>";
                                                                             echo  $row['DateOrdered'];
                                                                              echo "</td>";
                                                                              echo "<td>";
                                                                             echo  $row['PaymentMethod'];
                                                                              echo "</td>";
                                                                              echo "<td>P ";
                                                                             echo  $row['Amount'];
                                                                              echo ".00</td>";
                                                                              echo "<td>";
                                                                             echo  $row['DateDelivered'];
                                                                              echo "</td>";
                                                                              echo "<td>";
                                                                             echo  $row['Status'];
                                                                              echo "</td>";
                                                                              echo "<tr></tr>";
                                                                         } 
                                                                     } else {
                                                      echo "<tr>
                                                        <td colspan='6'>
                                                            <h3 class='text-center'>No orders found.</h3>
                                                        </td>
                                                    </tr>";
                                                    }
                                                ?>

                                            </tr>
                                        </tbody>
                                        </table>
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
