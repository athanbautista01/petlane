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
            <h2>Users</h2>
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
                                    <th></th>
                                    <th>User Type</th>
                                    <th>Name</th>
                                    <!--<th>Address</th>-->
                                <th>Email</th>

                                    <th>Status</th>
                                <th></th>
                                              </thead>
                                <tbody class="row">
                                <tr>

                                    <?php
                                        
                                        $query = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
                                        a.Status,b.UserListID, b.UserTypeID, b.Password, b.Username, b.Email, b.DateAdded, c.UserTypeID, c.UserType
                                        FROM user a INNER JOIN userlist b ON a.UserListID = b.UserListID INNER JOIN usertype c ON b.UserTypeID = c.UserTypeID WHERE c.UserType='Administrator' OR c.UserType='Customer'";
                                        
                                            $result = $conn->query($query); 
                                                           if ($conn->error) {
                                                             die("Query failed: " . $conn->error);
                                                           } 
                                                           //If there are records fetched, iterate through the data set
                                                           if ($result->num_rows) {    
                                                             while ($row = mysqli_fetch_assoc($result)) {
                                                                echo "<td><img src='";
                                                                 echo  "../".$row['Photo'];
                                                                  echo "' class='responsive' height='50px'></td>";
                                                                  echo "<td>";
                                                                 echo  $row['UserType'];
                                                                  echo "</td>";
                                                                 echo "<td>";
                                                                 echo  $row['FirstName'];
                                                                 echo "&nbsp;";
                                                                 echo $row['LastName'];
                                                                  echo "</td>";
                                                               
                                                                 echo "<td>";
                                                                 echo  $row['Email'];
                                                                  echo "</td>";
                                                                    echo "<td>";
                                                                 echo  $row['Status'];
                                                                 echo "</td>";

                                                                   echo "<td>";
                                                                  echo "</td>"; 
                                                                  echo "<td class='row'>";?>
                                                                  <a href="update.php?ID=<?php echo $row['UserID'] ?>" class="btn btn-danger" role="button" title="Update"><i class="fa fa-pencil-square-o"></i></a>
                                                                  <a href="delete.php?ID=<?php echo $row['UserID'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                  <?php
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
