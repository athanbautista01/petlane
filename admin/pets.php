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
            <h2>Pets</h2>
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
                                <th>Sold by</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Date Added</th>
                                <th>Approved?</th>
                                <th></th>
                                </thead>
                                <tbody class="row">
                                <tr>

                                    <?php
                                        
                                  
                                        $query = "Select Pet.PetID,Pet.PetName,Pet.Image,User.FirstName,PetStatus.Status,Pet.Price,Pet.DateSold,Pet.IsFeatured FROM Pet INNER JOIN PetStatus ON pet.statusid = petstatus.statusid INNER JOIN User ON user.UserID = pet.UserID"; 
                                                    $result = $conn->query($query); 
                                                           if ($conn->error) {
                                                             die("Query failed: " . $conn->error);
                                                           } 
                                                           //If there are records fetched, iterate through the data set
                                                           if ($result->num_rows) {    
                                                             while ($row = mysqli_fetch_assoc($result)) {
                                                               echo "<td>";
                                                                 echo  $row['PetID'];
                                                                  echo "</td>";
                                                                echo "<td><img src='";
                                                                 echo  "../".$row['Image'];
                                                                  echo "' class='responsive' height='50px'></td>";
                                                                 echo "<td>";
                                                                 echo  $row['PetName'];
                                                                  echo "</td>";
                                                                   echo "<td>";
                                                                 echo  $row['FirstName'];
                                                                  echo "</td>";
                                                                 echo "<td>P";
                                                                 echo  $row['Price'];
                                                                  echo "</td>";
                                                                 echo "<td>";
                                                                 echo  $row['Status'];
                                                                  echo "</td>";
                                                                  echo "<td>";
                                                                 echo  $row['DateSold'];
                                                                  echo "</td>";
                                                                   echo "<td>";
                                                                 echo  $row['IsFeatured'];
                                                                  echo "</td>";
                                                                  echo "<td class='row'>";?>
                                                                  <a href="petsApprove.php?ID=<?php echo $row['PetID'] ?>" class="btn btn-danger" role="button" title="Update"><i class="fa fa-pencil-square-o"></i></a>
                                                                  <a href="petsDelete.php?ID=<?php echo $row['PetID'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-trash-o"></i></a>
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
