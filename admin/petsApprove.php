<?php 
        require_once("../database/connect.php");
          $qid = $_SESSION['userid'];
          $user = $_GET['ID']; 

          $query = " UPDATE Pet SET IsFeatured = 'Yes'  WHERE PetID = $user ";

           if ($conn->query($query) === TRUE) {          //Check if operation was successful
                    $message = "Created user with ID: " . $conn->insert_id;
                     } else {
                            die ("Insert failed: ". $conn->error);      //Retrieve any error in the operation
                    }
?>
 

<script>
 var answer = confirm ("Do you want to approve it?")
if (answer)

    window.location.href='pets.php';
  
else

  window.location.href='pets.php';
</script>


