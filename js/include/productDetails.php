       <?php
            //Connect to MySQL
            require_once("../database/connect.php");
            //include the header
            $title="Pet Lane | Product Details";
            include("../includeHeader.php");
        ?>
        <?php
            if(isset($_GET['ID'])) {
            $productID = $_GET['ID'];
            //Build the query to use to fetch records
            $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, 
            a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category 
            FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE a.SuppliesID=$productID";
            //Fetch records from MySQL
            $result = $conn->query($query); 
            if ($conn->error) {
            die("Query failed: " . $conn->error);
            }
            } else {
        ?>
        <script>
            window.location.href='../shop.php';
        </script>
        <?php
            }
            //If there are records fetched, iterate through the data set
            if ($result->num_rows) {    
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2></h2>
                </div>
                    <br><br><br>
                    <div class="col-lg-9">
                        <div class="col-lg-5">
                            <ul id="etalage">
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
                        <form action="../account/addToCart.php?suppliesID1=<?php echo $row['SuppliesID'] ?>" method="post">
                            <h1><?php echo $row['ProductName'] ?></h1>
                            <h4><b>Category: For </b> <?php echo $row['Category'] ?></h4>
                            <h1>P <?php echo $row['Price'] ?>.00</h1>
                            <h3>Quantity <input type="number" name="qty" class="qty" width="5px" min="1" max="10" size="10" required/></h3>
                            <p><b>DELIVERED IN</b> <br>12-14 days for NCR, Cavite, Pampanga, Metro Iloilo, Metro Cebu, Metro CDO, Davao and Zamboanga; 14-18 days for Provincial</p>
                            <p><b>Quick Description:</b><br><?php echo $row['Description'] ?></p>
                            <hr>
                            <center>
                                <button type="submit" class="btn btn-stylish"><i class="fa fa-shopping-cart"></i>  Add to Cart</button>
                                <a href="../account/addToCart.php?suppliesID2=<?php echo $row['SuppliesID'] ?>" class="btn btn-stylish" role="button" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
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
                                        <?php echo $row['ProductName'] ?>
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
                                                    $productID = $_GET['ID'];
                                                                    //Build the query to use to fetch records
                                                                    $query1 = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
                                                                    a.Status, b.ReviewID, b.PetID, b.SuppliesID, b.UserID, b.ReviewTitle, b.Review, b.DateAdded, b.Status
                                                                    FROM user a INNER JOIN review b ON a.UserID = b.UserID WHERE b.SuppliesID=$productID AND b.Status='Approve'";
                                                                    //Fetch records from MySQL
                                                                    $result1 = $conn->query($query1); 
                                                                    if ($conn->error) {
                                                                    die("Query failed: " . $conn->error);
                                                                    }
                                                                    //If there are records fetched, iterate through the data set
                                                                    if ($result1->num_rows) {    
                                                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                                    
                                                        echo"<h5>" .$row1["FirstName"]. " " .$row1["LastName"]. "<small>  [" .$row1["DateAdded"] . "]</small></h5>" . $row1["Review"] . "<hr>";
                                                        }
                                                        } else {
                                                        echo "No reviews for this pet. Be the 1st to write a review.";
                                                        }}
                                                ?>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Comments Form -->
                                                <form action="processcomment.php" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="text" name="Name" size="30" required placeholder="Your Name" class=" form-control input" />
                                                        <textarea class="form-control" rows="3" input type="text" name="Review" required placeholder="Tell us what you thought about it" class="input form-control"></textarea>
                                                        <input type="text" name="Title" size="30" required placeholder="Give your review a title" class=" form-control input" />
                                                        <button type="submit" name="submitAdd" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <h6>RELATED OTHER PRODUCTS</h6><br>
                        <?php
                            //Build the query to use to fetch records
                            $query2 = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, 
                            a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a 
                            INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' LIMIT 3";
                            //Fetch records from MySQL
                            $result2 = $conn->query($query2); 
                            if ($conn->error) {
                              die("Query failed: " . $conn->error);
                            }
                            //If there are records fetched, iterate through the data set
                            if ($result2->num_rows) {    
                              while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?>
                        <a href="productDetails.php?ID=<?php echo $row2['SuppliesID'] ?>" style="text-decoration: none;">
                            <div class="hovereffect">
                                <center><img src="../<?php echo $row2['Image'] ?>" class="img-responsive zoom-img" height="100px" alt=""></center>
                                <div class="overlay">
                                    <h2>Quick View</h2>
                                </div>
                            </div>
                        </a>
                        <div class=" text-center">
                            <?php
                                echo"<h3>" . $row2["ProductName"] . "</h3>
                                <h4>P " . $row2["Price"] . ".00 </h4>";
                            ?>
                        </div>
                        <center>
                            <a href="../account/addToCart.php?suppliesID1=<?php echo $row['SuppliesID'] ?>" class="btn btn-stylish" role="button" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                            <a href="../account/addToCart.php?suppliesID2=<?php echo $row['SuppliesID'] ?>" class="btn btn-stylish" role="button" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                        </center>
                        <br>
                        <?php
                            }
                            } else {
                              echo "No Related Pets.";
                            }
                            
                            $conn->close();
                        ?>
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
