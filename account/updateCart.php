<?php
    //Connect to MySQL and validate userid
    include("requiredLogin.php");
    
    if(isset($_GET['ID1'])) {
    $RefNo = $_GET['ID1'];
    $qty = $_POST["qty"];

    $query = "SELECT od.RefNo, p.PetID, p.Image, p.Breed, p.PetName, p.Price, od.Quantity, od.Amount, od.Status from orderdetail od inner join pet p on od.PetID = p.PetID WHERE od.RefNo='$RefNo'";
    $result = $conn->query($query); 
    if ($result->num_rows) {    
       while ($row = mysqli_fetch_assoc($result)) {
           $price = $row['Price'];
       }
    }
    
    $amount = $qty * $price;
    $query = "UPDATE orderdetail SET Amount='$amount', Quantity='$qty' WHERE RefNo='$RefNo'";
    
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    //alert('Successfully Deleted!.');
    window.location.href='cart.php';
</script>
<?php
    } else {
?>
<script>
    alert('Error while updating incart pet/pet supplies.');
    window.location.href='cart.php';
</script>
<?php
        }
    } elseif(isset($_GET['ID2'])) {
    $RefNo = $_GET['ID2'];
    $qty = $_POST["qty"];

    $query = "SELECT od.RefNo, p.SuppliesID, p.Image, p.Brand, p.ProductName, p.Price, od.Quantity, od.Amount, od.Status from orderdetail od inner join petsupplies p on od.SuppliesID = p.SuppliesID WHERE od.RefNo='$RefNo'";
    $result = $conn->query($query); 
    if ($result->num_rows) {    
       while ($row = mysqli_fetch_assoc($result)) {
           $price = $row['Price'];
       }
    }
    
    $amount = $qty * $price;
    $query = "UPDATE orderdetail SET Amount='$amount', Quantity='$qty' WHERE RefNo='$RefNo'";
    
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    //alert('Successfully Deleted!.');
    window.location.href='cart.php';
</script>
<?php
    } else {
?>
<script>
    alert('Error while updating incart pet/pet supplies.');
    window.location.href='cart.php';
</script>
<?php
        }
    } elseif(isset($_GET['ID3'])) {
    $RefNo = $_GET['ID3'];
    $qty = $_POST["qty"];

    $query = "SELECT od.RefNo, p.PetID, p.Image, p.Breed, p.Price, od.Quantity, od.Amount, od.Status from orderdetail od inner join pet p on od.PetID = p.PetID WHERE od.RefNo='$RefNo'";
    $result = $conn->query($query); 
    if ($result->num_rows) {    
       while ($row = mysqli_fetch_assoc($result)) {
           $price = $row['Price'];
       }
    }
    
    $amount = $qty * $price;
    $query = "UPDATE orderdetail SET Amount='$amount', Quantity='$qty', Status='InCart' WHERE RefNo='$RefNo'";
    
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    //alert('Successfully Deleted!.');
    window.location.href='cart.php';
</script>
<?php
    } else {
?>
<script>
    alert('Error while updating incart pet/pet supplies.');
    window.location.href='cart.php';
</script>
<?php
        }
    }elseif(isset($_GET['ID4'])) {
    $RefNo = $_GET['ID4'];
    $qty = $_POST["qty"];

    $query = "SELECT od.RefNo, p.SuppliesID, p.Image, p.Brand, p.ProductName, p.Price, od.Quantity, od.Amount, od.Status from orderdetail od inner join petsupplies p on od.SuppliesID = p.SuppliesID WHERE od.RefNo='$RefNo'";
    $result = $conn->query($query); 
    if ($result->num_rows) {    
       while ($row = mysqli_fetch_assoc($result)) {
           $price = $row['Price'];
       }
    }
    
    $amount = $qty * $price;
    $query = "UPDATE orderdetail SET Amount='$amount', Quantity='$qty', Status='InCart' WHERE RefNo='$RefNo'";
    
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    //alert('Successfully Deleted!.');
    window.location.href='cart.php';
</script>
<?php
    } else {
?>
<script>
    alert('Error while updating incart pet/pet supplies.');
    window.location.href='cart.php';
</script>
<?php
        }
    }
?>
