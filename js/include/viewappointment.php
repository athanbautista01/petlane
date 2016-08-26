        <?php
            //include("requiredLogin.php");
            //Connect to MySQL
            require_once("../database/connect.php");
            //include the header
            $title="Pet Lane | View Appointment";
            include("../includeHeader.php");
                   $userlistidtwo = $_SESSION['userlistid']; // user
                   $qid = $_SESSION['userid'];
        ?>
        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>View Appointment</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="../profile.php">My Account</a></li>
                                <li class="list-group-item"><a href="editprofile.php?ID=<?php echo $qid ?>">Edit Profile</a></li>
                                <li class="list-group-item"><a href="../sellpet.php">Sell Pet</a></li>
                                <li class="list-group-item"><a href="createBlog.php">Create Blog</a></li>
                                <li class="list-group-item active">View Appointment</li>
                                <li class="list-group-item"><a href="../account/cart.php">My Cart</a></li>
                                <li class="list-group-item"><a href="../account/wishlist.php">My Wishlist</a></li>
                                <li class="list-group-item"><a href="../account/pending.php">Orders & Tracking</a></a></li>
                            </ul>
                        </div>
                        <fieldset>

                            <div class="col-lg-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading" align="center"><h4><b></b></h4></div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <th>Veterinarian</th>
                                            <th>Reason</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Date Added</th>
                                              </thead>
                                            <tbody class="row">
                                            <tr>
                                                <?php
                                                    
                                                    $appointment = "select a.useroneid,a.usertwoid,a.date,a.time,a.reason,a.dateadded,b.VeterinarianID, b.lastname, b.firstname from appointment a INNER JOIN veterinarian b  ON b.VeterinarianID = a.usertwoid where useroneid = '$qid'";
                                                    
                                                        $resultAppointment = $conn->query($appointment); 
                                                                       if ($conn->error) {
                                                                         die("Query failed: " . $conn->error);
                                                                       } 
                                                                       //If there are records fetched, iterate through the data set
                                                                       if ($resultAppointment->num_rows) {    
                                                                         while ($row = mysqli_fetch_assoc($resultAppointment)) {
                                                    
                                                                             echo "<td>Dr. ";
                                                                             echo  $row['firstname'];
                                                                             echo "&nbsp;";
                                                                             echo  $row['lastname'];
                                                                              echo "</td>";
                                                                             echo "<td>";
                                                                             echo  $row['reason'];
                                                                              echo "</td>";
                                                                             echo "<td>";
                                                                             echo  $row['date'];
                                                                              echo "</td>";
                                                                              echo "<td>";
                                                                             echo  $row['time'];
                                                                              echo "</td>";
                                                                              echo "<td>";
                                                                             echo  $row['dateadded'];
                                                                              echo "</td>";
                                                                              echo "<tr></tr>";
                                                                         }
                                                                     }else {
                                                      echo "<tr>
                                                        <td colspan='6'>
                                                            <h3 class='text-center'>No appointments found.</h3>
                                                        </td>
                                                    </tr>";
                                                    }
                                                ?>

                                            </tr>
                                        </tbody>
                                        </table><hr>
                                        <a href="../appointment.php" class="btn btn-danger" role="button" title="Delete">ADD APPOINTMENT</a>
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
