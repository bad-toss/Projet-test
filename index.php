<?php

session_start();

?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Mini-site</title>
	</head>
	<body>
		<div id="conteneur">
			<div id='head'>
				<h1>Accueil</h1>
			</div>
			
			<div id="menu">
				<?php
					if(isset($_SESSION['login']))
						echo "<a href=\"private.php\">Page secrete</a>";
					else
						echo "<a href=\"login.php\">Page de connexion</a>";
				?>
			</div>
			
			<div id='corp'>
				<?php
					if(isset($_SESSION['login']))
						echo "Bienvenu ".$_SESSION['login'];
					else
						echo "Merci de vous connecter";
				?>
	
			</div>
			
			<div id='foot'>
				
			</div>
		</div>
		
	</body>
</html>