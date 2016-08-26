        <?php
            //Connect to MySQL
            require_once("database/connect.php");
            //include the header
            $title="Pet Lane | Blog";
            include("include/header.php");
        ?>

        <section>
            <div class="container">

                <div class="col-lg-12 heading text-center">
                    <h2>BLOG</h2>
                </div>
                <div class="col-lg-12">
                        <?php
                            //Build the query to use to fetch records
                            $query = "SELECT blog.BlogID, blog.Image, blog.Title, blog.DateAdded, user.FirstName, user.LastName 
                            FROM user INNER JOIN blog ON blog.UserID = user.UserID WHERE blog.Status='Approve'"; 
                            
                            //Fetch records from MySQL
                            $result = $conn->query($query); 
                            if ($conn->error) {
                              die("Query failed: " . $conn->error);
                            }
                            //If there are records fetched, iterate through the data set
                            if ($result->num_rows) {    
                              while ($row = mysqli_fetch_assoc($result)) {
                            
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <br>
                            <div class="z text-center">
                                <a href="include/blogpost.php?ID=<?php echo $row['BlogID'] ?>">
                                <img class="img-responsive" src="<?php echo $row['Image'] ?>" alt="">
                                <h3><?php echo $row['DateAdded'] ?></h3>
                                <h5><?php echo $row['Title'] ?></h5>
                                <p>By <b><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?> </b>
                                </p></a>
                            </div>
                            <br>
                        </div>
                        <?php
                            }
                            } else {
                              echo "No blog to show.";
                            }
                            
                        ?>
                        <div class="col-lg-12">
                            <!-- Pager -->
                            <ul class="pager">
                                <li class="previous">
                                    <a href="#">&larr; Older</a>
                                </li>
                                <li class="next">
                                    <a href="#">Newer &rarr;</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </section>

        <?php
            include("include/footer.html");
        ?>
