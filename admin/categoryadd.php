<?php 
        require_once("../database/connect.php");
          $qid = $_SESSION['userid'];
         $category = $_POST["categories"];
?>

<script>
  <?php 
 $query = " INSERT INTO petcategory(Category) VALUES ('$category')";
 if ($conn->query($query) === TRUE) {          //Check if operation was successful
                    $message = "Created user with ID: " . $conn->insert_id;
                     } else {
                            die ("Insert failed: ". $conn->error);      //Retrieve any error in the operation
                    }

?>
  window.location.href='pcs.php';
</script>
