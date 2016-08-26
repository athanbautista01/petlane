<?php
      //Connect to MySQL
require_once("../database/connect.php");

      //process review
      if (isset($_POST["submitAdd"])) {               //process this block if submitted from the Add Student page
        $uid = $_SESSION['uid']
        $pid = $_SESSION['pid']
        $Review = $_POST["Comment"];
        $DateAdded = date("Y/m/d");

          //Build the query to use to insert the new record
        $query = "INSERT INTO review (PetID, UserID, Review, DateAdded, Status) VALUES ('$pid', '$uid', '$Review', '$DateAdded', 'Pending')";
        
        
          //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
          ?>
          <script>
            alert('Thank you for your review!');
            window.location.href='petDetails.php?ID=<?php echo $pid?>';
          </script>
          <?php
        } else {
          ?>
          <script>
            die ("comment failed: ". $conn->error);
            alert('Error while processing comment');
            window.location.href='pertDetails.php?reviewFailed';
          </script>
          <?php
          die ($conn->error);
        }
      }



      ?>