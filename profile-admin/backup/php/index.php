<?php
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
    <?php
        if (isset($_GET['error'])) 
		{
            echo '<p class="error">Error Logging In!</p>';
			echo "<form action='process_login.php' method='post' name='login_form'>                      
            Email: <input type='text' name='email' />
            Password: <input type='password' name='password' id='password'/>
            <input type='button'  value='Login' 
                   onclick='formhash(this.form, this.form.password);' /> 
			</form>";
			echo "<p>If you don't have an account, please <a href='register.php'>register</a></p>";
        }
		else
		{
			if ($sess->login_check($mysqli) == true) 
			{
				echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
	 
				echo '<p>Do you want to change user? <a href="logout.php">Log out</a>.</p>';
			} 
			else 
			{
				echo "<form action='process_login.php' method='post' name='login_form'>                      
				Email: <input type='text' name='email' />
				Password: <input type='password' name='password' id='password'/>
				<input type='button'  value='Login' 
					   onclick='formhash(this.form, this.form.password);' /> 
				</form>";
				echo '<p>Currently logged ' . $logged . '.</p>';
				echo "<p>If you don't have an account, please <a href='register.php'>register</a></p>";
			}
		}

        
	?>    
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