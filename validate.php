<?php 
session_start(); 
include "include/dbconn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['userRole'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$userRole = validate($_POST['userRole']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else if(empty($userRole)){
        header("Location: login.php?error=Role is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass' AND userRole='$userRole'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass && $row['userRole'] === 'Admin') {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
				$_SESSION['userRole'] = $row['userRole'];
            	$_SESSION['id'] = $row['id'];
                //echo "Admin Login"
			    header("Location: admin/index.php");

				}elseif ($row['user_name'] === $uname && $row['password'] === $pass && $row['userRole'] === 'User'){
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['userRole'] = $row['userRole'];
					$_SESSION['id'] = $row['id'];
				header("Location: counselor/index.php");
                //echo "User Login"

				}else{
					header("Location: login.php?error=Incorect User name or password");
					exit();
			}

		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}