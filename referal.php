<?php 
include "include/dbconn.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>USER</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/icons8-user-64.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <script>
            function changeDropdown(){
                var state=document.getElementById("mySelect").value;
                if (state=="1"){
                    document.getElementById("name").style.visibility='hidden';
                    document.getElementById("number").style.visibility='visible';
                    document.getElementById("time").style.visibility='hidden';
                } else if (state=="2"){
                    document.getElementById("time").style.visibility='hidden';
                    document.getElementById("name").style.visibility='visible';
                    document.getElementById("number").style.visibility='hidden';
                }else if (state=="3"){
                    document.getElementById("name").style.visibility='hidden';
                    document.getElementById("time").style.visibility='visible';
                    document.getElementById("number").style.visibility='hidden';
                }else{
                    document.getElementById("time").style.visibility='visible';
                    document.getElementById("name").style.visibility='visible';
                    document.getElementById("number").style.visibility='visible';
                }
            }

    </script>
</head>
<body>
<form action="create.php" method="post">
<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left">
					<img class="img-fluid" src="assets/img/R.png" alt="Logo">
					 </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<div style="text-align: center" class="form-group">
							<img  class="img-fluid" src="assets/img/R.png" alt="Logo" height="150px" width="150px"></div>
								<div class="form-group">
                                    <div class="form-floating mb-3">

                                        <h4 title="Hello" style="text-align: center" text-transform="uppercase">ONLINE REFERAL APPLICATION</h4>
                                                        
                                                <?php if (isset($_GET['error'])) { ?>
                                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                                <?php } ?>

                                                <?php if (isset($_GET['success'])) { ?>
                                                    <div class="alert alert-primary" role="alert" class="sucess"><?php echo $_GET['success']; ?></div>
                                                <?php } ?>
                                        <div class="form-floating mb-3">  <input type="text" name="name" class="form-control" placeholder="Full Name" required></div>
                                         
                                        <div class="form-floating mb-3">    <input type="number" name="studAge" class="form-control" placeholder="Age" required> </div>
                                            
                                           <div class="form-floating mb-3"> <select name="college" class="form-control" type="text" required>
                                                                    <option selected value="college">Select College*</option>
                                                                    <option value="College of Technology">College of Technology</option>
                                                                    <option value="College of Administartion">College of Administartion</option>
                                                                    <option value="College of Nursing">College of Nursing</option>
                                                                </select> </div>
                                        
                                        <div class="form-floating mb-3"><select name="yearLevel" class="form-control" type="text" required>
                                                            <option selected value="year Level" >Year Level*</option>
                                                            <option value="1st Year" >1st Year</option>
                                                            <option value="2nd Year<">2nd Year</option>
                                                            <option value="3rd Year">3rd Year</option>
                                                        </select></div>
                                       
                                        <div class="form-floating mb-3"> <select required name="prefMode" class="form-control" id="mySelect" onchange="changeDropdown(this.value);" aria-label="Floating label select example">
                                                            <option selected value="0">Prefered Mode*</option>
                                                            <option value="1">Call and Text</option>
                                                            <option value="2">Video Conferencing</option>
                                                            <option value="3">Face to Face</option>
                                                        </select></div>

                                                        <div id="number"><input name="cpnumber" type="number" class="form-control" placeholder="If Call and Text Provide Number"></div>
                                                        <div id ="name"><input name="fbname" type="text" class="form-control" placeholder="If Video Conferencing Provide Facebook Name"></div>
                                                        <div id="time"><input name="counTime"type="text" class="form-control" placeholder="If Face to Face Provide Time"></div>
                                      
                                                        <div class="form-floating mb-3">    <input required name="counDate" type="date" class="form-control" placeholder="Date and Time"> </div>

                                                        <div class="form-floating mb-3">    <input type="text" name="instructor" class="form-control" placeholder="Instructor Name" required> </div>
                                                        <div class="form-floating mb-3">    <input type="text" name="reasonOfReferal" class="form-control" placeholder="Referal Reason" required> </div>
                                            <div class="form-floating mb-3">
                                                <button role="button" name="submit" value="submit" class="btn btn-primary btn-block">Submit</button>
                                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 </form>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>