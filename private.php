<?php
session_start();

if(!isset($_SESSION['login']))
{
    header('HTTP/1.1 403 Forbidden',true,403);
    exit;	
}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Mini-site</title>
	</head>
	<body>
		<div id="conteneur">
			<div id='head'>
				<h1>Page secrete</h1>
			</div>
			
			<div id="menu">
				<?php
					if(isset($_SESSION['login'])){
						echo "<a href=\"index.php\">Accueil</a><br/>";
						echo "<a href=\"deco.php\">Deconnexion</a>";
					}else
						echo "<a href=\"login.php\">Page de connexion</a>";
				?>
			</div>
			
			<div id='corp'>
				<?php
					if(isset($_SESSION['login']))
						echo "Bonjour ".$_SESSION['login'];
				?>
			</div>
			
			<div id='foot'>
				
			</div>
		</div>
		
	</body>
</html>
