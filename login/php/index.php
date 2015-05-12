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
		<title>Muliple Choice Library | "Design web" Assignment</title>

		<meta name="description" content="Multiple choice library of HCM University of Technology; add, modify, delete questions and also create .pdf file">
		<meta name="keywords" content="social network, social, life, awesome, memories, achievements, tracking, life goals">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta charset="UTF-8">

		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Raleway:200,400,500'/>
		<link rel='stylesheet' type='text/css' href="../css/materialize.min.css"/>
		<link rel='stylesheet' type='text/css' href="../css/materialize.css"/>
		<link rel='stylesheet' type='text/css' href="../css/style.min.css"/>

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		
		<!-- Set body size-->
		<script type="text/javascript">
			//Initial load of page
			$(document).ready(sizeContent);

			//Dynamically assign height
			function sizeContent() {
			    var newHeight = $(window).height() - $("#header").height() - $("#footer").height() + "px";
			    $('body').css('height', newHeight);
			}
		</script>
	</head>

	<body>

		<nav id="mainNav" class="">
			<div class="nav-wrapper">
			  <a href="index.php" class="brand-logo">multipleLib.com</a>
			  <ul id="nav-mobile" class="right hide-on-med-and-down">
			    <li data-menuanchor="welcomePage">
			      <a href="#welcomePage">Welcome</a>
			    </li>
			    <li data-menuanchor="discoverPage">
			      <a href="#discoverPage">About Us</a>
			    </li>
			    <li data-menuanchor="subscribePage">
			      <a href="#subscribePage">Register</a>
			    </li>
			  </ul>
			</div>
		</nav>
		
		<div id="sideNav">
		  <ul id="sideMenu">
		    <li data-menuanchor="welcomePage">
		      <a href="#welcomePage"></a>
		    </li>
		    <li data-menuanchor="discoverPage">
		      <a href="#discoverPage"></a>
		    </li>
		    <li data-menuanchor="subscribePage">
		      <a href="#subscribePage"></a>
		    </li>
		  </ul>
		</div>
        
		<div id="fullpage" class="fullpage-wrapper loaded" style="height: 100%; position: relative; touch-action: none;">

		<section id="welcome" class="section hierarchical-timig video fp-section fp-table" 
		data-anchor="welcomePage" data-delay="500" style="height: 100%; margin-top:64px; padding:0;">

		<div class="fp-tableCell" style="height: 100%">
			
			<div id="poster" class="row center" style="margin-bottom: 0; height: 40%;">
					<div class="check-inview fadeup">
						<h1>Inspiration Job</h1>
					</div>
					<div class="center check-inview fadeup">
	<h5><pre>A good education can change anyone. 
A good teacher can change everything.</pre></h5>
					</div>
				
			</div>

			<div class="row center" style="width: 100%; background: #0D8DE4; height:100%">
			    <form class="container col s4 offset-s4" 
			    style="background:#FFF;margin-top: 2em; margin-bottom: 2em;">
					<div class="input-field" >
				        <input id="Username" id="inputMail" type="text" class="validate">
				        <label for="Username">Username</label>
			        </div>
			        <div class="input-field">
				        <input id="Password" type="password" class="validate">
				        <label for="Password">Password</label>
			        </div>
			         <div class="center" style="margin-bottom: 2%">
				        <a href="http://materializecss.com/getting-started.html" id="login-button" 
				        class="btn waves-effect waves-light blue"><i class="mdi-file-cloud left"></i>Get Started</a>
			        </div>
			    </form>
			</div>
		</div></section>

		</div>
		<footer class="">
		  &copy; multibple choice lib project by <a href="">@_students</a>
		</footer>


      	<script type="text/javascript" src="../js/materialize.min.js"></script>
      	<script language="javascript" type="text/javascript" src = "../js/bootstrap.js"></script>
		
	</body>
</html>