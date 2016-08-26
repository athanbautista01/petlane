<?php
    //Connect to MySQL
    require_once("../database/connect.php");
    $quser = "";
    $qpassword = "";
    $panelColor = "";
    if (isset($_POST["submitlogin"])) {	
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT a.UserID, a.UserListID, a.LastName, a.FirstName, a.Address, a.Photo, a.ContactNo, a.AdditionalInfo, 
                                a.Status,b.UserListID, b.UserTypeID, b.Password, b.Username, b.Email, b.DateAdded
                                FROM user a INNER JOIN userlist b ON a.UserListID = b.UserListID WHERE b.username='$username' AND b.password='$password'";
    
    //Execute query
    $result = $conn->query($query);     //result set is returned in an associative array
    
    if ($result->num_rows) {		
    
    while ($row = mysqli_fetch_assoc($result)) {
    $qid = $row['UserID'];
    $qtd = $row['UserTypeID'];
    $quser = $row['Username'];
    $qpassword = $row['Password'];
    }
    }
    
    
    if ($_POST['username'] == $quser && 
    $_POST['password'] == $qpassword) {
    $_SESSION['loggedin'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = $quser;
    
    $userQuery = "select userid, lastname, firstname from user where userid='$qid'";
    
    //Execute query
    $result = $conn->query($userQuery);     //result set is returned in an associative array
    if ($result->num_rows) {
    while ($row = mysqli_fetch_assoc($result)) {  
    $qfirstname = $row['firstname'];
    $qlastname = $row['lastname'];
    $userid = $row['userid'];
    }
    }
    
    $_SESSION['displayName'] = $qfirstname." ".$qlastname;
    $_SESSION['firstName'] = $qfirstname;
    $_SESSION['lastName'] = $qlastname;
    $_SESSION['userlistid'] = $qid;
    $_SESSION['userid'] = $userid;
    $_SESSION['qtd'] = $qtd;

        if($qtd == '1'){
?>
<script>
    window.location.href='../admin/profile';
</script>
<?php
    }elseif($qtd == '2'){
?>
<script>
    window.location.href='../veterinarian/profile';
</script>
<?php
    }elseif($qtd == '3'){
?>
<script>
    window.location.href='../profile';
</script>
<?php
    }elseif($qtd != '1'|| $qtd != '2' || $qtd != '3') {
    session_destroy();
?>
<script>
    alert('Invalid username.');
    window.location.href='../register';
</script>
<?php
    }
    //echo 'You have entered valid use name and password';
    //echo "</br></br><p align='center'><a href='index.php' class='btn btn-success'>Click here to continue</a></p>";
    // echo $_SESSION['displayName'];
    // echo $_SESSION['firstName'];
    
    }else {
    //$msg = 'Wrong username or password';
    //
    //echo "<p><font color='red'>".$msg;"</font></p>";
    //echo "</br></br><p align='center'><a href='register.php' class='btn btn-danger'>Click here to try again</a></p>";
    session_destroy();
?>
<script>
    alert('Incorrect username or password.');
    window.location.href='../register';
</script>
<?php
    }
    }
?>