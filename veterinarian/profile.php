<?php
    //Connect to MySQL and validate userid
            include("requiredLogin.php");
    //include the header
    include("includeHeader.php");
    $qid = $_SESSION['userid']
?>
<?php
    //Build the query to use to fetch records
            $query = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
            a.Status,b.UserListID, b.UserTypeID, b.Password, b.Username, b.Email, b.DateAdded
            FROM user a INNER JOIN userlist b ON a.UserListID = b.UserListID WHERE a.UserID=$qid";
            //Fetch records from MySQL
            $result = $conn->query($query); 
            if ($conn->error) {
              die("Query failed: " . $conn->error);
            }
            //If there are records fetched, iterate through the data set
            if ($result->num_rows) {    
              while ($row = mysqli_fetch_assoc($result)) { 
?>

<section>
    <div class="container">
        <div class="col-lg-12 heading text-center"><br>
            <h2>Welcome, <?php echo $_SESSION['firstName'] ?>!</h2>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <?php include("navigation.php");?>
                <div class="col-lg-9">
                    <div class="panel panel-success">
                        <div class="panel-heading" align="center"><h4><b></b></h4></div>
                        <div class="panel-body">
                            <div class="col-lg-5">
                                <img class="img-thumbnail" src="../<?php echo $row['Photo'] ?>" alt="">
                                <form role="form" action="updateDP.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-group"><br>
                                        <div class="col-lg-12 text-center">
                                            <input class="form-control input" type="file" name="image" id="image" />
                                            <input type="submit" name="updateDP" class="btn btn-outline" value="Update Display Picture" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-7">
                                <h2><?php echo $row['FirstName'] ?> <?php echo $row['LastName'] ?></h2>
                                <h3>Address: <?php echo $row['Address'] ?></h3>
                                <h3>Contact: <?php echo $row['ContactNo'] ?></h3>
                                <h3>Additional Informations: <?php echo $row['AdditionalInfo'] ?></h3>
                                <h3>Date Registered: <?php echo $row['DateAdded'] ?></h3>
                                <hr>
                                <h3>Email: <?php echo $row['Email'] ?></h3>
                                <h3>Username: <?php echo $row['Username'] ?></h3>
                            </div>
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
    <div class="scroll-top page-scroll hidden-lg hidden-md" style="display: block;">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
