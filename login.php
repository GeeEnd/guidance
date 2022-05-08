<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/icons8-user-64.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="assets/img/R.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<form action="validate.php" method="post">
							<div style="text-align: center" class="form-group">
							<img  class="img-fluid" src="assets/img/R.png" alt="Logo" height="100px" width="100px"></div>
								<?php if (isset($_GET['error'])) { ?>
									<p class="error"><?php echo $_GET['error']; ?></p>
								<?php } ?>

								<div class="form-group">
								<input class="form-control" type="text" name="uname" placeholder="Username" required><br>
								
								<input class="form-control" type="password" name="password" placeholder="Password" required><br>
								
									<select  id="userRole" name="userRole" class="form-control" type="text" placeholder="Role" required>
										<option selected value="user">User</option>
										<option value="admin">Admin</option>
									</select>
								</div>

								<button  class="btn btn-primary btn-block" type="submit">Login</button>
								
							</form>
							<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div>
						<!--	<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div> -->
							<div class="text-center dont-have">Don’t have an account? <a href="signup.php">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>