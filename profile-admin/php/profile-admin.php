<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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
    <script type="text/javascript">
      	$( document ).ready(function(){
      		$(".button-collapse").sideNav();

      		$("#button-header").click(function(){
			    $("#right-nav").toggle();
			    if ($("#right-nav").is(':visible')) {
				   //add more doing when visible;
				    $("#background-layer").addClass("morph-background-overlay-active"); 
				}
				else {
			        $("#background-layer").removeClass("morph-background-overlay-active");
			    }
			});

			$("#background-layer").click(function(){
		    	$("#background-layer").removeClass("morph-background-overlay-active");
			    $("#right-nav").hide();
			});
      	})
    </script>
</head>
<body>
	<header>
		<nav id="mainNav">
			<div class="nav-wrapper" style="background-color: #0D8DE4; color: #FFF"> 
			  <ul id="nav-layout-left" class="left">
			  	<li><a href="#" id="button-header"><i class="mdi-navigation-menu"></i></a></li>
			  </ul>
			  <ul id="nav-layout-right" class="right">
			  	<li><a class="page-title">Admin Panel</a></li>  	
			  </ul>
			</div>
		</nav>

	  	  <ul id="right-nav" class="side-nav fixed" style="display:none; z-index:999999;"> <!-- right-aligned  --> 
	  	  		
	  		<li style="background-color: #0D8DE4;"><a href="index.php" style="padding:0 15px 0 65px;font-size:24px;background:url(../imgs/logo-header.jpg) center left no-repeat;color: #FFF">mcqLib.com</a></li>
	  		<li><a href="about.html" class="waves-effect waves-teal">Profile</a></li>
	  		<li><a href="about.html" class="waves-effect waves-teal">Dashboard</a></li>
	  		<li><a href="about.html" class="waves-effect waves-teal">Alert Message</a></li>
	  		<li><a href="about.html" class="waves-effect waves-teal">Faculty</a></li>
	  		<li><a href="about.html" class="waves-effect waves-teal">Subject</a></li>
	  		<li><a href="about.html" class="waves-effect waves-teal">User</a></li>
	  		<li><a href="about.html" class="waves-effect waves-teal">Log out</a></li>
	        <li class="no-padding">
	          <ul class="collapsible collapsible-accordion">
	            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Example</a>		<!-- show subjects in Edit questions page -->
	              <div class="collapsible-body">
	                <ul>
	                  <li><a href="color.html">Color</a></li>
	                  <li><a href="grid.html">Grid</a></li>
	                  <li><a href="helpers.html">Helpers</a></li>
	                  <li><a href="media-css.html">Media</a></li>
	                  <li><a href="sass.html">Sass</a></li>
	                  <li><a href="shadow.html">Shadow</a></li>
	                  <li><a href="table.html">Table</a></li>
	                  <li><a href="typography.html">Typography</a></li>
	                </ul>
	              </div>
	            </li>
	          </ul>
	        </li>
	      </ul>
	</header>

    <!-- BEGIN BACKGROUND OVERLAY (when menu open) -->
	<div id="background-layer" class="morph-background-overlay"></div>
	<!-- END BACKGROUND OVERLAY (when menu open) -->

	<div id="fullpage" class="fullpage-wrapper loaded" style="height: 100%; position: relative; touch-action: none; margin-top:50px;">

	<!-- Change code here -->
		<table class="bordered hoverable striped responsive-table container">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
              <th data-field="price">Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
	</div>

  	<script type="text/javascript" src="../js/materialize.min.js"></script>
  	<script language="javascript" type="text/javascript" src = "../js/bootstrap.js"></script>
</body>
</html>