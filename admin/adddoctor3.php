  <?php
    
    //Connect to MySQL and validate userid
            include("requiredLogin.php");
    //include the header
    include("includeHeader.php");
    $qid = $_SESSION['userid'];

	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$address = $_POST["address"];
	$contactNo = $_POST["contactNo"];
	$hospital = $_POST["hospital"];
	$degree = $_POST["degree"];
	$school = $_POST["school"];
	$experience = $_POST["experience"];
	$boardCertificate = $_POST["boardCertificate"];
	$award = $_POST["award"];
	$additionalInfo = $_POST["additionalInfo"];

	 /*	$file_name=$_FILES["image"]["name"];
        $temp_name=$_FILES["image"]["tmp_name"];
        $imgtype=$_FILES["image"]["type"];
        $target_path = "../images/Veterinarians/".$file_name;
        $final_name = "images/Veterinarians/".$file_name;*/


	$selectQuery = "SELECT Userlistid FROM userlist ORDER BY userlistid DESC LIMIT 1;";

	$result = mysqli_query($conn, $selectQuery);

	while($row = $result->fetch_assoc()) {
		$UserListID = $row['Userlistid'];
	}
/*
	if(move_uploaded_file($temp_name, $target_path)) {*/
	$query = "INSERT INTO veterinarian (userlistid, lastName,firstName, address, contactno,hospital,degree,schoolgraduated,experience,boardcertification,awards,photo,additionalInfo,status) VALUES ('$UserListID', '$lastName', '$firstName', '$address', '$contactNo','$hospital', '$degree', '$school', '$experience', '$boardCertificate', '$award', 'images/Customers/bp.png','$additionalInfo', 'Active');";


	if ($conn->query($query) === TRUE) {			//Check if operation was successful
	$message = "Created user with ID: " . $conn->insert_id;
	} else {
		die ("Insert failed: ". $conn->error);		//Retrieve any error in the operation
	}	

		/*}*/

?>

  <section>
            <div class="container">
                <div class="col-lg-12">
                    <div class="well bs-component">
                        <div class="form-horizontal">
                            <fieldset>
                                <!-- <legend><h1><b></h1></legend> -->
                                <br/></br>
                                <div class="col-lg-offset-2 col-lg-8">
                                    <div class="panel panel-success">
                                        <div class="panel-heading" align="center"><h4><b>Success</b></h4></div>
                                        <div class="panel-body">

                                            <p align="center"><a href="vets.php" class="btn btn-outline">Click here to view</a></p>

                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
   
    include("includeFooter.php");
?>