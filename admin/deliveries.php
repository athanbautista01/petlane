<?php
    //Connect to MySQL and validate userid
            include("requiredLogin.php");
    //include the header
    include("includeHeader.php");
    $qid = $_SESSION['userid']
?>

<section>
    <div class="container">
        <div class="col-lg-12 heading text-center"><br>
            <h2>Orders & Deliveries</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php include("navigation.php");?>
                <div class="col-lg-9">
                    <div class="panel panel-success">
                        <div class="panel-heading" align="center"><h4><b></b></h4></div>
                        <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <th>UserID</th>
                                            <th>OrderNo</th>
                                            <th>Date Ordered</th>
                                            <th>Payment Method</th>
                                            <th>Amount</th>
                                            <th>Date Delivered</th>
                                            <th>Status</th>
                                            <th></th>
                                            </thead>
                                            <tbody class="row">
                                            <tr>

                                                <?php
                                                    
                                                    $query = "SELECT a.OrderNo, a.DateDelivered, a.Status, b.OrderNo, b.Amount, b.UserID, c.OrderNo, c.DateOrdered, c.PaymentMethod FROM delivery a INNER JOIN orderdetail b ON a.OrderNo = b.OrderNo INNER JOIN orders c ON b.OrderNo = c.OrderNo";
                                                        $result = $conn->query($query); 
                                                                       if ($conn->error) {
                                                                         die("Query failed: " . $conn->error);
                                                                       } 
                                                                       //If there are records fetched, iterate through the data set
                                                                       if ($result->num_rows) {    
                                                                         while ($row = mysqli_fetch_assoc($result)) {
                                                    
                                                                             echo "<td>";
                                                                             echo  $row['UserID'];
                                                                              echo "</td>";
                                                                             echo "<td>";
                                                                             echo  $row['OrderNo']; //order detail
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
                                                                             echo  $row['Status']; // delivery
                                                                              echo "</td>";
                                                                               echo "<td class='row'>";?>
                                                                  <a href="updatedeliveries.php?ID=<?php echo $row['OrderNo'] ?>" class="btn btn-danger" role="button" title="Update"><i class="fa fa-truck"></i></a>
                                                                 
                                                                  <?php
                                                                  echo "</td>";
                                                                  echo "<tr></tr>";
                                                                         }
                                                                     }else {
                                                      echo "<tr>
                                                        <td colspan='6'>
                                                            <h3 class='text-center'>No orders and deliveries found.</h3>
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
            </div>
        </div>
    </div>
</section>
 <?php
   
    include("includeFooter.php");
?>

