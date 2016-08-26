<?php
    //Connect to MySQL and validate userid
    include("requiredLogin.php");
    
    if(isset($_GET['ID1'])) {
    $RefNo = $_GET['ID1'];
    
    $query = "DELETE FROM orderdetail WHERE RefNo='$RefNo'";
    
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    alert('Successfully Deleted!.');
    window.location.href='cart';
</script>
<?php
    } else {
?>
<script>
    alert('Error while deleting incart pet/pet supplies.');
    window.location.href='cart';
</script>
<?php
        }
    } elseif(isset($_GET['ID2'])) {
    $RefNo = $_GET['ID2'];
    
    $query = "DELETE FROM orderdetail WHERE RefNo='$RefNo'";
    
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    alert('Successfully Deleted!.');
    window.location.href='checkout';
</script>
<?php
    } else {
?>
<script>
    alert('Error while deleting incart pet/pet supplies.');
    window.location.href='checkout';
</script>
<?php
        }
    } elseif(isset($_GET['ID3'])) {
    $RefNo = $_GET['ID3'];
    
    $query = "DELETE FROM orderdetail WHERE RefNo='$RefNo'";
    
        //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    alert('Successfully Deleted!.');
    window.location.href='wishlist';
</script>
<?php
    } else {
?>
<script>
    alert('Error while deleting in wishlist pet/pet supplies.');
    window.location.href='wishlist';
</script>
<?php
        }
    }
?>
