<?php
         include("requiredLogin.php");
    //include the header
    include("includeHeader.php");
    $qid = $_SESSION['userid'];     

/*    include("requiredLogin.php");
    //Connect to MySQL
    require_once("../database/connect.php");
    
                   $userlistidone = $_SESSION['userlistidone']; // doctor
                   $userlistidtwo = $_SESSION['userlistid']; // user
                    $date = $_POST["date"];
                   $reason = $_POST["reason"];
                   $oras = $_POST["time"];
                  $ngayon = getdate();
                  $insert = "INSERT INTO appointment(useroneid,usertwoid,date,time,reason,dateadded) VALUES($userlistidone,$userlistidtwo,'$date','$oras','$reason',NOW())";
    
                    if ($conn->query($insert) === TRUE) {          //Check if operation was successful
                    $message = "Created user with ID: " . $conn->insert_id;
                     } else {
                            die ("Insert failed: ". $conn->error);      //Retrieve any error in the operation
                    }
    
    
                      echo "$date";*/


 ?>

<section>
    <div class="container">
        <div class="col-lg-12 heading text-center"><br>
            <h2>Add Appointment</h2>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <?php include("navigation.php");?>
                <div class="col-lg-9">
                     <div class="panel panel-success">
                        <div class="panel-heading" align="center"><h4><b></b></h4></div>
                        <div class="panel-body">
                            <form role="form" action="addappointment2.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <input type="text" name="userListID" value="<?php echo $row['UserListID'] ?>" hidden />

                                  <div class="form-group">
                                    <label class="control-label col-lg-3">User</label>
                                    <div class="col-lg-8">
                                        <select name="user">
                                          <?php
                                             $query = "SELECT UserID, FirstName, LastName FROM User";
                                            $result = $conn->query($query);
                                            if($result->num_rows)
                                            {
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                $userid = $row["UserID"];
                                                    $lastname = $row["LastName"]; 
                                                   $firstname = $row["FirstName"];
                                                echo "<option value='$userid'>";
                                                echo "$firstname $lastname";
                                                echo "</option>";
                                                }
                                            }
                                          ?>
                                          
                                           
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-3">Date</label>
                                    <div class="col-lg-8">
                                        <input  type="date" name="date" required class="form-first-name form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Time</label>
                                    <div class="col-lg-8">
                                        <input   type="time" name="time" required  class="form-last-name form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Reason</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="reason" required   class="form-last-name form-control" >
                                    </div>
                                </div>
                               
                               
                                <div class="form-group">
                                    <center>
                                        <input type="submit" name="updateProfile" class="btn btn-outline" value="Set Appointment" />
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

    <div class="scroll-top page-scroll hidden-lg hidden-md" style="display: block;">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>