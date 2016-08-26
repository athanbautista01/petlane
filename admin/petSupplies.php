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
            <h2>Pet Supplies</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php include("navigation.php");?>
                <div class="col-lg-9">
                    <div class="panel panel-success">
                        <div class="panel-heading" align="center"><a href="adddoctor.php" ><i class="fa fa-plus pull-right"></i></a></br></div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                <th>No</th>
                                <th></th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Available</th>
                                 <th>Approved?</th>
                                <th></th>
                                </thead>
                                <tbody class="row">
                                <tr>

                                    <?php
                                        
                                     /*   $query = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
                                        a.Status,b.UserListID, b.UserTypeID, b.Password, b.Username, b.Email, b.DateAdded, c.UserTypeID, c.UserType
                                        FROM user a INNER JOIN userlist b ON a.UserListID = b.UserListID INNER JOIN usertype c ON b.UserTypeID = c.UserTypeID WHERE c.UserType='Veterinarian'";*/
                                        
                                        $query = "SELECT `SuppliesID`, `CategoryID`, `ProductName`, `SuppliesCat`, `Brand`, `Price`, `Available`, `Description`, `Image`, `Image2`, `Image3`, `IsFeatured` FROM `petsupplies` ";
                                                    $result = $conn->query($query); 
                                                           if ($conn->error) {
                                                             die("Query failed: " . $conn->error);
                                                           } 
                                                           //If there are records fetched, iterate through the data set
                                                           if ($result->num_rows) {    
                                                             while ($row = mysqli_fetch_assoc($result)) {
                                                              echo "<td>";
                                                                 echo  $row['SuppliesID'];
                                                                  echo "</td>";
                                                                echo "<td><img src='";
                                                                 echo  "../".$row['Image'];
                                                                  echo "' class='responsive' height='50px'></td>";
                                                                 echo "<td>";
                                                                 echo  $row['ProductName'];
                                                                  echo "</td>";
                                                                 echo "<td>P";
                                                                 echo  $row['Price'];
                                                                  echo "</td>";
                                                                  echo "<td>";
                                                                 echo  $row['Available'];
                                                                  echo "</td>";
                                                                   echo "<td>";
                                                                 echo  $row['IsFeatured'];
                                                                  echo "</td>";
                                                                  echo "<td class='row'>";?>
                                                                  <a href="petSuppliesApprove.php?ID=<?php echo $row['SuppliesID'] ?>" class="btn btn-danger" role="button" title="Update"><i class="fa fa-pencil-square-o"></i></a>
                                                                  <a href="petSuppliesDelete.php?ID=<?php echo $row['SuppliesID'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-trash-o"></i></a>
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
