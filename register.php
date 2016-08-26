        <?php
            //Connect to MySQL
            require_once("database/connect.php");
            //include the header
            $title="Pet Lane | SignIn & SignUp";
            include("include/header.php");
        ?>
        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>LOGIN & REGISTER FORM</h2>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <!--<div class="well well-lg">-->
                <div class="row">
                    <center>
                        <div class="col-lg-12 text-center">
                            <a class="btn btn-stylish" type="button" data-toggle="collapse" data-target="#collapseLogin" aria-expanded="true" aria-controls="collapseLogin">
                                Login
                            </a>
                            <a class="btn btn-stylish collapsed" type="button" data-toggle="collapse" data-target="#collapseRegister" aria-expanded="false" aria-controls="collapseRegister">
                                 Register
                            </a>
                        </div>
                    </center>
                </div>

                <div class="collapse in" id="collapseLogin" aria-expanded="true">

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2">

                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i><img class="img-responsive" src="images/custom/logo2.png" /></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="include/login.php" method="post" class="login-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="username">Username</label>
                                            <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="password">Password</label>
                                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
                                        </div>
                                        <!--<input type="submit" name="submitlogin" class="btn" value="Sign in!" />-->
                                        <button type="submit" name="submitlogin" class="btn btn-custom">Sign in!</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="collapse" id="collapseRegister" aria-expanded="false">

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Sign up now</h3>
                                        <p>Fill in the form below to get instant access:</p>
                                        <span id="namelocation" style="color:red"></span>
                                        <span id="passwordlocation" style="color:red"></span>
                                    </div>
                                    <div class="form-top-right">
                                        <i><img class="img-responsive" src="images/custom/logo2.png" /></i>
                                    </div>
                                </div>
                                <div class="form-bottom">

                                    <form role="form" action="include/userInput.php" name="registerForm" id="registerForm" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="formFirstName">First name</label>
                                            <input type="text" name="formFirstName" placeholder="First name..." class="form-first-name form-control" id="formFirstName" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formLastName">Last name</label>
                                            <input type="text" name="formLastName" placeholder="Last name..." class="form-last-name form-control" id="formLastName" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formAddress">Address</label>
                                            <input type="text" name="formAddress" placeholder="Address..." class="form-address form-control" id="formAddress" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formContact">Contact Number</label>
                                            <input type="text" name="formContact" placeholder="Contact Number..." class="form-contact form-control" id="formContact" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formEmail">Email</label>
                                            <input type="email" name="formEmail" placeholder="Email..." class="form-email form-control" id="formEmail" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formEmail">Username</label>
                                            <input type="text" name="formUsername" placeholder="Username..." class="form-email form-control" id="formUsername" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formPassword">Password</label>
                                            <input type="password" name="formPassword" placeholder="Password..." class="form-email form-control" id="formPassword" required>
                                        </div>

                                        <button type="submit" class="btn">Sign me up!</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <!--</div>-->
            </div>
        </section>
        <?php
            include("html/footer.html");
        ?>
