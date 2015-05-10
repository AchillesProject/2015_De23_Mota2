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
		<title>Life achievements | Memories and moments | Life Awesome</title>

		<meta name="description" content="A life worth sharing. Your best moments and achievements all in one place. Travels, projects, jobs, life goals, events and more. Sign up for beta.">
		<meta name="keywords" content="social network, social, life, awesome, memories, achievements, tracking, life goals">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta charset="UTF-8">

		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Raleway:200,400,500'/>
		<link rel='stylesheet' type='text/css' href="../css/materialize.css"/>
		<link rel='stylesheet' type='text/css' href="../css/style.min.css"/>

	</head>

	<body style="overflow: hidden; height: 100%;">

		<nav id="mainNav" class="">
			<div class="nav-wrapper">
			  <a href="index.php" class="brand-logo">logo</a>
			  <ul id="mainmenu" class="right side-nav">
			    <li data-menuanchor="welcomePage">
			      <a href="#welcomePage">welcome</a>
			    </li>
			    <li data-menuanchor="discoverPage">
			      <a href="#discoverPage">discover</a>
			    </li>
			    <li data-menuanchor="subscribePage">
			      <a href="#subscribePage">newsletter</a>
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
        
		<div id="fullpage" class="fullpage-wrapper loaded" style="height: 100%; position: relative; touch-action: none; ">

		<section id="welcome" class="section hierarchical-timig video fp-section fp-table" data-anchor="welcomePage" data-delay="500" style="height: 810px; margin-top: 64px;">
		<div class="fp-tableCell" style="height:810px; display: block;">
			<div id="video-poster" style="height: 28vw;">
				<div class="check-inview fadeup">
					<h1>lifeaweso.me</h1>
				</div>
				<div class="check-inview fadeup">
					<h2>the best place, for your best moments</h2>
				</div>
				
			</div>
			<div style="position: absolute; top: 28vw; width: 100%; height: 100%; background: #00BCD4;">
				<div class="row center" >
				    <form class="container center col s4 offset-s4" 
				    style="background:#FFF; top:30px;">
						<div class="input-field"  >
					        <input id="Username" type="text" class="validate">
					        <label for="Username">Username</label>
				        </div>
				        <div class="input-field">
					        <input id="Password" type="password" class="validate">
					        <label for="Password">Password</label>
				        </div>
				         <div class="center">
					        <a href="http://materializecss.com/getting-started.html" id="login-button" 
					        class="btn waves-effect waves-light light-blue lighten-1"><i class="mdi-file-cloud left"></i>Get Started</a>
				        </div>
				        </br>
				    </form>
				</div>
			</div>
		</div></section>

		</div>
		<footer class="">
		  &copy; lifeaweso.me - a project by <a href="">@_danielep_</a> and <a href="">@Trip314</a>
		</footer>

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script type="text/javascript" src="../js/materialize.min.js"></script>
      	<script language="javascript" type="text/javascript" src = "../js/bootstrap.js"></script>
		
	</body>
</html>