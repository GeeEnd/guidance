<!DOCTYPE html>
<html>
<head>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Sign Up</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/icons8-user-64.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
     <form action="signup-check.php" method="post">
     <div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left">
                         <img class="img-fluid" src="assets/img/ss.png" alt="Logo">     
                         <img class="img-fluid" src="assets/img/R.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1 class="mb-3">Register</h1>
     	
                                   <?php if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                   <?php } ?>

                                   <?php if (isset($_GET['success'])) { ?>
                                        <p class="success"><?php echo $_GET['success']; ?></p>
                                   <?php } ?>

                                   <div class="form-group">
                                   <?php if (isset($_GET['name'])) { ?>
                                        <input type="text" 
                                             name="name" 
                                             class ="form-control"
                                             placeholder="Name"
                                             value="<?php echo $_GET['name']; ?>"><br>
                                   <?php }else{ ?>
                                        <input type="text" 
                                             name="name"
                                             class ="form-control" 
                                             placeholder="Name" required><br>
                                   <?php }?>

                                   
                                   <?php if (isset($_GET['uname'])) { ?>
                                        <input type="text" 
                                             name="uname"
                                             class ="form-control"
                                             placeholder="User Name"
                                             value="<?php echo $_GET['uname']; ?>"><br>
                                   <?php }else{ ?>
                                        <input type="text" 
                                             name="uname" 
                                             class ="form-control"
                                             placeholder="User Name" required><br>
                                   <?php }?>
                              
                                   <input type="password" 
                                        name="password" 
                                        class ="form-control"
                                        placeholder="Password" required><br>
                                   
                                   <input type="password" 
                                        class ="form-control"
                                        name="re_password" 
                                        placeholder="Confirm Password" required><br>
                                   
									<select  id="userRole" name="userRole" class="form-control" type="text" placeholder="Role" required>
										<option selected value="user">User</option>
										<option value="admin">Admin</option>
									</select>
								</div>

                                   <div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
							</div>
                                   <div class="login-or"> <span class="or-line"></span> <span class="span-or"></span> </div>
							<div class="text-center dont-have">Already have an account? <a href="login.php">Login</a> </div>
                                   </div>
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
</form>
</html>