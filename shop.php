        <?php
            //Connect to MySQL
            require_once("database/connect.php");
            //include the header
            $title="Pet Lane | Pet Supplies";
            include("include/header.php");
        ?>

        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>PET SUPPLIES</h2>

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="bg-primary" align="center">Categories</p>
                        <?php
                            //include the count
                            
                            include("include/countShop.php");
                        ?>
                        <!-- <div class="wellCategory"> -->
                        <ul class="list-group dropdown list-unstyled">
                            <li>
                                <a href="pets?ID=1" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Dog <span class="badge"><?php echo $dog; ?></span>
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $dog; ?></span></a> -->
                            </li>
                            <li>
                                <a href="pets?ID=2" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Cats <span class="badge"><?php echo $cat; ?></span>
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $docatg; ?></span></a> -->
                            </li>
                            <li>
                                <a href="pets?ID=3" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Fish <span class="badge"><?php echo $fish; ?></span>
                  
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $fish; ?></span></a> -->
                            </li>
                            <li>
                                <a href="pets?ID=4" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Birds <span class="badge"><?php echo $bird; ?></span>
                  
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $bird; ?></span></a> -->
                            </li>
                            <li>
                                <a href="pets?ID=5" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Horses <span class="badge"><?php echo $horse; ?></span>
                  
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $horse; ?></span></a> -->
                            </li>
                            <li>
                                <a href="pets?ID=6" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Invertebrates <span class="badge"><?php echo $invert; ?></span>
                  
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $invert; ?></span></a> -->
                            </li>
                            <li>
                                <a href="pets?ID=7" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Poultry <span class="badge"><?php echo $poultry; ?></span>
                  
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $poultry; ?></span></a> -->
                            </li>
                            <li>
                                <a href="pets?ID=8" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Rabbits <span class="badge"><?php echo $rabbit; ?></span>
                  
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $rabbit; ?></span></a> -->
                            </li>
                            <li>
                                <a href="pets?ID=9" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Reptiles <span class="badge"><?php echo $reptile; ?></span>
                  
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $reptile; ?></span></a> -->
                            </li>
                            <li>
                                <a href="pets?ID=10" class="btn btn-success form-control" role="button" title="Add to Cart">
                                    Rodents <span class="badge"><?php echo $rodent; ?></span>
                  
                                </a><!--class="btn list-group-item"-->
                                    <!-- Dogs
                                    <span class="badge"><?php echo $rodent; ?></span></a> -->
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Other Products</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <p class="bg-primary" align="center">Other Products</p>

                        <div class="col-sm-12">
                            <div class="row wellTools">
                            <form action="shop" method="get">
                                <div class="col-sm-3">
                                    <label>Sort by: </label>
                                    <?php 
                                        if (!isset($_GET['ID'])) {
                                            echo "<select name='displaySort1' class='btn btn-default'>";
                                        } else {
                                            echo "<select name='displaySort1' class='btn btn-default' disabled>";
                                        }
                                    ?>
                                    
                                        <option value="" style="display:none;">Select</option>
                                        <option value="1">
                        Position              </option>
                                        <option value="2">
                          Name                </option>
                                        <option value="3">
                            Price                </option>
                                    </select>
                                </div>
                                <div class="col-sm-offset-4 col-sm-5">
                                    <label>Display</label>
                                    <?php 
                                        if (!isset($_GET['ID'])) {
                                            echo "<select name='displaySort' class='btn btn-default'>";
                                        } else {
                                            echo "<select name='displaySort' class='btn btn-default' disabled>";
                                        }
                                    ?>
                                    
                                        <option value="" style="display:none;">Select</option>
                                        <option value="1" >
                              9                </option>
                                        <option value="2">
                                15                </option>
                                        <option value="3">
                                  30                </option>
                                    </select>
                                    <?php 
                                        if (!isset($_GET['ID'])) {
                                            echo "<INPUT TYPE='submit' class='btn btn-primary' name='submit' value='Show' />";
                                        } else {
                                            echo "<INPUT TYPE='submit' class='btn btn-primary' name='submit' value='Show' disabled/>";
                                        }
                                    ?>
                                    
                                </div>
                            </form>
                            </div>
                            <?php
                                $limit = 0;
                                $start=0;
                                $sort = "";
                                if (isset($_SESSION['sort1'])) {
                                    $sort = $_SESSION['sort1'];
                                    
                                } else {
                                    
                                    $sort = "suppliesid"; 
                                    
                                }

                                if (isset($_SESSION['limit'])) {
                                    
                                    $limit = $_SESSION['limit'];
                                } else {
                                    
                                    
                                    $limit = 8;
                                }
                           
                                if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $start=($id-1)*$limit;
                                }
                                else{
                                    $id=1;
                                }

                                $query = "";
                                

                                if(isset($_GET['ID']) == 1) { 
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";
                                } else if (isset($_GET['ID']) == 2) {
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";

                                } else if (isset($_GET['ID']) == 3) {
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";

                                } else if (isset($_GET['ID']) == 4) {
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";

                                } else if (isset($_GET['ID']) == 5) {
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";

                                } else if (isset($_GET['ID']) == 6) {
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";

                                } else if (isset($_GET['ID']) == 7) {
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";

                                } else if (isset($_GET['ID']) == 8) {
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";

                                } else if (isset($_GET['ID']) == 9) {
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";

                                } else if (isset($_GET['ID']) == 10) {
                                    $cattid=$_GET['ID'];
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' and a.categoryid='$cattid'";

                                }else {
                                    if (isset($_GET["submit"])) {
                                    
                                        $display1 = $_GET["displaySort1"];
                                        $display = $_GET["displaySort"];
                                        if ($display1 == 1) {
                                            $_SESSION['sort1'] = 'suppliescat';
                                            $sort = $_SESSION['sort1'];
                                        } else if ($display1 == 2) {
                                            $_SESSION['sort1'] = 'productname';
                                            $sort = $_SESSION['sort1'];
                                        } else if ($display1 == 3) {
                                            $_SESSION['sort1'] = 'price';
                                            $sort = $_SESSION['sort1'];
                                        }

                                        if ($display == 1) {
                                            $_SESSION['limit'] = 9;
                                            $limit=$_SESSION['limit'];
                                        } else if ($display == 2) {
                                            $_SESSION['limit'] = 15;
                                            $limit=$_SESSION['limit'];
                                        } else if ($display == 3) {
                                            $_SESSION['limit'] = 30;
                                            $limit=$_SESSION['limit'];
                                        }
                                                                                
                                    }
                                    $query = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' order by $sort LIMIT $start, $limit";
                                }
                                
                                $result = $conn->query($query); 
                                if ($conn->error) {
                                die("Query failed: " . $conn->error);
                                }
                                
                                
                                //If there are records fetched, iterate through the data set
                                if ($result->num_rows) {    
                                while ($row = mysqli_fetch_assoc($result)) {
                                
                            ?>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 thumbnail">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a href="include/productDetails.php?ID=<?php echo $row['SuppliesID'] ?>" style="text-decoration: none;">
                                        <div class="hovereffect">
                                            <img src="<?php echo $row['Image'] ?>" class="img-responsive zoom-img" alt="">
                                            <div class="overlay">
                                                <h2>Quick View</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class=" text-center">
                                    <?php
                                        echo"<h3>" . $row["ProductName"] . "</h3>
                                        <h4>P " . $row["Price"] . "</h4>";
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
                                  echo "No Pets.";
                                }
                                
                                
                            ?>
                        </div>
                        <?php

                            if(!isset($_GET['ID'])) { 
                                $paging = "SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE IsFeatured='Yes' order by $sort";

                                //fetch all the data from database.
                            $rows=mysqli_num_rows(mysqli_query($conn,$paging));
                            //calculate total page number for the given table in the database 
                            $total=ceil($rows/$limit);
                        ?>
                        <div class="col-sm-offset-4 col-sm-8">
                            <ul class="pagination" align="center">
                            <?php if($id>1)
                                {
                                    //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
                                    echo "<li><a href='?id=".($id-1)."'>&laquo;</a></li>";
                                }

                                //show all the page link with page number. When click on these numbers go to particular page. 
                                for($i=1;$i<=$total;$i++) {
                                    if($i==$id) { 
                                        echo "<li class='active'><a href='#'>".$i."</a></li>"; 
                                    }   else { 
                                        echo "<li><a href='?id=".$i."'>".$i."</a></li>"; 
                                    }
                                }
                                
                                if($id!=$total) {
                                    ////Go to previous page to show next 10 items.
                                    echo "<li><a href='".($id-1)."'>&raquo;</a></li>";
                                }

                            ?>
                                
                            </ul>
                        </div>
                        <?php
                            } 
                        ?>
                        
                    </div>
                </div>
                <!--</div>-->
            </div>
        </section>
        <?php
            include("html/footer.html");
        ?>
