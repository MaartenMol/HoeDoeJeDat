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
			
			<h1> (Removable) Device Checking </h1> <!-- Title -->
			
			
			<!-- This is dummy text. You can change it to whatever you like -->
		<p>
			Soms zijn er problemen met je file systeem van Windows. Dit kan in een harde schijf zijn of op een USB stick. In deze tekst leg ik je uit hoe je dit checkt en repareert.
        </p>
        <p>
            1. Lijst met moeilijke woorden<br />
            2. Eerst gaan we via de interface de USB checken<br />
            3. Dan gaan we laten zien hoe dit moet via de command prompt (CMD)
        </p>
        <p>
            <b>Moeilijke woorden</b> <br />
             - Command Prompt (CMD): Dit is een programma waarmee je Windows kunt besturen met tekst in plaats van de interface.<br />
             - Interface: Dit is het uiterlijk, alle balkjes, knopjes en plaatjes die je ziet. Dit wordt ook wel de GUI genoemd.<br />
             - Reboot: Het herstarten van je PC. Dit is anders dan je PC afsluiten en dan weer aan zetten.
        </p>
        <p>
            <b>Via de Interface</b><br />

            Pak de USB stick en prik deze in je PC of laptop. Of kies een harde schijf. Ga naar start en open Deze Computer. Klik met de rechtermuisknop op het apparaat en open de Eigenschappen. 
            <br /> <a href="img/content4/1.png"><img src="img/content4/1.png" alt="" height="360" width="600"></a> <br />
            Open dan het tapje Tools. Selecteer hier de optie "Repareer automatisch alle systeem fouten" druk dan op Start. 
            <br /> <a href="img/content4/2.png"><img src="img/content4/2.png" alt="" height="360" width="600"></a> <br />
        </p>
        <p>
            <b>Via de Command Prompt (CMD)</b> <br />

            Je kunt dit ook doen via de command prompt.
            Om dit te doen open je het start menu en typ je CMD, klik met de rechter muisknop op CMD en selecteer "uitvoeren als administrator". 
            <br /> <a href="img/content4/3.png"><img src="img/content4/3.png" alt="" height="360" width="600"></a> <br />
            Vul nu de command "cd\" in. Hier door gaat je target naar de C: schijf. Natuurlijk als je een andere schijf wil controleren kun je die ook targetten. Dit doe je door de schijf letter in te vullen, dus bijvoorbeeld: "F:" dan druk je op enter.
            <br /> <a href="img/content4/4.png"><img src="img/content4/4.png" alt="" height="360" width="600"></a> <br />
            Vervolgens voer je "chkdsk" in, als je op enter druk start hij gelijk. Als je de command zonder "/f" uitvoert controleert hij alleen, dus met "chkdsk /f" repareer je je HDD of USB stick. 
            <br /> <a href="img/content4/5.png"><img src="img/content4/5.png" alt="" height="360" width="600"></a> <br />
            <br /> <a href="img/content4/6.png"><img src="img/content4/6.png" alt="" height="360" width="600"></a> <br />
        </p>
        <p>             
            Maar omdat Windows op je C: drive staat kan hij niks veranderen daarom krijg je de optie om "chkdsk /f" uit te voeren tijdens een reboot. 
        </p>

		<?php include("copyright.php"); ?>
			
		</div>
		
		
		<?php include("sidebar.php"); ?>	
</div>	
</body>
</html>
