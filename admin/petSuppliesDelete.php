<?php 
        require_once("../database/connect.php");
          $qid = $_SESSION['userid'];
          $user = $_GET['ID']; 

           $query = "  DELETE FROM petsupplies  WHERE suppliesid = $user  ";

            if ($conn->query($query) === TRUE) {          //Check if operation was successful
                    $message = "Created user with ID: " . $conn->insert_id;
                     } else {
                            die ("Insert failed: ". $conn->error);      //Retrieve any error in the operation
                    }
         
?>


<script>
 var answer = confirm ("Do you want to delete it?")
if (answer)
 
    window.location.href='petSupplies.php';
else
 
  window.location.href='petSupplies.php';
</script>

