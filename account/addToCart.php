<?php
    //Connect to MySQL and validate userid
    include("requiredLogin.php");
    
    $price = 0;
    $userID = $_SESSION['userid'];
    
    if(isset($_GET['petID1'])) {
    $petID = $_GET['petID1'];
    
    if (isset($_POST["qty"])) {
        $qty = $_POST["qty"];
    } else {
        $qty = 1;
    }
    
    $selectQuery1 = "SELECT price FROM pet where petid='$petID';";
    
        $result1 = mysqli_query($conn, $selectQuery1);
    
        while($row = $result1->fetch_assoc()) {            
            $price = $row['price'];
        }
        $selectQuery2 = "SELECT petid, userid, status FROM orderdetail where userid='$userID';";
    
        $result2 = mysqli_query($conn, $selectQuery2);
    
        while($row2 = $result2->fetch_assoc()) {            
            $petidf = $row2['petid'];
            $status = $row2['status'];
            $useridf = $row2['userid'];
        }
    
        if ($petID == $petidf  && $status == "InCart"){
        $query = "SELECT p.PetID, p.Image, p.Breed, p.PetName, p.Price, od.Quantity, od.Amount, od.Status from orderdetail od inner join pet p on od.PetID = p.PetID WHERE p.petID='$petID'";
    $result = $conn->query($query); 
    if ($result->num_rows) {    
       while ($row = mysqli_fetch_assoc($result)) {
           $price = $row['Price'];
           $qtyn = $row['Quantity'];
           $amount = $row['Amount'];
       }
    }
    
    $qtyf = $qtyn + $qty;
    $amount = $qtyf * $price;
    $query = "UPDATE orderdetail SET Amount='$amount', Quantity='$qtyf' WHERE PetID='$petID'";
    
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    window.location.href='cart.php';
</script>
<?php
    } else {    
        //Retrieve any error in the operation
?>
<script>
    window.location.href='../profile.php';
</script>
<?php
        }
        }else{
            $total = $price * $qty;
    $query = "INSERT INTO orderdetail (orderno, userid, petid, suppliesid, quantity, amount, status) VALUES ('1', '$userID', '$petID', '0', '$qty', '$total', 'InCart')";
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {            
            //Check if operation was successful
?>
<script>
    window.location.href='cart.php';
</script>
<?php
    } else {    
        //Retrieve any error in the operation
?>
<script>
    window.location.href='../profile.php';
</script>
<?php
        }
        }  
    } if(isset($_GET['petID2'])) {
    $petID = $_GET['petID2'];
    
    if (isset($_POST["qty"])) {
        $qty = $_POST["qty"];
    } else {
        $qty = 1;
    }
    
    $selectQuery1 = "SELECT price FROM pet where petid='$petID';";
    
        $result1 = mysqli_query($conn, $selectQuery1);
    
        while($row = $result1->fetch_assoc()) {            
            $price = $row['price'];
        }
        $selectQuery2 = "SELECT petid, userid, status FROM orderdetail where userid='$userID';";
    
        $result2 = mysqli_query($conn, $selectQuery2);
    
        while($row2 = $result2->fetch_assoc()) {            
            $petidf = $row2['petid'];
            $status = $row2['status'];
            $useridf = $row2['userid'];
        }
    
        if ($petID == $petidf  && $status == "InWishlist"){
?>
<script>
    window.location.href='wishlist.php';
</script>
<?php
        }else{
            $total = $price * $qty;
    $query = "INSERT INTO orderdetail (orderno, userid, petid, suppliesid, quantity, amount, status) VALUES ('1', '$userID', '$petID', '0', '0', '0', 'InWishlist')";
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {            
            //Check if operation was successful
?>
<script>
    window.location.href='wishlist.php';
</script>
<?php
    } else {    
        //Retrieve any error in the operation
?>
<script>
    window.location.href='../profile.php';
</script>
<?php
        }
        }  
    } elseif(isset($_GET['suppliesID1'])) {
    $suppliesID = $_GET['suppliesID1'];
    
    if (isset($_POST["qty"])) {
        $qty = $_POST["qty"];
    } else {
        $qty = 1;
    }
    
    $selectQuery1 = "SELECT price FROM petsupplies where suppliesid='$suppliesID';";
    
        $result1 = mysqli_query($conn, $selectQuery1);
    
        while($row = $result1->fetch_assoc()) {            
            $price = $row['price'];
        }
    
    $total = $price * $qty;
    $query = "INSERT INTO orderdetail (orderno, userid, petid, suppliesid, quantity, amount, status) VALUES ('1', '$userID', '0', '$suppliesID', '$qty', '$total', 'InCart')";
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {            
            //Check if operation was successful
?>
<script>
    window.location.href='cart.php';
</script>
<?php
    } else {
        //Retrieve any error in the operation
?>
<script>
    window.location.href='../profile.php';
</script>
<?php
        }   
    } elseif(isset($_GET['suppliesID2'])) {
    $suppliesID = $_GET['suppliesID2'];
    
    if (isset($_POST["qty"])) {
        $qty = $_POST["qty"];
    } else {
        $qty = 1;
    }
    
    $selectQuery1 = "SELECT price FROM petsupplies where suppliesid='$suppliesID';";
    
        $result1 = mysqli_query($conn, $selectQuery1);
    
        while($row = $result1->fetch_assoc()) {            
            $price = $row['price'];
        }
        $selectQuery2 = "SELECT suppliesid, userid, status FROM orderdetail where userid='$userID';";
    
        $result2 = mysqli_query($conn, $selectQuery2);
    
        while($row2 = $result2->fetch_assoc()) {            
            $suppliesidf = $row2['suppliesid'];
            $status = $row2['status'];
            $useridf = $row2['userid'];
        }
    
        if ($suppliesID == $suppliesidf  && $status == "InWishlist"){
?>
<script>
    window.location.href='wishlist.php';
</script>
<?php
        }else{
            $total = $price * $qty;
    $query = "INSERT INTO orderdetail (orderno, userid, petid, suppliesid, quantity, amount, status) VALUES ('1', '$userID', '0', '$suppliesID', '0', '0', 'InWishlist')";
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {            
            //Check if operation was successful
?>
<script>
    window.location.href='wishlist.php';
</script>
<?php
    } else {    
        //Retrieve any error in the operation
?>
<script>
    window.location.href='../profile.php';
</script>
<?php
        }
        }  
    }
?>