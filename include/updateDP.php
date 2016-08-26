<?php
    //Connect to MySQL
    require_once("../database/connect.php");
if (isset($_POST["updateDP"])) {
        $uid = $_SESSION['userid'];
        //image
        $file_name=$_FILES["image"]["name"];
        $temp_name=$_FILES["image"]["tmp_name"];
        $imgtype=$_FILES["image"]["type"];
        $target_path = "../images/Customers/".$file_name;
        $final_name = "images/Customers/".$file_name;
    
        if(move_uploaded_file($temp_name, $target_path)) {
            $query = "UPDATE user SET Photo='$final_name' WHERE UserID='$uid'";
    
    //Insert new student into MySQL
    if ($conn->query($query) === TRUE) {			//Check if operation was successful
?>
<script>
    alert('Successfully updated your display picture!');
    window.location.href='../profile.php?success';
</script>
<?php
    } else {
?>
<script>
    alert('Error while uploading your new display picture, kindly check if you selected image. Thank You!');
    window.location.href='../profile.php?fail';
</script>
<?php
        die ($conn->error);
        }
        }
    }
?>