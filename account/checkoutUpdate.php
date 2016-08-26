<?php
    //Connect to MySQL and validate userid
    include("requiredLogin.php");
    
            if(isset($_GET['ID'])) {
            $userID = $_GET['ID'];
    
            //first update details
    $firstName = $_POST["cFirstName"];
    $lastName = $_POST["cLastName"];
    $address = $_POST["cAddress"];
    $contact = $_POST["cContact"];
    $addInfo = $_POST["cAddInfo"];
    //$email = $_POST["cEmail"];
    
    $update1Query = "UPDATE user SET LastName='$lastName', FirstName='$firstName', Address='$address', ContactNo='$contact', AdditionalInfo='$addInfo', Status='Active' WHERE userID='$userID'";
    
    if ($conn->query($update1Query) === TRUE) {		
    $message = "Success";
    } else {
?>
<script>
    window.location.href='cart.php';
</script>
<?php
            }
            //second add new record
    $datetime = date_create()->format('Y-m-d H:i:s');
    $display = $_POST["payment"];
    if ($display == 3) {
        $payment='Cash on Delivery';
    } else {
        $payment='Through Paypal';
    } 
    
    $insertQuery = "Insert into orders(dateordered, PaymentMethod, status) values('$datetime', '$payment', 'Pending')";
    
    if ($conn->query($insertQuery) === TRUE) {	
    $message = "Success";
    } else {
        die ("Failed: ". $conn->error);  
    }		
    
    $selectQuery = "SELECT orderno FROM orders ORDER BY orderno DESC LIMIT 1;";
    
    $result1 = mysqli_query($conn, $selectQuery);
    
    while($row = $result1->fetch_assoc()) {            
        $sample = $row['orderno'];
    }
    
    //third update cart details
    $update2Query = "Update orderdetail set orderno=$sample, Status='Processing' where Status='InCart' AND userid=$userID";
    // $update2Query = "Update orderdetail set orderno=$sample, Status='Processing' where orderno=$sample and userid=$userID";
    
    if ($conn->query($update2Query) === TRUE) {		
    $message = "Success";
    } else {
        die ("Failed: ". $conn->error);  
    }	
    
    //fourt add delivery record
    //$datetime = date_create()->format('Y-m-d H:i:s');
    $datetoday = date("Y/m/d");
    $insDQuery = "INSERT INTO delivery(OrderNo, DateDelivered, Status) VALUES ('$sample', '$datetoday', 'Pending')";
    
    if ($conn->query($insDQuery) === TRUE) {

    $update = "Update delivery set DateDelivered=DATE_ADD(DateDelivered,INTERVAL 14 DAY) where orderno=$sample";
    if ($conn->query($update) === TRUE) {		
?>

<script>
    alert('Your order has been successfully placed!.');
    window.location.href='../profile.php';
</script>
<?php
    }} else {
        ?>
<script>
    alert('Error while placing your order, please check the information/s that you submitted.');
    window.location.href='cart.php';
</script>
<?php
        die ("Failed: ". $conn->error);  
    }}else {
?>
<script>
    window.location.href='cart.php';
</script>
<?php
            }
?>