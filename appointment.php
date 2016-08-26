        <?php
            include("include/requiredLogin.php");
            //Connect to MySQL
            require_once("database/connect.php");
            $title="Pet Lane | Appointment";
            //include the header
            include("include/header.php");
        ?>

        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>Appointment</h2>
                </div>
                <br /><br />
                <div class="col-lg-8">

                    <?php
                        
                        
                        
                        
                        $selectQuery = "select veterinarianid,userlistid,lastname,firstname,address,hospital,photo from veterinarian";
                          $result = $conn->query($selectQuery);
                          if($result->num_rows)
                          {
                              while($row = mysqli_fetch_assoc($result))
                              {

                                  $photo = $row["photo"];
                                  echo " <div class='col-lg-12 well a'>";
                                  echo " <div class='col-lg-3'>";
                                  echo "  <img src='$photo'  class='img-responsive' height='200' class='a'/>";
                                  echo " </div>";
                                  echo " <div class='col-lg-9'> ";
                                  echo " <div class='caption'>";
                                  echo " <h3 class='c'>";
                                  echo "DR. ";
                                  echo $row["firstname"];
                                  echo "&nbsp;";
                                  echo $row["lastname"];
                                  echo "</h3>";
                                  echo " <p class='e'>Address: ";
                                  echo $row["address"];
                                  echo "</p>";
                                  echo " <p class='e'>Hospital: ";
                                  echo $row["hospital"];
                                  echo "</p>";
                                  $id = $row["veterinarianid"];
                                  echo " <a class='btn btn-stylish b' href='include/setappointment.php?ID=$id'>";
                                  echo "View Profile</a>";
                                  echo "</div> ";
                                  echo " </div>";
                                  echo "</div> ";
                              }
                          }
                        
                    ?>




                </div>

                                    <!--   <div class="col-lg-4 jumbotron">
                                 <h3 class="c">Veterinary Services</h3>
                    
                                <div class="col-lg-12">
                                    <div class="thumbnail a">
                                   <img src="images/pt2.jpg" width="150"/>
                                      <div class="caption">
                                        <p class="c">Preventive Care</p>
                                      </div>
                                    </div>
                                 </div>
                    
                               <div class="col-lg-12">
                                    <div class="thumbnail b">
                                   <img src="images/pt3.jpg" width="150"/>
                                      <div class="caption">
                                        <p class="d">General Surgery</p>
                                      </div>
                                    </div>
                                 </div>
                    
                                <div class="col-lg-12">
                                    <div class="thumbnail a">
                                   <img src="images/pt4.jpg" width="150"/>
                                      <div class="caption">
                                        <p class="c">Emergency Care</p>
                                      </div>
                                    </div>
                                 </div>
                    
                            <div class="col-lg-12">
                                    <div class="thumbnail b">
                                   <img src="images/pt2.jpg" width="150"/>
                                      <div class="caption">
                                        <p class="d">Treatment Services</p>
                                      </div>
                                    </div>
                             </div>
                    
                            </div> -->
            </div>
        </section>
        <?php
            include("html/footer.html");
        ?>
