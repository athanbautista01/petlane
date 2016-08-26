<?php
      //Connect to MySQL
    require_once("../database/connect.php");
      if (isset($_POST["submitAdd"])) {               //process this block if submitted from the Add Student page
        $ownersID = $_SESSION['userid'];
        $category = $_POST["category"];
        $breed = $_POST["breed"];
        $status = $_POST["status"];
        $name = $_POST["name"];
        $birthdate = $_POST["birthdate"];
        $reason = $_POST["reason"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $description = $_POST["description"];
        
        
        //image
        $file_name=$_FILES["image"]["name"];
        $temp_name=$_FILES["image"]["tmp_name"];
        $imgtype=$_FILES["image"]["type"];
        $target_path = "../images/Pets/".$file_name;
        $final_name1 = "images/Pets/".$file_name;
        //image2
        $file_name2=$_FILES["image2"]["name"];
        $temp_name2=$_FILES["image2"]["tmp_name"];
        $imgtype2=$_FILES["image2"]["type"];
        $target_path2 = "../images/Pets/".$file_name2;
        $final_name2 = "images/Pets/".$file_name2;
        //image3
        $file_name3=$_FILES["image3"]["name"];
        $temp_name3=$_FILES["image3"]["tmp_name"];
        $imgtype3=$_FILES["image3"]["type"];
        $target_path3 = "../images/Pets/".$file_name3;
        $final_name3 = "images/Pets/".$file_name3;
        $datetoday = date("Y/m/d");
        
        if(move_uploaded_file($temp_name, $target_path) && move_uploaded_file($temp_name2, $target_path2) && move_uploaded_file($temp_name3, $target_path3)) {
          //Build the query to use to insert the new record
        $query = "INSERT INTO pet (UserID, CategoryID, StatusID, PetName, Breed, Price, Description, Available, PetBirthdate, Quantity, Reason, Image, Image2, Image3, IsFeatured, DateSold) 
        VALUES ('$ownersID', '$category', '$status', '$name', '$breed', '$price', '$description', '$quantity', '$birthdate', '$quantity', '$reason', '$final_name1', '$final_name2', '$final_name3', 'No', '$datetoday')";
    
    
          //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    alert('Successfully Sold!, wait for the approval of the Admin. Thank You!');
    window.location.href='../profile.php?success';
</script>
<?php
    } else {
?>
<script>
    die ("Insert failed: ". $conn->error);
    alert('Error while sending information of new Pet, kindly check the information that you inputted. Thank You!');
    window.location.href='../sellpet.php?fail';
</script>
<?php
        die ($conn->error);
      }
    }
      }
?>