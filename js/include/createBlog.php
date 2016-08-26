        <?php
            //include("requiredLogin.php");
            //Connect to MySQL
            require_once("../database/connect.php");
            //include the header
            $title="Pet Lane | Create Blog";
            include("../includeHeader.php");
            $qid = $_SESSION['userid'];
        ?>

        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>Create Blog</h2>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="../profile.php">My Account</a></li>
                                <li class="list-group-item"><a href="editprofile.php?ID=<?php echo $qid ?>">Edit Profile</li>
                                <li class="list-group-item"><a href="../sellpet.php">Sell Pet</a></li>
                                <li class="list-group-item active">Create Blog</li>
                                <li class="list-group-item"><a href="viewappointment.php">View Appointment</a></li>
                                <li class="list-group-item"><a href="../account/cart.php">My Cart</a></li>
                                <li class="list-group-item"><a href="../account/wishlist.php">My Wishlist</a></li>
                                <li class="list-group-item"><a href="../account/pending.php">Orders & Tracking</a></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-9">
                            <div class="panel panel-success">
                                <div class="panel-heading" align="center"><h4><b></b></h4></div>
                                <div class="panel-body">
                                    <br>
                                <form action="uploadBlog.php" method="post" enctype="multipart/form-data">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Image</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control input" required type="file" name="image" id="image" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Title</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" name="title" size="30" required placeholder="Enter title of your blog" class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Content</label>
                                                            <div class="col-lg-10">
                                                                <textarea class="input form-control" rows="5" type="text" name="content" required placeholder="Input here the the content of your blog" class="input form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <hr>
                                                        <center>
                                                            <div class="form-group">
                                                                <input type="submit" name="submitAdd" value="Create Blog" class="btn btn-outline" />
                                                                <a class="btn btn-outline" href="index.php">Cancel</a>
                                                            </div>
                                                        </center>
                                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <?php
            include("../includeFooter.html");
        ?>
