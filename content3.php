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
<!-- STREAMING SERVER CODE -->
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<script language="JavaScript">

		var L_LAUNCHSAP_TEXT = "Launch stand-alone Windows Media Player";

		var g_bNetscape = ( -1 != navigator.appName.indexOf( "Netscape" ) );

</script>
<script language="JavaScript">
    <!--

		if ( navigator.appName == "Netscape" )

		{         	//-- This next line ensures that any plugins just installed are updated in the Browser

					//-- without quitting the browser.

					navigator.plugins.refresh();

					// We don't need the APPLET within IE

					// ***Please note that if you do not need to script events, you can safely remove the next two lines

					document.write("\x3C" + "applet MAYSCRIPT Code=NPDS.npDSEvtObsProxy.class")

					document.writeln(" width=5 height=5 name=appObs\x3E \x3C/applet\x3E")

		} //-->
</script>
<script LANGUAGE="VBSCRIPT">

		Sub cmdStandAlone_onclick

			If isobject(WMP) Then

				If WMP.playstate > 0 Then

					WMP.Close()

				End If

				location.href = "mms://192.168.10.40/InstrucieVideo's"

			End If

		End Sub
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
			
			<h1>EFS</h1> <!-- Title -->
			
			<iframe width="640" height="360" src="http://www.youtube.com/embed/85ORtoPBSWU" frameborder="0" allowfullscreen></iframe>
            <BR />
            <script language="Javascript">

				if( g_bNetscape )

				{

					document.writeln( "<APPLET mayscript code=WMPNS.WMP name=WMP1 width=640 height=360 MAYSCRIPT >" );

				}

			</script>

			<OBJECT CLASSID="clsid:6BF52A52-394A-11D3-B153-00C04F79FAA6" ID="WMP">

			<PARAM NAME="Name" VALUE="WMP1">

			<PARAM NAME="URL" VALUE="mms://192.168.10.40/InstrucieVideo's">

			</OBJECT>

			</APPLET>
            
			<!-- This is dummy text. You can change it to whatever you like -->
			
            

		<?php include("copyright.php"); ?>
			
		</div>
		
		
		<?php include("sidebar.php"); ?>	
</div>	
</body>
</html>
