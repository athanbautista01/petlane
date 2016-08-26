        <?php
            //Connect to MySQL
            require_once("database/connect.php");
            //include the header
            $title="Pet Lane";
            include("include/header.php");
        ?>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="col-lg-12 text-center">

                    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive img-full" src="images/wikipets/Pets.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="images/wikipets/Pets3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="images/wikipets/Pets1.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span> </a>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>FEATURED PETS</h2>
                </div>
                <div class="row">
                    <?php
                        //Build the query to use to fetch records
                        $query = "SELECT a.PetID, a.CategoryID, a.Breed, a.Price, a.Available, PetBirthdate, a.Description, a.StatusID, a.UserID, 
                        a.PetName, a.Quantity, a.Reason, a.DateSold, a.Image, a.Image2, a.Image3, a.IsFeatured, b.CategoryID, 
                        b.Category, c.StatusID, c.Status FROM pet a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID 
                        INNER JOIN petstatus c ON a.StatusID = c.StatusID  WHERE a.IsFeatured='Yes' LIMIT 4";
                        
                        //Fetch records from MySQL
                        $result = $conn->query($query); 
                        if ($conn->error) {
                          die("Query failed: " . $conn->error);
                        }
                        
                        
                        //If there are records fetched, iterate through the data set
                        if ($result->num_rows) {    
                          while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 thumbnailindex">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="include/petDetails.php?ID=<?php echo $row['PetID'] ?>" style="text-decoration: none;">
                                <div class="hovereffect">
                                    <img class="img-responsive" src="<?php echo $row['Image'] ?>" alt="">
                                    <div class="overlay">
                                        <img class="img-responsive" src="<?php echo $row['Image2'] ?>" alt="">
                                        <h2>Quick View</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=" text-center">
                            <?php
                                        echo"<h3>" . $row["Breed"] . "</h3>
                                        <h4>P " . $row["Price"] . ".00 </h4>
                                        <div class='stat'><p>STATUS: " .$row["Status"]. "</p></div> ";
                                    ?>
                        </div>

                        <center>
                                    <a href="account/addToCart?petID1=<?php echo $row['PetID'] ?>" class="btn btn-stylish" role="button" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="account/addToCart?petID2=<?php echo $row['PetID'] ?>" class="btn btn-stylish" role="button" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                </center>
                        <br>
                    </div>
                    <?php
                        }
                        } else {
                          echo "No Featured Pets.";
                        }
                    ?>
                </div>
                <br>
                <div class="col-lg-12 heading text-center">
                    <h2>FEATURED ACCESSORIES</h2>
                </div>
                <div class="row">
                    <?php
                                  //Build the query to use to fetch records
                          $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' LIMIT 4";
                          
                          $result = $conn->query($query); 
                          if ($conn->error) {
                            die("Query failed: " . $conn->error);
                        }
                        
                        
                                  //If there are records fetched, iterate through the data set
                        if ($result->num_rows) {    
                            while ($row = mysqli_fetch_assoc($result)) {
                        
                    ?>


                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 thumbnail">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a href="include/productDetails.php?ID=<?php echo $row['SuppliesID'] ?>" style="text-decoration: none;">
                                        <div class="hovereffect">
                                            <center><img src="<?php echo $row['Image'] ?>" class="img-responsive zoom-img" alt=""><center>
                                            <div class="overlay">
                                                <img src="<?php echo $row['Image2'] ?>" class="img-responsive zoom-img" alt="">
                                                <h2>Quick View</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class=" text-center">
                                    <?php
                                        echo"<h3>" . $row["ProductName"] . "</h3>
                                        <h4>P " . $row["Price"] . " </h4>";
                                    ?>
                                </div>

                                <center>
                                    <a href="account/addToCart?suppliesID1=<?php echo $row['SuppliesID'] ?>" class="btn btn-stylish" role="button" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="account/addToCart?suppliesID2=<?php echo $row['SuppliesID'] ?>" class="btn btn-stylish" role="button" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                </center>
                                <br>
                            </div>
                    <?php
                              }
                          } else {
                            echo "No Other Products.";
                        }
                        
                        $conn->close();
                    ?>
                </div>
            </div>
        </section>
        <?php
            include("include/footer.html");
        ?>
