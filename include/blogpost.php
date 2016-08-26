        <?php
            
            //Connect to MySQL
                    require_once("../database/connect.php");
                    //include the header
                    $title="Pet Lane | Blog Details";
                    include("../includeHeader.php");
        ?>

        <section>
            <div class="container">

                <div class="col-lg-12 heading text-center">
                    <h2>BLOG</h2>
                </div>
                <div class="container">

                    <div class="row">

                        <!-- Blog Entries Column -->
                        <div class="col-md-8">

                            <!-- First Blog Post -->
                            <?php
                                //Build the query to use to fetch records
                                $ID = $_GET["ID"];
                                
                                $query = "SELECT blog.BlogID, blog.UserID, blog.Image, user.FirstName, user.LastName, user.Photo, blog.Title, blog.Content, blog.DateAdded, blog.Status FROM user INNER JOIN blog ON blog.UserID = user.UserID WHERE blog.BlogID = '$ID'";
                                
                                $query2 = "SELECT CommentID, BlogID, User, Comment, DateAdded, Status FROM comment WHERE BlogID = '$ID' AND Status='Approve'";
                                
                                //Fetch records from MySQL
                                $result = $conn->query($query); 
                                if ($conn->error) {
                                  die("Query failed: " . $conn->error);
                                }
                                
                                
                                //If there are records fetched, iterate through the data set
                                if ($result->num_rows) {    
                                  while ($row = mysqli_fetch_assoc($result)) {
                                $_SESSION['blogID'] = $row["BlogID"];
                            ?>

                            <div class=" text-left">

                                <h2><?php echo $row['Title'] ?></h2>
                                <img class="img-responsive" src="../<?php echo $row['Image'] ?>" alt="">
                                <br>
                                <div class="media-left">
                                    <img class="media-object img-circle" src="../<?php echo $row['Photo'] ?>" alt="" style="width: 64px; height: 64px;">
                                </div>
                                <div class="media-body "><br>
                                    <p>By <b><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?> <br><?php echo $row['DateAdded'] ?></b></p>
                                </div>
                                <hr>
                                <p><?php echo $row["Content"] ?></p>
                            </div>

                            <?php
                                }
                                } else {
                                  echo "No blog to show.";
                                
                                }
                            ?>

                            <hr>
                            <h2>Leave a comment</h2>
                            <!-- Comments Form -->
                                <form action="processcomment.php" method="post" enctype="multipart/form-data">


                                    <div class="form-group">
                                        <label class="control-label col-lg-1">Name: </label>

                                        <div class="col-lg-11">
                                            <input type="hidden" name="BlogID" value="<?php echo $ID?>" />
                                            <input type="text" name="User" size="30" required placeholder="" class=" form-control input" />
                                            <textarea class="form-control" rows="3" input type="text" name="Comment" required placeholder="leave a comment here" class="input form-control"></textarea>
                                            <button type="submit" name="submitAdd" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            
                                <?php
                                    $result2 = $conn->query($query2); 
                                               //If there are records fetched, iterate through the data set
                                               if ($result2->num_rows) {    
                                                 while ($row = mysqli_fetch_assoc($result2)) {
                                    
                                ?>
                            <hr>
                                <div class="col-lg-6">
                                    <hr>
                                    <h4><?php echo $row['User'] ?><small> <?php echo $row['DateAdded'] ?></small></h4>
                                    <p><?php echo $row['Comment'] ?></p>
                                </div>
                                <?php
                                    }
                                    } else {
                                      echo "<br><hr><h3><center>No comments to show.</center><h3>";
                                    }
                                ?>
                        </div>
                        <div class="col-lg-4">

                            <!-- Blog Categories Well -->
                            <div class="well">
                                <h4>Recent Blogs</h4>
                                <hr>
                                <ul class="list-unstyled">
                                    <?php
                                        //Build the query to use to fetch records
                                        $query3 = "SELECT blog.BlogID, blog.Image, blog.Title, blog.DateAdded, user.FirstName, user.LastName 
                                        FROM user INNER JOIN blog ON blog.UserID = user.UserID WHERE blog.Status='Approve' LIMIT 5"; 
                                        
                                        //Fetch records from MySQL
                                        $result3 = $conn->query($query3); 
                                        if ($conn->error) {
                                          die("Query failed: " . $conn->error);
                                        }
                                        //If there are records fetched, iterate through the data set
                                        if ($result3->num_rows) {    
                                          while ($row3 = mysqli_fetch_assoc($result3)) {
                                        
                                    ?>
                                    <li>
                                        <div class="media-left">
                                            <img class="media-object" src="../<?php echo $row3['Image'] ?>" alt="" style="width: 64px; height: 64px;">
                                        </div>

                                        <div class="media-body ">
                                            <a href="blogpost.php?ID=<?php echo $row3['BlogID'] ?>">
                                                <p class="media-heading"><?php echo $row3['Title'] ?></p></a>
                                            <p class="media-heading"><?php echo $row3['DateAdded'] ?></p>
                                        </div>
                                    </li>
                                    <br>
                                    <?php
                                        }
                                        } else {
                                          echo "No recent blog.";
                                        }
                                        
                                    ?>
                                </ul>
                                <!-- /.row -->
                            </div>

                            <!-- Side Widget Well -->
                            <div class="well">
                                <h4>Pet Lane</h4>
                                <p>In-New-Vator created a website where you can view information regarding pet food, fashion, training and grooming of pets and adoptions. Through (this website) you can find the most effective items for your beloved pets and build social relationship among people who share interests, activities and backgrounds in keeping pets. </p>
                            </div>
                        </div>

                    </div>

                </div>
        </section>

        <?php
            include("../includeFooter.html");
        ?>
