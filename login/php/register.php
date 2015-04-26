<?php
include_once 'loginSession.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link href="../dist/css/roboto.min.css" rel="stylesheet">
        <link href="../dist/css/material.min.css" rel="stylesheet">
        <link href="../dist/css/ripples.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<script language="javascript" type="text/javascript" src = "../js/jquery-2.1.3.min.js"></script>
		<script language="javascript" type="text/javascript" src = "../js/bootstrap.js"></script>
		<script type="text/JavaScript" src="../scripts/sha512.js"></script> 
        <script type="text/JavaScript" src="../scripts/forms.js"></script>
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
		<div class = "container-fluid" style ="margin: auto; float: center; ">
			<h1>Register with us</h1>
			<?php
			if (!empty($error_msg)) 
			{
				echo $error_msg;
			}
			$sess = new loginSession();
			$mysqli = connectDB();
			$url = $sess->esc_url($_SERVER['PHP_SELF']);
			$sess->validateUserReg();
			?>
			
			
			<div class="col-lg-10" style="float:center; padding-left:16%">
				<div class="well bs-component">
					<form class="form-horizontal" action="<?php echo  $url?>" method="post" name="registration_form">
						<fieldset>
							<legend>Register Form</legend>
							
							<div class="form-group">
								<label for="inputEmail" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="email" class="form-control" id="email" placeholder="must have a valid email format" name="email">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputUsername" class="col-lg-2 control-label">Username</label>
								<div class="col-lg-10">
									<input type="text" name="username" id="username" class="form-control" placeholder="may contain only digits, upper and lower case letters and underscores">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword" class="col-lg-2 control-label">Password</label>
								<div class="col-lg-10">
									<input type="password" class="form-control" name="password" id="password" 
									placeholder="must be at least 6 characters long, contain at least 1 uppercase letter, 1 lower case letter, 1 number">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword" class="col-lg-2 control-label">Comfirm Password</label>
								<div class="col-lg-10">
									<input type="password" class="form-control" name="confirmpwd" id="confirmpwd"
									placeholder="must match your above password">
								</div>
							</div>
						
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button class="btn btn-default">Cancel</button>
									<button type="button" value="Register" class="btn btn-primary" 
									onclick='regformhash(this.form, this.form.username, this.form.email, this.form.password, this.form.confirmpwd);'>
									Register</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<h4>Return to the <a href="index.php">login page</a>.</h4>
			</div>
		</div>	
		
		
		<script src="../dist/js/ripples.min.js"></script>
		<script src="../dist/js/material.min.js"></script>
		<script>
			$(document).ready(function() {
				// This command is used to initialize some elements and make them work properly
				$.material.init();
			});
		</script>
    </body>
</html>