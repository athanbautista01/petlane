        <?php
            //Connect to MySQL
            require_once("../database/connect.php");
            //include the header
            $title="Pet Lane | Supplies Details";
            include("../includeHeader.php");
        ?>
        <?php
            if(isset($_GET['ID'])) {
            $petID = $_GET['ID'];
            $query = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
            a.Status,b.PetID, b.UserID, b.CategoryID, b.StatusID, b.PetName, b.Breed, b.Price, b.Description, b.Available, 
            b.PetBirthdate, b.Reason, b.Image, b.Image2, b.Image3, b.IsFeatured, b.DateSold, c.CategoryID, c.Category, d.StatusID, d.Status
            FROM user a INNER JOIN pet b ON a.UserID = b.UserID INNER JOIN petcategory c ON b.CategoryID = c.CategoryID 
            INNER JOIN petstatus d ON b.StatusID = d.StatusID WHERE b.PetID=$petID";
            //Fetch records from MySQL
            $result = $conn->query($query); 
            if ($conn->error) {
            die("Query failed: " . $conn->error);
            }
            }else {
        ?>
        <script>
            window.location.href='../pets.php';
        </script>
        <?php
            }
            //If there are records fetched, iterate through the data set
            if ($result->num_rows) {    
            while ($row = mysqli_fetch_assoc($result)) {
            //$cat = $row['Categoryid'];
        ?>
        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2><?php echo $row['Breed'] ?></h2>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-9">
                        <div class="col-lg-5 col-sm-5 col-xs-12 gin">
                            <ul class="col-lg-12" id="etalage">
                                <li class="etalage_thumb etalage_thumb_active">
                                    <img class="etalage_thumb_image" src="../<?php echo $row['Image'] ?>">
                                    <img class="etalage_source_image" src="../<?php echo $row['Image'] ?>">
                                </li>
                                <li class="etalage_thumb">
                                    <img class="etalage_thumb_image" src="../<?php echo $row['Image2'] ?>">
                                    <img class="etalage_source_image" src="../<?php echo $row['Image2'] ?>">
                                </li>
                                <li class="etalage_thumb">
                                    <img class="etalage_thumb_image" src="../<?php echo $row['Image3'] ?>">
                                    <img class="etalage_source_image" src="../<?php echo $row['Image3'] ?>">
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-sm-7 col-xs-12 wellz">
                        <form action="../account/addToCart.php?petID1=<?php echo $row['PetID'] ?>" method="post">
                                
                                <h1><?php echo $row['Breed'] ?></h1>
                                <h4><b>Category:</b> <?php echo $row['Category'] ?></h4>

                                <h1>P <?php echo $row['Price'] ?>.00</h1>
                                <h3>Quantity <input type="number" name="qty" class="qty" width="5px" min="1" max="<?php echo $row['Available'] ?>" size="10" required /></h3>
                                <hr>
                                <h4><b>Given Name:</b> <?php echo $row['PetName'] ?></h4>
                                <h4><b>Birthdate:</b> <?php echo $row['PetBirthdate'] ?></h4>
                                <h4><b>Sold By:</b> <?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?></h4>
                                <p><b>DELIVERED IN</b> <br>12-14 days for NCR, Cavite, Pampanga, Metro Iloilo, Metro Cebu, Metro CDO, Davao and Zamboanga; 14-18 days for Provincial</p>
                                <p><b>Quick Description:</b><br><?php echo $row['Description'] ?></p>
                                <hr>
                                <center>
                                    <!--<a href="include/addToCart.php" class="btn btn-stylish" role="button"><i class="fa fa-shopping-cart"></i>  Add to Cart</a>-->
                                    <button type="submit" class="btn btn-stylish"><i class="fa fa-shopping-cart"></i>  Add to Cart</button>
                                    <a href="../account/addToCart.php?petID2=<?php echo $row['PetID'] ?>" class="btn btn-stylish" role="button" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                </center>
                            </form>
                        </div>


                        <div class="col-lg-12">
                            <div class="panel-body">

                                <ul class="nav nav-tabs clearfix" role="tablist">
                                    <li role="presentation" class="active" id="tab1"><a href="#Description" aria-controls="Description" role="tab" data-toggle="tab" class="tab1">DESCRIPTION</a></li>
                                    <li role="presentation" id="tab2"><a href="#Addtnl" aria-controls="Addtnl" role="tab" data-toggle="tab" class="tab2">ADDITIONAL INFORMATION</a></li>
                                    <li role="presentation" id="tab3"><a href="#Reviews" aria-controls="Reviews" role="tab" data-toggle="tab" class="tab3">REVIEWS</a></li>
                                </ul>
                                <br />
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="Description">
                                        <p><?php echo $row['Description'] ?></p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Addtnl">
                                        <?php echo $row['PetName'] ?>
                                    </div>
                                    <?php
                                        }}
                                    ?>
                                    <div role="tabpanel" class="tab-pane fade" id="Reviews">
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <h4>Reviews:</h4>
                                                <?php
                                                                    if(isset($_GET['ID'])) {
                                                    $petID = $_GET['ID'];
                                                                    //Build the query to use to fetch records
                                                                    $query1 = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
                                                    a.Status, b.ReviewID, b.PetID, b.SuppliesID, b.UserID, b.ReviewTitle, b.Review, b.DateAdded, b.Status
                                                    FROM user a INNER JOIN review b ON a.UserID = b.UserID WHERE b.PetID=$petID AND b.Status='Approve'";
                                                                    //Fetch records from MySQL
                                                                    $result1 = $conn->query($query1); 
                                                                    if ($conn->error) {
                                                                    die("Query failed: " . $conn->error);
                                                                    }
                                                                    //If there are records fetched, iterate through the data set
                                                                    if ($result1->num_rows) {    
                                                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                                                        $_SESSION['pid'] = $row["PetID"];
                                                    
                                                        echo"<h5>" .$row1["FirstName"]. " " .$row1["LastName"]. "<small>  [" .$row1["DateAdded"] . "]</small></h5>" . $row1["Review"] . "<hr>";
                                                        }
                                                        } else {
                                                        echo "No reviews for this pet. Be the 1st to write a review.";
                                                        }}
                                                ?>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Comments Form -->
                                                <form action="processcomment.php" method="post">
                                                    <div class="form-group">
                                                        <label>Review Form:</label><br><br>
                                                        <input type="text" name="pID" value="<?php echo $petID ?>" hidden />
                                                        <textarea class="form-control" rows="3" input type="text" name="pReview" required placeholder="Tell us what you thought about it" class="input form-control"></textarea>
                                                        <input type="text" name="pTitle" size="30" required placeholder="Give your review a title" class=" form-control input" /><br>
                                                        <button type="submit" name="submitReview" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <h5>RELATED PETS</h5><br>
                        <?php
                            //Build the query to use to fetch records
                            $query2 = "SELECT a.PetID, a.CategoryID, a.Breed, a.Price, a.Available, PetBirthdate, a.Description, a.StatusID, a.UserID, 
                        a.PetName, a.Quantity, a.Reason, a.DateSold, a.Image, a.Image2, a.Image3, a.IsFeatured, b.CategoryID, 
                        b.Category, c.StatusID, c.Status FROM pet a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID 
                        INNER JOIN petstatus c ON a.StatusID = c.StatusID  WHERE a.IsFeatured='Yes' LIMIT 3";
                            
                            //Fetch records from MySQL
                            $result2 = $conn->query($query2); 
                            if ($conn->error) {
                            die("Query failed: " . $conn->error);
                            }
                            //If there are records fetched, iterate through the data set
                            if ($result2->num_rows) {    
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?>
                        <a href="petDetails.php?ID=<?php echo $row2['PetID'] ?>" style="text-decoration: none;">
                            <div class="hovereffect">
                                <center><img src="../<?php echo $row2['Image'] ?>" height="200px" alt=""></center>
                                <div class="overlay">
                                    <h2>Quick View</h2>
                                </div>
                            </div>
                        </a>
                        <div class=" text-center">
                            <?php
                                echo"<h3>" . $row2["Breed"] . "</h3>
                                <h4>P " . $row2["Price"] . ".00 </h4>";
                            ?>
                        </div>
                        <center>
                            <a href="../account/addToCart.php?petID1=<?php echo $row['PetID'] ?>" class="btn btn-stylish" role="button" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            <a href="../account/addToCart.php?petID2=<?php echo $row['PetID'] ?>" class="btn btn-stylish" role="button" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                        </center>
                        <br>
                        <?php
                            }
                            } else {
                            echo "No Related Pets.";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery.etalage.min.js"></script>
        <script>
            jQuery(document).ready(function($){
            $('#etalage').etalage({
            thumb_image_width: 250,
            thumb_image_height: 300,
            source_image_width: 900,
            source_image_height: 1200,
            show_hint: true
            });
            });
        </script>
        <?php
            include("../includeFooter.html");
        ?>
