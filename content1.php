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
			
			<h1>XP Modus</h1> <!-- Title -->
			
			<!-- This is dummy text. You can change it to whatever you like -->
			
<p>
Soms zijn er programma's die niet op een Windows 7 (of hoger) computer werken, maar wel op Windows XP. In deze uitleg ga ik jou laten zien hoe je toch laten zien hoe je die programma's werkend krijgt in Windows 7 (of hoger).
De instructie over hoe je dit kunt doen kun je vinden op de volgende pagina.
</p>
<p>
<b>Moeilijke woorden:</b>
</p>
<p>
BIOS				- Basic input output system
RAM 				- Random Access Memory
SP3					- Service Pack 3
License agreement	- Gebruikers voorwaarde
</p>


<p>
XP mode is een virtuele computer die op jou eigen computer draait. Je draait dus 2 computers, in 1!
Nadeel: Verbruikt meer RAM, 
</p>
<p>
De Windows XP die je erbij installeert is: "Windows XP Professional met SP3".
Om XP Mode te kunnen draaien moet je Windows 7 Professional/Enterprise of Ultimate gebruiken.
</p>
<p>
Als allereerste moet je "Hardware Assistent Virtualsation" aanzetten in je BIOS.
Om Windows XP mode te kunnen gebruiken moet je deze eerst downloaden van de Microsoft site.
Om deze te vinden zoek je naar "XP Mode Microsoft".
Nu zul je bij een site komen van Microsoft waar je dit kan downloaden.
Op de site moet je je operating System aanklikken die je zelf nu gebruikt, en de taal van je computer.
Dan komen er 3 downloads naar voren, download die alle 3!
</p>
<p>
Nu installeer je deze alle 3 achter elkaar, beginnend met download 1, gevolgd met download 2 en daarna 3. Je blijft gewoon doorklikken tot hij klaar is.
Na download 2 geinstalleerd te hebben vraagt hij om een computer herstart. STEL DIT UIT!
Als alle drie de bestanden geinstalleerd zijn herstart je je computer.
</p>
<p>
Nu gaan we XP mode gebruiken. Klik op je start menu, ga naar al je programma's en daar zie je "Windows Virtual PC"
Als je die map opent zie je daaronder "Windows XP Mode", open deze.
Als deze opent moet je eerst de "License agreement" accepteren. Daarna moet je een account aanmaken op je virtuele computer. Hiermee hoef je alleen op de virtuele computer in te loggen, en dit is gescheiden van de echte computer.
Nu moet je blijven doorklikken en uiteindelijk zal hij Windows XP gaan installeren. Dit kan enige tijd duren.
</p>
<p>
Als je nu bij mijn computer kijkt zie je allerlei mappen staan die je op je echte computer ook hebt, dit komt omdat XP Mode dezelfde mappen gebruikt als die je zelf gebruikt.
XP Mode heeft dus toegang tot die mappen.
</p>
<p>
Installeer nu het programma die niet op Windows 7 werkt, maar wel op Windows XP.
Deze installeer je uiteraard op de XP Mode Computer.
Nadat deze geinstalleerd is zie je via het start menu dat deze geinstalleerd is. Controleer dit!!
Als je nu XP Mode afsluit, zul je zien dat de XP Mode computer op stand-by word gezet, waardoor deze geen RAM meer gebruikt.
</p>
<p>
Als je nu op je Windows 7 computer weer naar de map gaan van Windows Virtual PC, waar we eerder XP Mode hebben geopend,
zul je zien dat daar nu een nieuwe map is. "Windows XP Mode Applications"
Open nu de applicatie die je geinstalleerd hebt op de XP mode computer die het niet op Windows 7 doet.
Als je deze opent krijg je een melding dat een gebruiker nog steeds ingelogd is op XP Mode. Klik op doorgaan.
</p>
<p>
Nu opent het programma op je Windows 7 computer, maar ziet er wel uit als een XP programma.
Nu kun je dit programma dus toch goed gebruiken, op je Windows 7 computer.
</p>



		<?php include("copyright.php"); ?>
			
		</div>
		
		
		<?php include("sidebar.php"); ?>	
</div>	
</body>
</html>
