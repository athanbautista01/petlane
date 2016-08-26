<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Pet Lane | Sell Pet</title>

        <?php
            include("requiredLogin.php");
            //Connect to MySQL
            require_once("../database/connect.php");
            //include the header
            include("includeHeader.php");
        ?>

        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>Doctor</h2>
                </div>


                <div class="row">
                    <div class="col-sm-12">

                        <div class="panel panel-success">

                            <div class="panel-heading">
                                <br />
                            </div>


                            <div class="panel-body">

                                <ul class="nav nav-tabs clearfix" role="tablist">
                                    <li role="presentation" class="active" id="tab1"><a href="#AddDoctor" aria-controls="AddDoctor" role="tab" data-toggle="tab" class="tab1">Doctor Information</a></li>
                                </ul>
                                <br />
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="AddDoctor">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="col-lg-12">
                                                <div class="col-lg-12">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="lastName" class="control-label col-lg-4">
                        Last Name</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="lastName" size="30" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                        <div class="form-group">
                                                            <label for="firstName" class="control-label col-lg-4">
                        First Name</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="firstName" size="30" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                        <div class="form-group">
                                                            <label for="address" class="control-label col-lg-4">
                        Address</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="address" size="30" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                        <div class="form-group">
                                                            <label for="contactNo" class="control-label col-lg-4">
                        Contact No</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="contactNo" size="30" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                        <div class="form-group">
                                                            <label for="hospital" class="control-label col-lg-4">
                        Hospital</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="hospital" size="30" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                        <div class="form-group">
                                                            <label for="degree" class="control-label col-lg-4">
                        Degree</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="degree" size="30" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                        <div class="form-group">
                                                            <label for="school" class="control-label col-lg-4">
                        School</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="school" size="30" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                    </div>
                                                    <div class="col-md-6">


                                                        <div class="form-group">
                                                            <label for="experience" class="control-label col-lg-4">
                        Experience</label>
                                                            <div class="col-lg-8">
                                                                <input type="number" name="experience" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                        <div class="form-group">
                                                            <label for="boardCertificate" class="control-label col-lg-4">
                        Board Certificate</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="boardCertificate" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />
                                                        <br><br>
                                                        <div class="form-group">
                                                            <label for="award" class="control-label col-lg-4">
                        Award</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="award" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">
                                    Image</label>
                                                            <div class="col-lg-8">
                                                                <!-- <input class="form-control input" required type="file" name="image" id=image" /> -->
                                                                <input type="file" name="image" id="image" size="30" class="form-control input" required />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="username" class="control-label col-lg-4">
                        Username</label>
                                                            <div class="col-lg-8">
                                                                <input type="email" name="username" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                        <div class="form-group">
                                                            <label for="password" class="control-label col-lg-4">
                        Password</label>
                                                            <div class="col-lg-8">
                                                                <input type="password" name="password" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />


                                                        <div class="form-group">
                                                            <label for="additionalInfo" class="control-label col-lg-4">
                        Additional Info</label>
                                                            <div class="col-lg-8">
                                                                <input type="email" name="additionalInfo" required class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <br />

                                                    </div>
                                                    <div class="col-lg-12">
                                                        <br /><hr>
                                                        <center>
                                                            <div class="form-group">
                                                                <input type="submit" name="submitAdd" value="Register" class="btn btn-outline" />
                                                                <a class="btn btn-outline" href="index.php">Cancel</a>
                                                            </div>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div role="tabpanel" class="tab-pane fade" id="SetAppointment">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
        </section>
        <?php
            include("../include/includeFooter.html");
        ?>
