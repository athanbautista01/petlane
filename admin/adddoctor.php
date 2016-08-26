<?php
    //Connect to MySQL and validate userid
            include("requiredLogin.php");
    //include the header
    include("includeHeader.php");
    $qid = $_SESSION['userid'];
?>

  <section>
    <div class="container">
     <div class="col-lg-12 heading text-center"><br/>
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
          <li role="presentation" class="active" id="tab1"><a href="#AddDoctor" aria-controls="AddDoctor"
            role="tab" data-toggle="tab" class="tab1">Step 1</a></li>
             <li role="presentation" class="active" id="tab1"><a 
            role="tab" data-toggle="tab" class="tab1">Step 2</a></li>
          </ul>
          <br />
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="AddDoctor">
              <form action="adddoctor2.php" method="post" enctype="multipart/form-data">
               <div class="col-lg-12">
                <div class="col-lg-12">
                  <div class="col-md-8 col-md-offset-2">


                     <div class="form-group">
                      <label for="username" class="control-label col-lg-4">
                        Email</label>
                        <div class="col-lg-8">
                          <input type="email" name="email"
                          required  class="input form-control" />
                        </div>
                      </div>
                      <br />

                    <div class="form-group">
                      <label for="username" class="control-label col-lg-4">
                        Username</label>
                        <div class="col-lg-8">
                          <input type="text" name="username"
                          required  class="input form-control" />
                        </div>
                      </div>
                      <br />

                    <div class="form-group">
                      <label for="password" class="control-label col-lg-4">
                        Password</label>
                        <div class="col-lg-8">
                          <input type="password" name="password"
                          required  class="input form-control" />
                        </div>
                      </div>
                      <br />

                  </div>
                        
                                <div class="col-lg-12">
                                  <br /><hr>
                                  <center>
                                    <div class="form-group">
                                      <input type="submit" name="submitAdd" value="Next" class="btn btn-outline" />
                                      <a class="btn btn-outline" href="vets.php">Cancel</a>
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
   
    include("includeFooter.php");
?>
            