<?php 
        require_once("../database/connect.php");
          $qid = $_SESSION['userid'];
          $user = $_GET['ID']; 

   $query = " UPDATE Veterinarian SET Status = 'Inactive'  WHERE VeterinarianID = $user ";

     if ($conn->query($query) === TRUE) {          //Check if operation was successful
                    $message = "Created user with ID: " . $conn->insert_id;
                     } else {
                            die ("Insert failed: ". $conn->error);      //Retrieve any error in the operation
                    }
?>

   

<script>
 var answer = confirm ("Do you want to inactivate it?")
if (answer)

    window.location.href='vets.php';
else
 /* <?php 
 $query = " UPDATE Veterinarian SET Status = 'Active'  WHERE VeterinarianID = $user ";
?>*/
  window.location.href='vets.php';
</script>


<?php 
         
?>