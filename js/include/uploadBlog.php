<?php
      //Connect to MySQL
    require_once("../database/connect.php");
      if (isset($_POST["submitAdd"])) {               //process this block if submitted from the Add Student page
        $userID = $_SESSION['userid'];
        $title = $_POST["title"];
        $content = $_POST["content"];

        //image
        $file_name=$_FILES["image"]["name"];
        $temp_name=$_FILES["image"]["tmp_name"];
        $imgtype=$_FILES["image"]["type"];
        $target_path = "../images/blogs/".$file_name;
        $final_name = "images/blogs/".$file_name;
        $datetoday = date("Y/m/d");
        
        if(move_uploaded_file($temp_name, $target_path)) {
          //Build the query to use to insert the new record
        $query = "INSERT INTO blog(UserID, Image, Title, Content, DateAdded, Status)
        VALUES ('$userID', '$final_name', '$title', '$content', '$datetoday', 'Pending')";
    
          //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    alert('Successfully uploaded your blog!, wait for the approval of the Admin. Thank You!');
    window.location.href='../profile.php?success';
</script>
<?php
    } else {
?>
<script>
    die ("Insert failed: ". $conn->error);
    alert('Error while uploading your new blog, kindly check the information that you inputted. Thank You!');
    window.location.href='createblog.php?fail';
</script>
<?php
        die ($conn->error);
      }
    }
      }
?>