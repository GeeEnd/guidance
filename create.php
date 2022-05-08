<?php 
// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		include "include/dbconn.php";
		// get variables from the form
		$name = $_POST['name'];
        $studAge = $_POST['studAge'];
        $college = $_POST['college'];
        $yearLevel = $_POST['yearLevel'];
        $prefMode = $_POST['prefMode'];
        $cpnumber = $_POST['cpnumber'];
        $fbname = $_POST['fbname'];
        $counTime = $_POST['counTime'];
        $counDate = $_POST['counDate'];


		//write sql query

		//$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";
        $sql = "INSERT INTO counseling(ID,name,studAge,college,yearLevel,prefMode,cpnumber,fbname,counTime,counDate)VALUES('','$name','$studAge','$college','$yearLevel','$prefMode','$cpnumber','$fbname','$counTime','$counDate')";
		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			header("Location: counseling.php?success=Your data has been posted");
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>