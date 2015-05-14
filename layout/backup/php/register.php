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
        <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one uppercase letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
        <form action="<?php echo  $url?>" 
						method="post" name="registration_form">
            Username: <input type='text' name='username' id='username' /><br>
            Email: <input type="text" name="email" id="email" /><br>
            Password: <input type="password" name="password" id="password"/><br>
            Confirm password: <input type="password" name="confirmpwd" id="confirmpwd" /><br>
            <input type="button" value="Register" onclick="return regformhash(this.form, this.form.username, this.form.email, 
																				this.form.password, this.form.confirmpwd);" /> 
        </form>
        <p>Return to the <a href="index.php">login page</a>.</p>
		
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