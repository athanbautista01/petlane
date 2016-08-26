<?php
    
    session_start();
    $host = "localhost";
    $user = "petlaneph";
    $password = "ebiz2016";
    $database = "petlane";
    /*$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
    $user = "ba2044a26a19ca";
    $password = "b6e4cc92";
    $database = "petlane";*/
    //Connect to MySQL
    $conn = new mysqli($host, $user, $password, $database);
    // Check connection
    if ($conn->connect_error) {
?>
        <script>
        //die("Connection failed: " . $conn->connect_error);
        alert('Error while connecting to database, sorry for inconvenience. Thank You!');
    </script>
<?php
    }
?>