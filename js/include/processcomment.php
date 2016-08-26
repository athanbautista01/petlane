<?php
      //Connect to MySQL
    require_once("../database/connect.php");
      if (isset($_POST["submitAdd"])) {               //process this block if submitted from the Add Student page
        $bid = $_SESSION['blogID'];
        $BlogID = $_POST["BlogID"];
        //$_SESSION['blogID'] = $BlogID;
        $User = $_POST["User"];
        $Comment = $_POST["Comment"];
        $DateAdded = date("Y/m/d");

          //Build the query to use to insert the new record
        $query = "INSERT INTO comment (BlogID, User, Comment, DateAdded, Status) VALUES ('$BlogID', '$User', '$Comment', '$DateAdded', 'Pending')";
    
    
          //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    alert('Thank you for your feedback!');
    window.location.href='blogpost.php?ID=<?php echo $bid?>';
</script>
<?php
    } else {
?>
<script>
    die ("comment failed: ". $conn->error);
    alert('Error while processing comment');
	window.location.href='blogpost.php?commentFailed';
</script>
<?php
        die ($conn->error);
      }
      }
?>