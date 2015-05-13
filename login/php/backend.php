<?php //http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
include_once 'loginSession.php';

$sess = new loginSession();
$mysqli = connectDB();
$sess->sec_session_start();
 
if ($sess->login_check($mysqli) == true)
{
    $logged = 'in';
} 
else 
{
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
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
	<div class = "container-fluid" style ="margin: auto; float: center; ">
    <?php
        if (isset($_GET['error'])) 
		{
            
	?>	
		<div class = "col-lg-5" style ="margin: auto; float: center; ">
			<div class="well bs-component">
			<div class="alert alert-dismissable alert-danger">
				<strong>Error Logging in!</strong> <a href="javascript:void(0)" class="alert-link"> Try again</a>
			</div>
			<form class="form-horizontal" action='process_login.php' method='post' name='login_form'>
				<fieldset>
					<legend>Login</legend>
					<div class="form-group">
						<label for="inputText" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="inputMail" placeholder="email" name="email">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button class="btn btn-default">Cancel</button>
							<button type="button"  value="Login" class="btn btn-primary"
									onclick="formhash(this.form, this.form.password);" >Log In</button>
						</div>
					</div>
				</fieldset>
			</form>
			<p>If you don't have an account, please <a href='register.php'>register</a></p>
			</div>
		</div>
	<?php		
			
        }
		else
		{
			if ($sess->login_check($mysqli) == true) 
			{
				echo '<p>Currently logging ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
	 
				echo '<p>Do you want to <a href="logout.php">Log out</a>?</p>';
			} 
			else 
			{
	?>
		<div class = "col-lg-5" style ="margin: auto; float: center; ">
			<div class="well bs-component">
			<form class="form-horizontal" action='process_login.php' method='post' name='login_form'>
				<fieldset>
					<legend>Login</legend>
					<div class="form-group">
						<label for="inputText" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="inputMail" placeholder="email" name="email">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button class="btn btn-default">Cancel</button>
							<button type="button"  value="Login" class="btn btn-primary"
									onclick="formhash(this.form, this.form.password);" >Log In</button>
						</div>
					</div>
				</fieldset>
			</form>
	<?php
			echo '<p>Currently logged ' . $logged . '.</p>';
			echo "<p>If you don't have an account, please <a href='register.php'>register</a></p>";
	?>
			</div>
		</div>
	<?php
				
			}
		}

        
	?>  
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