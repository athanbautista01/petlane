<?php 
        require_once("../database/connect.php");
          $qid = $_SESSION['userid'];

           $userlistidtwo = $_POST["user"];
             $date = $_POST["date"];
                   $reason = $_POST["reason"];
                   $oras = $_POST["time"];
          $query = " INSERT INTO appointment(useroneid,usertwoid,date,time,reason,dateadded) VALUES ($userlistidtwo,$qid,'$date','$oras','$reason',NOW()) ";

           if ($conn->query($query) === TRUE) {          //Check if operation was successful
                    $message = "Created user with ID: " . $conn->insert_id;
                     } else {
                            die ("Insert failed: ". $conn->error);      //Retrieve any error in the operation
                    }
?>
 

<script>
 var answer = confirm ("Do you want to add appointment?")
if (answer)

    window.location.href='appointment.php';
  
else

  window.location.href='appointment.php';
</script>


