        <?php
            //Connect to MySQL
            require_once("../database/connect.php");
            //include the header
            $title="Pet Lane | Set Appointment";
            include("../includeHeader.php");
        ?>

        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>Appointment</h2>
                </div>

                <div class="row">
                    <div class="col-sm-12">

                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">

                            <ul class="nav nav-tabs clearfix" role="tablist">
                                <li role="presentation" class="active" id="tab1"><a href="#VetInfo" aria-controls="VetInfo" role="tab" data-toggle="tab" class="tab1">Veterinarian Information</a></li>
                                <li role="presentation" id="tab2"><a href="#SetAppointment" aria-controls="SetAppointment" role="tab" data-toggle="tab" class="tab2">Set Appointment</a></li>
                            </ul>
                            <br />
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="VetInfo">
                                    <div class="col-lg-12">

                                        <?php
                                            $vet = $_GET['ID'];    
                                            $selectQuery = "select veterinarianid,userlistid,lastname,firstname,address,contactNo,hospital,degree,schoolGraduated,experience,boardCertification,awards,photo from veterinarian where veterinarianid = $vet";
                                            $result = $conn->query($selectQuery);
                                            if($result->num_rows)
                                            {
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                        ?>
                                        <div class="well col-lg-12 a  ">
                                            <div class="col-lg-3">
                                                <img src="../<?php echo $row['photo'] ?>" class="img-responsive" />
                                            </div>
                                            <?php
                                                
                                                     $userlistidtwo = $row["veterinarianid"];
                                                     $lastname = $row["lastname"];
                                                    $firstname = $row["firstname"];
                                                    $address = $row["address"];
                                                    $contactNo = $row["contactNo"];
                                                    $hospital = $row["hospital"];
                                                    $degree = $row["degree"];
                                                    $schoolGraduated = $row["schoolGraduated"];
                                                    $experience = $row["experience"];
                                                    $boardCertification = $row["boardCertification"];
                                                    $awards = $row["awards"];
                                                
                                                        }
                                                    } 
                                                
                                                $_SESSION['userlistidtwo'] = $userlistidtwo;
                                                
                                            ?>
                                            <div class="col-lg-8">
                                                <div class="caption">
                                                    <h3 class="c">Dr. <?php echo "$firstname $lastname";?>  </h3>
                                                    <p class="e">Degree: <?php echo "$degree";?> </p>
                                                    <p class="e">School: <?php echo "$schoolGraduated";?>   </p>
                                                    <p class="e">Experience:  <?php echo "$experience";?> Years</p>
                                                    <p class="e">Board Certifications: <?php echo "$boardCertification";?> </p>
                                                    <p class="e">Awards: " <?php echo "$awards";?>  "</p>
                                                    <p class="e">Address: <?php echo "$address";?> </p>
                                                    <p class="e">Contact No: <?php echo "$contactNo";?> </p>
                                                    <p class="e">Hospital: <?php echo "$hospital";?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="SetAppointment">
                                    <div class="col-lg-12">

                                        <form action="addappointment.php" method="post">
                                            <div class="col-lg-12">


                                                <div class="col-lg-6">


                                                    <div class="form-group">
                                                        <label class="control-label col-lg-4">
                                                                Date</label>
                                                        <div class="col-lg-8">
                                                            <input class="input form-control" type="date" name="date" required />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-lg-4">
                                                                 Time</label>
                                                        <div class="col-lg-8">
                                                            <input class="input form-control" type="time" name="time" required />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-lg-4">
                                                                 Reason</label>
                                                        <div class="col-lg-8">
                                                            <input class="input form-control" name="reason" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                </div>

                                                <div class="col-lg-12">
                                                    <br /><br /><br />
                                                    <center>
                                                        <div class="form-group">
                                                            <button class="btn btn-outline">Set Appointment</button>

                                                            <a class="btn btn-outline" href="../index.php">Cancel</a>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <?php
            include("../includeFooter.html");
        ?>
