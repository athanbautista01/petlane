<?php
    //include the header
    //Connect to MySQL

    require_once("../database/connect.php");
    $title="Pet Lane | Set Appointment";
    include("../includeHeader.php");

                   $userlistidone = $_SESSION['userid']; // doctor
                   $userlistidtwo = $_SESSION['userlistidtwo']; // user
                    $date = $_POST["date"];
                   $reason = $_POST["reason"];
                   $oras = $_POST["time"];
                  $insert = "INSERT INTO appointment(useroneid,usertwoid,date,time,reason,dateadded) VALUES($userlistidone,$userlistidtwo,'$date','$oras','$reason',NOW())";
                                      
                    if ($conn->query($insert) === TRUE) {          //Check if operation was successful
                    $message = "Created user with ID: " . $conn->insert_id;
                     } else {
                            die ("Insert failed: ". $conn->error);      //Retrieve any error in the operation
                    }
?>

 <section>
            <div class="container">
                <div class="col-lg-12">
                    <div class="well bs-component">
                        <div class="form-horizontal">
                            <fieldset>
                                <!-- <legend><h1><b></h1></legend> -->
                                <div class="col-lg-offset-2 col-lg-8">
                                    <div class="panel panel-success">
                                        <div class="panel-heading" align="center"><h4><b>Success!</b></h4></div>
                                        <div class="panel-body">
                                          <table class="table table-hover">
                                              <thead>
                                              <th>Reason</th>
                                              <th>Date</th>
                                              <th>Time</th>
                                              <th>Date Added</th>
                                              </thead>
                                        <tbody class="row">
                                        <tr>
                                          
<?php                
                 $appointment = "select useroneid, usertwoid,date,time,reason,dateadded from appointment where useroneid = $userlistidone ";
                      
                     $resultAppointment = $conn->query($appointment); 
                                    if ($conn->error) {
                                      die("Query failed: " . $conn->error);
                                    } 
                                    //If there are records fetched, iterate through the data set
                                    if ($resultAppointment->num_rows) {    
                                      while ($row = mysqli_fetch_assoc($resultAppointment)) {
                                         
                                          echo "<td>";
                                          echo  $row['reason'];
                                           echo "</td>";
                                          echo "<td>";
                                          echo  $row['date'];
                                           echo "</td>";
                                           echo "<td>";
                                          echo  $row['time'];
                                           echo "</td>";
                                           echo "<td>";
                                          echo  $row['dateadded'];
                                           echo "</td>";
                                           echo "<tr></tr>";
                                      }
                                  }




?>

                                    </tr>
                                        </tbody>
                                      </table>
                                            <p align="center"><a href="../index.php" class="btn btn-outline">Click here to back</a></p>

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
    include("../includeFooter.html");
?>