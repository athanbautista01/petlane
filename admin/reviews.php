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
            <h2>Reviews</h2>
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
                                <th>No</th>
                                <th>User</th>
                                <th>Review</th>
                                <th>Date Added</th>
                                <th>Status</th>
                                <th></th>
                                </thead>
                                <tbody class="row">
                                <tr>

                                    <?php
                                        
                                        $query = "SELECT Review.ReviewID,User.FirstName, Review.Review, Review.DateAdded, Review.Status FROM Review INNER JOIN User ON User.UserID = Review.UserID";
                                                    $result = $conn->query($query); 
                                                           if ($conn->error) {
                                                             die("Query failed: " . $conn->error);
                                                           } 
                                                           //If there are records fetched, iterate through the data set
                                                           if ($result->num_rows) {    
                                                             while ($row = mysqli_fetch_assoc($result)) {
                                                          
                                                                 echo "<td>";
                                                                 echo  $row['ReviewID'];
                                                                  echo "</td>";
                                                                  echo "<td>";
                                                                 echo  $row['FirstName'];
                                                                  echo "</td>";
                                                                 echo "<td>";
                                                                 echo  $row['Review'];
                                                                  echo "</td>";
                                                                 echo "<td>";
                                                                 echo  $row['DateAdded'];
                                                                  echo "</td>";
                                                                  echo "<td>";
                                                                 echo  $row['Status'];
                                                                  echo "</td>";
                                                                  echo "<td class='row'>";?>
                                                                  <a href="reviewapprove.php?ID=<?php echo $row['ReviewID'] ?>" class="btn btn-danger" role="button" title="Update"><i class="fa fa-thumbs-up"></i></a>
                                                                  <a href="reviewdisapprove.php?ID=<?php echo $row['ReviewID'] ?>" class="btn btn-danger" role="button" title="Delete"><i class="fa fa-thumbs-down"></i></a>
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
