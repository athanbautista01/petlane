<?php
    //Connect to MySQL
    require_once("../database/connect.php");
    if (isset($_POST["updateProfile"])) {               //process this block if submitted from the Add Student page
    //user
    $uid = $_SESSION['userid'];
    $firstname = $_POST["formFirstName"];
    $lastname = $_POST["formLastName"];
    $address = $_POST["formAddress"];
    $contact = $_POST["formContact"];
    
    //userlist
    $ulid = $_SESSION['userlistid'];
    $email = $_POST["formEmail"];
    $username = $_POST["formUsername"];
    $password = $_POST["formPassword"];
    
    $query1 = "UPDATE userlist SET Email='$email', Username='$username', Password='$password' WHERE userlistid='$ulid'";
    
    if ($conn->query($query1) === TRUE) {			//Check if operation was successful
    $message = "Updated user with ID: " . $conn->insert_id;
    } else {
    die ("Update failed: ". $conn->error);	
    }


$query2 = "UPDATE user SET LastName='$lastname', FirstName='$firstname', Address='$address', ContactNo='$contact' WHERE UserID='$uid'";
    
    //Insert new student into MySQL
    if ($conn->query($query2) === TRUE) {			//Check if operation was successful
?>
<script>
    alert('Successfully Updated!');
    window.location.href='profile.php?success';
</script>
<?php
    } else {
?>
<script>
    alert('Error while uploading your edited information, kindly check again the information that you inputted. Thank You!');
    window.location.href='editprofile.php?fail';
</script>
<?php
    die ($conn->error);
    }
    }
?>