        <?php
            //Connect to MySQL
            require_once("../database/connect.php");
            //include the header
            $title="Pet Lane | Registered";
            include("../includeHeader.php");
        ?>

                    <!-- <ul class="nav nav-pills">
                        <li role="presentation" class="active col-lg-offset-1 col-lg-5"><a href="viewUsers.php">View</a></li>
                        <li role="presentation" class="active col-lg-5"><a href="userInput.php">Register</a></li>
                    </ul> -->
        <?php
            //user
            $firstName = $_POST["formFirstName"];
            $lastName = $_POST["formLastName"];
            $address = $_POST["formAddress"];
            $contact = $_POST["formContact"];
            
            //userlist
            $email = $_POST["formEmail"];
            $username = $_POST["formUsername"];
            $password = $_POST["formPassword"];
            $date = date("Y/m/d");
            
            $sample = 0;
            
            $insertQuery = "INSERT INTO userlist(UserTypeID, Email, Username, Password, DateAdded) VALUES('3', '$email', '$username', '$password', '$date');";
            
            if ($conn->query($insertQuery) === TRUE) {			//Check if operation was successful
            $message = "Created user with ID: " . $conn->insert_id;
            } else {
                die ("Insert failed: ". $conn->error);		//Retrieve any error in the operation
            }
            
            
            $selectQuery = "SELECT Userlistid FROM userlist ORDER BY userlistid DESC LIMIT 1;";
            
            $result = mysqli_query($conn, $selectQuery);
            
            // while($row = mysqli_fetch_assoc($result)) {
            // 	echo $row["UserListID"];
            // }
            
            while($row = $result->fetch_assoc()) {
                // echo "<td>".$row["Userlistid"]."</td>";
            
                $sample = $row['Userlistid'];
            }
            
            
            $query = "INSERT INTO user (userlistid, firstName, lastName, address, contactno, photo) VALUES ('$sample', '$firstName', '$lastName', '$address', '$contact', 'images/Customers/bp.png');";
            
            //Insert new student into MySQL
            if ($conn->query($query) === TRUE) {			//Check if operation was successful
            $message = "Created user with ID: " . $conn->insert_id;
            } else {
                die ("Insert failed: ". $conn->error);		//Retrieve any error in the operation
            }
        ?>

        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>WELCOME <?php echo $firstName." ".$lastName; ?>!</h2>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="col-lg-12">
                    <div class="well bs-component">
                        <div class="form-horizontal">
                            <fieldset>
                                <!-- <legend><h1><b></h1></legend> -->
                                <div class="col-lg-offset-2 col-lg-8">
                                    <div class="panel panel-success">
                                        <div class="panel-heading" align="center"><h4><b>Your Credentials are:</b></h4></div>
                                        <div class="panel-body">

                                            <p>Name: <?php echo $firstName . " " . $lastName; ?></p>
                                            <p>Address: <?php echo $address; ?></p>
                                            <p>Contact: <?php echo $contact; ?></p>
                                            <p>Email: <?php echo $email; ?></p>
                                            <p>Username: <?php echo $username; ?></p>
                                            <p>Password: <?php echo $password; ?></p>

                                            <p align="center"><a href="../register.php" class="btn btn-outline">Click here to login</a></p>

                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include("../html/footer.html");
        ?>
