<?php
    
    $dogCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='1'";
    $result = mysqli_query($conn, $dogCount);
    while($row = $result->fetch_assoc()) {
        $dog = $row['CategoryTot'];
    }
    
    $catCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='2'";
    $result = mysqli_query($conn, $catCount);
    while($row = $result->fetch_assoc()) {
        $cat = $row['CategoryTot'];
    }

    $fishCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='3'";
    $result = mysqli_query($conn, $fishCount);
    while($row = $result->fetch_assoc()) {
        $fish = $row['CategoryTot'];
    }

    $birdCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='4'";
    $result = mysqli_query($conn, $birdCount);
    while($row = $result->fetch_assoc()) {
        $bird = $row['CategoryTot'];
    }

    $horseCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='5'";
    $result = mysqli_query($conn, $horseCount);
    while($row = $result->fetch_assoc()) {
        $horse = $row['CategoryTot'];
    }

    $invertCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='6'";
    $result = mysqli_query($conn, $invertCount);
    while($row = $result->fetch_assoc()) {
        $invert = $row['CategoryTot'];
    }

    $poultryCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='7'";
    $result = mysqli_query($conn, $poultryCount);
    while($row = $result->fetch_assoc()) {
        $poultry = $row['CategoryTot'];
    }

    $rabbitCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='8'";
    $result = mysqli_query($conn, $rabbitCount);
    while($row = $result->fetch_assoc()) {
        $rabbit = $row['CategoryTot'];
    }

    $reptileCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='9'";
    $result = mysqli_query($conn, $reptileCount);
    while($row = $result->fetch_assoc()) {
        $reptile = $row['CategoryTot'];
    }

    $rodentCount = "SELECT COUNT(PetID) AS CategoryTot FROM pet where Categoryid ='10'";
    $result = mysqli_query($conn, $rodentCount);
    while($row = $result->fetch_assoc()) {
        $rodent = $row['CategoryTot'];
    }
    
?>