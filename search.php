        <?php
            // Connect to MySQL
            require_once ("database/connect.php");
            // include the header
            $title="Pet Lane | Search Results";
            include ("include/header.php");
        ?>
        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>SEARCH RESULTS</h2>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <?php
                    if($_POST ["searchQuery"] == NULL){
                ?>
                <script>
                    alert('Empty search field, you are searching for nothing.');
                    window.location.href='index.php';
                </script>
                <?php
                    }else{
                    $q = $_POST ["searchQuery"];
                    }                             
                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <p class="panel-title">
Search Results for "<span id="searchQuery"><font color="#292929"><b><?php echo $q; ?></b></font></span>"
                                </p>
                            </div>
                            <div class="panel-body">
                                <ul class="breadcrumb">
                                    <span class="label label-default">Recommended searches</span>
                                    <li><a href="#">&nbsp;&nbsp;Accessories</a></li>
                                    <li><a href="#">Cat</a></li>
                                    <li class="active">German Sheperd</li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <span class="label label-default">
                                            <?php 
                                                $petCount = "SELECT COUNT(a.PetID) as PetCountResult FROM pet a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID 
                                    INNER JOIN petstatus c ON a.StatusID = c.StatusID  WHERE  
                                    b.category like '%$q%' or c.status like '%$q%' or a.petname like '%$q%' or a.breed like '%$q%' 
                                    or a.price like '%$q%' or a.description like '%$q%' order by a.petid limit 10;";
                                    $resultPetCount = mysqli_query($conn, $petCount);
                                    while($row = $resultPetCount->fetch_assoc()) {
                                        $petResultCount = $row['PetCountResult'];
                                    }
                                            ?>
                                            <?php 
                                                $suppliesCount = "SELECT COUNT(a.SuppliesID) as SuppliesCountResult FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE 
                                    b.category like '%$q%' or a.productname like '%$q%'  or a.price like '%$q%' or a.description like '%$q%' order by a.suppliesid limit 10;";
                                    $resultSuppliesCount = mysqli_query($conn, $suppliesCount);
                                    while($row = $resultSuppliesCount->fetch_assoc()) {
                                        $suppliesResultCount = $row['SuppliesCountResult'];
                                    }
                                            ?>
                                            <?php 
                                                $totalSearchCount = $suppliesResultCount + $petResultCount;
                                                echo $totalSearchCount;
                                            ?> results found</span> </br>
</br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <hr>
                                        <div class="col-sm-6">
                                            <p>
                                            
                                            Results from pets &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-default"><?php echo $petResultCount; ?> results found</span> </p></br>
</br>
                                        </div>
                                        <div class="col-sm-offset-4 col-sm-2">
                                            <span class="label label-info"><a href="pets.php">See all pets</a></span>
</br> </br>
                                        </div>


                                    </div>
                                </div>
                                <hr>

                                <?php
                                    //Build the query to use to fetch records
                                    $queryPet = "SELECT a.PetID, a.CategoryID, a.Breed, a.Price, a.Available, PetBirthdate, a.Description, a.StatusID, a.UserID, 
                                    a.PetName, a.Quantity, a.Reason, a.DateSold, a.Image, a.Image2, a.Image3, a.IsFeatured, b.CategoryID, 
                                    b.Category, c.StatusID, c.Status FROM pet a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID 
                                    INNER JOIN petstatus c ON a.StatusID = c.StatusID  WHERE  
                                    b.category like '%$q%' or c.status like '%$q%' or a.petname like '%$q%' or a.breed like '%$q%' 
                                    or a.price like '%$q%' or a.description like '%$q%' order by a.petid limit 10;";
                                    
                                    //Fetch records from MySQL
                                    $result = $conn->query($queryPet); 
                                    if ($conn->error) {
                                    die("Query failed: " . $conn->error);
                                    }

                                    //If there are records fetched, iterate through the data set
                                    if ($result->num_rows) {    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    $petid = $row['PetID'];
                                    $petimage = $row['Image'];
                                    
                                    $petcategory = $row['Category'];
                                    $breed = $row['Breed'];
                                    $petprice = $row['Price'];
                                    $petdescription = $row['Description'];
                                    $petname = $row['PetName'];
                                    $status = $row['Status'];
                                    
                                    $b_petcategory = '<mark>'.$q.'</mark>';
                                    $b_petname = '<mark>'.$q.'</mark>';
                                    $b_petprice = '<mark>'.$q.'</mark>';
                                    $b_petdescription = '<mark>'.$q.'</mark>';
                                    $b_breed = '<mark>'.$q.'</mark>';
                                    $b_status = '<mark>'.$q.'</mark>';
                                    
                                    $final_petname = str_ireplace($q, $b_petname, $petname);
                                    $final_petcategory = str_ireplace($q, $b_petcategory, $petcategory);        
                                    $final_petprice = str_ireplace($q, $b_petprice, $petprice);
                                    //optional?
                                    $final_petdescription = str_ireplace($q, $b_petdescription, $petdescription);
                                    $final_breed = str_ireplace($q, $b_breed, $breed);
                                    $final_status = str_ireplace($q, $b_status, $status);
                                ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 thumbnail">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="include/petDetails.php?ID=<?php echo $row['PetID'] ?>" style="text-decoration: none;">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="<?php echo $row['Image'] ?>" alt="">
                                                <div class="overlay">
                                                    <h2>Quick View</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=" text-center">
                                        <?php
                                            echo"<h3>" . $final_breed . "</h3>
                                            <h4>P " . $final_petprice . ".00 </h4>";
                                        ?>
                                    </div>

                                    <center>
                                        <a href="account/addToCart.php?ID=<?php echo $row['PetID'] ?>" class="btn btn-stylish" role="button" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="include/addToCart.php" class="btn btn-stylish" role="button" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    </center>
                                    <br>
                                </div>
                                <?php
                                    }
                                    } else {
                                    echo "Nothing found.";
                                    }
                                    
                                ?>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <hr>
                                        <div class="col-sm-6">
                                            <p>
                                            Results from products &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-default"><?php echo $suppliesResultCount; ?> results found</span> </p></br>
</br>
                                        </div>
                                        <div class="col-sm-offset-4 col-sm-2">
                                            <span class="label label-info"><a href="shop.php">See all products</a></span>
</br> </br>
                                        </div>


                                    </div>
                                </div>
                                <hr>

                                <?php
                                    //Build the query to use to fetch records
                                    $queryProduct = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE 
                                    b.category like '%$q%' or a.productname like '%$q%'  or a.price like '%$q%' or a.description like '%$q%' order by a.suppliesid limit 10;";
                                    
                                    //Fetch records from MySQL
                                    $resultProduct = $conn->query($queryProduct); 
                                    if ($conn->error) {
                                    die("Query failed: " . $conn->error);
                                    }
                                    
                                    //If there are records fetched, iterate through the data set
                                    if ($resultProduct->num_rows) {    
                                    while ($row = mysqli_fetch_assoc($resultProduct)) {
                                    
                                    $productid = $row['SuppliesID'];
                                    $productimage = $row['Image'];
                                    
                                    $productcategory = $row['Category'];
                                    $productname = $row['ProductName'];
                                    $productprice = $row['Price'];
                                    $productdescription = $row['Description'];
                                    
                                    $b_productcategory = '<mark>'.$q.'</mark>';
                                    $b_productname = '<mark>'.$q.'</mark>';
                                    $b_productprice = '<mark>'.$q.'</mark>';
                                    $b_productdescription = '<mark>'.$q.'</mark>';
                                    
                                    $final_productname = str_ireplace($q, $b_productname, $productname);
                                    $final_productcategory = str_ireplace($q, $b_productcategory, $productcategory);        
                                    $final_productprice = str_ireplace($q, $b_productprice, $productprice);
                                    //optional?
                                    $final_productdescription = str_ireplace($q, $b_productdescription, $productdescription);
                                ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 thumbnail">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="include/productDetails.php?ID=<?php echo $productid ?>" style="text-decoration: none;">
                                            <div class="hovereffect">
                                                <img src="<?php echo $productimage ?>" class="img-responsive zoom-img" alt="">
                                                <div class="overlay">
                                                    <h2>Quick View</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class=" text-center">
                                        <?php
                                            echo"<h3>" . $final_productname . "</h3>
                                            <h4>P " . $final_productprice . ".00 </h4>";
                                        ?>
                                    </div>

                                    <center>
                                        <a href="account/addToCart.php?ID=<?php echo $row['SuppliesID'] ?>" class="btn btn-stylish" role="button" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="include/addToCart.php" class="btn btn-stylish" role="button" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    </center>
                                    <br>
                                </div>
                                <?php
                                    }
                                    } else {
                                    echo "Nothing found.";
                                    }
                                    
                                    $conn->close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</br>
        </section>

        <?php
            include ("html/footer.html");
        ?>
