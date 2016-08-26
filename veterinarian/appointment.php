<?php
    //Connect to MySQL and validate userid
            include("requiredLogin.php");
    //include the header
    include("includeHeader.php");
    $userlistidtwo = $_SESSION['userlistid']
?>

<section>
    <div class="container">
        <div class="col-lg-12 heading text-center"><br>
            <h2>Appointments</h2>
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
                                <th>Name</th>
                                <th>Reason</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Date Added</th>
                                              </thead>
                                <tbody class="row">
                                <tr>

                                    <?php
                                        
                                        $appointment = "select a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo,
                                        b.useroneid,b.usertwoid,b.date,b.time,b.reason,b.dateadded from user a INNER JOIN appointment b ON a.UserID = b.useroneid where b.usertwoid = $userlistidtwo ";
                                        
                                            $resultAppointment = $conn->query($appointment); 
                                                           if ($conn->error) {
                                                             die("Query failed: " . $conn->error);
                                                           } 
                                                           //If there are records fetched, iterate through the data set
                                                           if ($resultAppointment->num_rows) {    
                                                             while ($row = mysqli_fetch_assoc($resultAppointment)) {
                                        
                                                                 echo "<td>";
                                                                 echo  $row['FirstName'];
                                                                 echo "&nbsp;";
                                                                 echo $row['LastName'];
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
    <div class="scroll-top page-scroll hidden-lg hidden-md" style="display: block;">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
