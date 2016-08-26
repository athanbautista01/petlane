<?php 
        require_once("../database/connect.php");
          $qid = $_SESSION['userid'];
          $user = $_GET['ID']; 
          $query = "UPDATE Orders,OrderDetail,Delivery SET Orders.Status = 'Settled', orderdetail.Status = 'Confirmed', delivery.Status = 'Delivered' WHERE orders.OrderNo = orderdetail.OrderNo AND orders.OrderNo = delivery.OrderNo AND orders.OrderNo = '$user'";

           if ($conn->query($query) === TRUE) {          //Check if operation was successful
                    $message = "Created user with ID: " . $conn->insert_id;
                     } else {
                            die ("Insert failed: ". $conn->error);      //Retrieve any error in the operation
                    }
?>


<script>
 var answer = confirm ("Do you want to deliver it?")
if (answer)
    window.location.href='deliveries.php';
else
  window.location.href='deliveries.php';
</script>
    