<?php
        //Connect to MySQL
        require_once("../database/connect.php");
        $userlistid = isset($_SESSION['userlistid']) ? $_SESSION['userlistid']: null;
        if($userlistid == null){
            ?>
            <script>
                alert('You need to sign in first! Thank you.');
                window.location.href='../register.php';
            </script>
            <?php
        }
        if($_SESSION['qtd'] != 1){
            ?>
            <script>
                alert('You need to sign in as Administrator Account! Thank you.');
                window.location.href='../register.php';
            </script>
            <?php
        }
?>