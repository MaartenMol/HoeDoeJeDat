<!DOCTYPE html>
<head>
<meta charset="utf-8">

<!-- Site Title -->
<title>Hoedoejedat?</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Styles -->
<link rel="stylesheet" href="style/layout.css">
<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'> <!-- Google Font (Replace with own if needed) -->

<!-- Javascript -->
<script src="js/jquery00.js"></script>
<script src="js/ticker00.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#items').list_ticker({
			speed:5000,
			effect:'fade'
		});	
	})
</script>
</head>
<body>

<!-- Site Header -->
<div id="header">
	<div id="logo">
		<h1></h1> <!-- Site's Title on line 36 and 42 in layout.css  -->
	</div>
</div>

	<!-- Navigation Bar -->
	
	<?php include("nav.php"); ?>
		
	
		<!-- Main Content -->
		
		<div class="sub_header">
		
		
		<!-- Announcements Ribbon -->
		
		<?php include("ribbon.php"); ?>
		
		 <!-- Creates the ribbon feel -->
		<div class="triangle-l"></div>
		<div class="triangle-r"></div>
		
		</div>
		
		<!-- End of Header and Sub-Header -->
		
		
		<!--
		====================================
			Now The Main Content Begins
		====================================
		-->
		
		
		<!-- Content Container -->
		
		<div id="content_container">
		
				
		<!-- Right Content -->
		
		<div class="right_content">
			
			<h1> Over Ons</h1> <!-- Title -->
			
			
			<!-- This is dummy text. You can change it to whatever you like -->
			<p>
			Wij zijn groepje 3 uit de klas IO1A3 op het Koning Willem I College. Rene, Rik, Nick & Maarten. <br />
            Wij doen dit project voor ITForce & het Koning Willem I College. Dit is ons 3de project en hopen veel te leren! <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
			</p>

		<?php include("copyright.php"); ?>
			
		</div>
		
		<?php include("sidebar.php"); ?>	
</div>	
</body>
</html>
