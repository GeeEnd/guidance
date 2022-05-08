<?php 

if (isset($_POST['create'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$studentName = validate($_POST['studentName']);
	$referalReason = validate($_POST['referalReason']);
	$concern = validate($_POST['concern']);
	$reserveDate = validate($_POST['reserveDate']);
	$reserveTime = validate($_POST['reserveTime']);

	$user_data = 'studentName='.$studentName. 'referalReason='.$referalReason. 'concern='.$concern. 'reserveDate='.$reserveDate.  '&reserveTime='.$reserveTime;

       $sql = "INSERT INTO appointment(appID,studentName,referalReason,concern,reserveDate,reserveTime) 
	   			VALUES('','$studentName', '$referalReason', '$concern', '$reserveDate', '$reserveTime')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		   echo '<div class="alert alert-success" role="alert"> A simple success alert—check it out!</div>';
       	  header("Location: ../new-appointment.php? Created Successfully");
       }else {
          header("Location: ../new-appointment.php?error=unknown error occurred&$user_data");
       }

?>