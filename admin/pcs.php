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
            <h2>Pet Categories</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php include("navigation.php");?>
                <div class="col-lg-9">
                 
                    <div class="panel panel-success">
                        <div class="panel-heading" align="center"></br></div>
                        <div class="panel-body">
                          <div class="col-lg-4">
                            <table class="table table-hover">
                                <thead>
                                <th>No</th>
                                <th>Category</th>
                                <th></th>
                                </thead>
                                <tbody class="row">
                                <tr>

                                    <?php
                                        
                                     /*   $query = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
                                        a.Status,b.UserListID, b.UserTypeID, b.Password, b.Username, b.Email, b.DateAdded, c.UserTypeID, c.UserType
                                        FROM user a INNER JOIN userlist b ON a.UserListID = b.UserListID INNER JOIN usertype c ON b.UserTypeID = c.UserTypeID WHERE c.UserType='Veterinarian'";*/
                                        
                                        $query = "SELECT `CategoryID`, `Category` FROM `petcategory`"; 
                                                    $result = $conn->query($query); 
                                                           if ($conn->error) {
                                                             die("Query failed: " . $conn->error);
                                                           } 
                                                           //If there are records fetched, iterate through the data set
                                                           if ($result->num_rows) {    
                                                             while ($row = mysqli_fetch_assoc($result)) {
                                                                 echo "<td>";
                                                                 echo  $row['CategoryID'];
                                                                  echo "</td>";
                                                                 echo "<td>";
                                                                 echo  $row['Category'];
                                                                  echo "</td>";
                                                                   echo "<td class='row'>";?>
                                                                  <a href="categorydelete.php?ID=<?php echo $row['CategoryID'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-trash-o"></i></a>
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
                          <div class="col-lg-5"> 
                               <div class="form-group">
                                <form role="form" action="categoryadd.php" method="post" class="login-form">
                                <h3>Add New Categories</h3>
                                        <input type="text" name="categories" class="form-password form-control" id="form-password" required>
                                        </div>
                                        
                                        <button type="submit" name="addcategories" class="btn btn-custom">Submit</button>
                                </form>
                                </div>
                          </div>
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
