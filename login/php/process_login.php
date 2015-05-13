<?php
include_once 'loginSession.php';

$sess = new loginSession();
$mysqli = connectDB();
$sess->sec_session_start();
 
if (isset($_POST['email'], $_POST['p'])) 
{
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
 
    if ($sess->login($email, $password, $mysqli) == true) 
	{
        // Login success 
        header('Location: protected_page.php');
    } 
	else
	{
        // Login failed 
        header('Location: index.php?error=1');
    }
} 
else 
{
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
?>