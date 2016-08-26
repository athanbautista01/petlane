        <?php
            //include("requiredLogin.php");
            //Connect to MySQL
            require_once("../database/connect.php");
            //include the header
            $title="Pet Lane | Edit Profile";
            include("../includeHeader.php");
            $qid = $_SESSION['userid'];
        ?>

        <?php
            if(isset($_GET['ID'])) {
            $userID = $_GET['ID'];
            //Build the query to use to fetch records
            $query = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
            a.Status,b.UserListID, b.UserTypeID, b.Password, b.Username, b.Email, b.DateAdded
            FROM user a INNER JOIN userlist b ON a.UserListID = b.UserListID WHERE a.UserID=$userID";
            //Fetch records from MySQL
            $result = $conn->query($query); 
            if ($conn->error) {
            die("Query failed: " . $conn->error);
            }
            }
            else {
        ?>
        <script>
            window.location.href='../profile.php';
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
                    <h2>Edit Profile</h2>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <ul class="list-group ">
                                <li class="list-group-item"><a href="../profile.php">My Account</a></li>
                                <li class="list-group-item active">Edit Profile</li>
                                <li class="list-group-item"><a href="../sellpet.php">Sell Pet</a></li>
                                <li class="list-group-item"><a href="createBlog.php">Create Blog</a></li>
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
                                    <form role="form" action="updateProfile.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <input type="text" name="userListID" value="<?php echo $row['UserListID'] ?>" hidden />
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">First name</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="formFirstName" value="<?php echo $row['FirstName'] ?>" class="form-first-name form-control" id="formFirstName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Last name</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="formLastName" value="<?php echo $row['LastName'] ?>" class="form-last-name form-control" id="formLastName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Address</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="formAddress" value="<?php echo $row['Address'] ?>" class="form-address form-control" id="formAddress">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Contact Number</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="formContact" value="<?php echo $row['ContactNo'] ?>" class="form-contact form-control" id="formContact">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Email</label>
                                            <div class="col-lg-8">
                                                <input type="email" name="formEmail" value="<?php echo $row['Email'] ?>" class="form-email form-control" id="formEmail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Username</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="formUsername" value="<?php echo $row['Username'] ?>" class="form-username form-control" id="formUsername">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Password</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="formPassword" value="<?php echo $row['Password'] ?>" class="form-password form-control" id="formPassword">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <center>
                                                <input type="submit" name="updateProfile" class="btn btn-outline" value="Update" />
                                                <a class="btn btn-outline" href="../profile.php">Cancel</a></center>
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
            }}
        ?>
        <?php
            include("../includeFooter.html");
        ?>
