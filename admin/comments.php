<?php
    //Connect to MySQL and validate userid
            include("requiredLogin.php");
    //include the header
    include("includeHeader.php");
    $qid = $_SESSION['userid'];
?>

<section>
    <div class="container">
        <div class="col-lg-12 heading text-center"><br>
            <h2>Comments</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php include("navigation.php");?>
                <div class="col-lg-9">
                    <div class="panel panel-success">
                        <div class="panel-heading" align="center"></br></div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                <th>User</th>
                                <th>Comment</th>
                                <th>Date Added</th>
                                <th>Status</th>
                                <th></th>
                                </thead>
                                <tbody class="row">
                                <tr>

                                    <?php
                                        
                                     /*   $query = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
                                        a.Status,b.UserListID, b.UserTypeID, b.Password, b.Username, b.Email, b.DateAdded, c.UserTypeID, c.UserType
                                        FROM user a INNER JOIN userlist b ON a.UserListID = b.UserListID INNER JOIN usertype c ON b.UserTypeID = c.UserTypeID WHERE c.UserType='Veterinarian'";*/
                                        
                                        $query = "SELECT CommentID, BlogID, User, Comment, DateAdded, Status FROM comment";
                                                    $result = $conn->query($query); 
                                                           if ($conn->error) {
                                                             die("Query failed: " . $conn->error);
                                                           } 
                                                           //If there are records fetched, iterate through the data set
                                                           if ($result->num_rows) {    
                                                             while ($row = mysqli_fetch_assoc($result)) {
                                                          
                                                                 echo "<td>";
                                                                 echo  $row['User'];
                                                                  echo "</td>";
                                                                 echo "<td>";
                                                                 echo  $row['Comment'];
                                                                  echo "</td>";
                                                                 echo "<td>";
                                                                 echo  $row['DateAdded'];
                                                                  echo "</td>";
                                                                  echo "<td>";
                                                                 echo  $row['Status'];
                                                                  echo "</td>";
                                                                  echo "<td class='row'>";?>
                                                                  <a href="commentapprove.php?ID=<?php echo $row['CommentID'] ?>" class="btn btn-danger" role="button" title="Update"><i class="fa fa-thumbs-up"></i></a>
                                                                  <a href="commentdisapprove.php?ID=<?php echo $row['CommentID'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-thumbs-down"></i></a>
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


<?php
   
    include("includeFooter.php");
?>
