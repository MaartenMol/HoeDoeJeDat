<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" lang="en" content="Realm of the Dark Tempest is a Survival easy/hard and PvE/PvP server with many plugins that add great features!">
<meta name="keywords" lang="en" content="Minecraft, 1.4.7, 1.4.6, 1.5, Survival, PvP, PvE, easy, hard, Nether, The End, World, Build, iConomy, Web Auction, RotDT, Realm, of, the, dark, tempest, free, towny, money, mobs, bosses, custom recipes, custom arrows, TheRadarWolf, Radagasd, Hebiertje2, The Galactic Kings, Minecraft Server, Bukkit, CraftBukkit, 1.4.7 R1.0, Wiki, website, market, beta, dynmap, forums, planetminecraft, survival-rotdt.dyndns.org, port 25565, 25565, ">
<meta name="robots" content="index, follow">
<meta name="msapplication-TileColor"content="##FFBF00"/>
<meta name="msapplication-TileImage"content="/img/Logo.png"/>
<!-- Title -->
<title>Hoedoejedat?</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Stylesheet -->
<link rel="stylesheet" href="style/layout.css">
<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
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
		<h1></h1>
	</div>
</div>
	<?php include("nav.php"); ?>
		
		<!-- Main Content -->
		
		<div class="sub_header">
        
		<!-- Announcements Ribbon -->
		
		<?php include("ribbon.php"); ?>
		
		 <!-- Ribbon -->
		<div class="triangle-l"></div>
		<div class="triangle-r"></div>
		</div>
		
		
		<!--
		====================================
			Now The Main Content Begins
		====================================
		-->
		
		
		<!-- Content Container -->
		
		<div id="content_container">
		
				
		<!-- Right Content -->
		
		<div class="right_content">
			
			 <!-- Title -->
			
			
			<!-- This is dummy text. You can change it to whatever you like -->
			
			<?php  
			/** 
			 * who: RSS reader for website 
			 * What: Get simplexml 
			 * @Auhor: Butteflyice 
			 * Date : 30-07-2011 
			 */ 


			// Show number of items  
			$items = 5;  

			// Load rss into simplexml rss from pctuts http://www.pctuts.be/external.php?do=rss&type=newcontent&sectionid=1&days=120&count=10 just replace this link voor the right one
			$rss        = simplexml_load_file('http://tweakers.mobi/rss/all'); 

			// Titel from rss 
			echo "<h1>Nieuws</h1>\n";  

			// Get time   
			echo "<div class=\"time\">{$rss->channel->lastBuildDate}</div><br>\n";  

			// show last items  
			for($i=0;$i<$items;$i+=1)  
			   {  
			   echo "<div class=\"channel\"><a href=\"{$rss->channel->item[$i]->link}\" target=\"_blank\">{$rss->channel->item[$i]->title}</a></div>\n";  
			   echo "<div class=\"description\">{$rss->channel->item[$i]->description}</div><br>\n";  
			   }  

			  

			?>
			

		<?php include("copyright.php"); ?>
			
		</div>
		
		
		<?php include("sidebar.php"); ?>	
</div>	
</body>
</html>
