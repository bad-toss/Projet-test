<?php
	
	session_start();

?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Mini-site</title>
	</head>
	<body>
		
		<div id='head'>
			<h1>Accueil</h1>
		</div>
		
		<div id='corp'>
			<?php
				if(isset($_SESSION['login']))
					echo "<a href=\"accueil.php\">Page secrete</a>";
				else
					echo "<a href=\"login.php\">Page de connexion</a>";
			?>
		</div>
		
		<div id='foot'>
			
		</div>
		
	</body>
</html>