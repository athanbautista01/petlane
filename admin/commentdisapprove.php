<?php 
        require_once("../database/connect.php");
          $qid = $_SESSION['userid'];
          $user = $_GET['ID']; 
          $query = " UPDATE Comment SET Status = 'Disapprove'  WHERE CommentID = $user ";

           if ($conn->query($query) === TRUE) {          //Check if operation was successful
                    $message = "Created user with ID: " . $conn->insert_id;
                     } else {
                            die ("Insert failed: ". $conn->error);      //Retrieve any error in the operation
                    }
?>


<script>
 var answer = confirm ("Do you want to disapprove it?")
if (answer)
    window.location.href='comments.php';
else
  window.location.href='comments.php';
</script>
