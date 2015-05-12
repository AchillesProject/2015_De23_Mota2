<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
 
if (! $error) 
{
    $error = 'Oops! An unknown error happened.';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Error</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link href="../dist/css/roboto.min.css" rel="stylesheet">
        <link href="../dist/css/material.min.css" rel="stylesheet">
        <link href="../dist/css/ripples.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<script language="javascript" type="text/javascript" src = "../js/jquery-2.1.3.min.js"></script>
		<script language="javascript" type="text/javascript" src = "../js/bootstrap.js"></script>
    </head>
    <body>
		<div class = "col-lg-8" style ="margin: auto; float: center; ">
			<h1 class="text-danger">There was a problem</h1>
			<p><?php echo $error; ?></p>  
			<a href = "index.php">Login</a> or 
			<a href = "register.php">Register</a>
		</div>
    </body>
</html>