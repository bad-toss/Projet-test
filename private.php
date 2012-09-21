<?php

session_start();

$_SESSION['currentAddr']=$_SERVER['REMOTE_ADDR'];

include ("control.function.php");

$isLogged=isLogged($_SESSION['login']);

if(!isset($isLogged)){
	
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
					echo "<a href=\"index.php\">Accueil</a><br/>";
					echo "<a href=\"deco.php\">Deconnexion</a>";
				?>
			</div>
			
			<div id='corp'>
				<?php
					echo "Bonjour ".$_SESSION['login'];
				?>
			</div>
			
			<div id='foot'>
				
			</div>
		</div>
		
	</body>
</html>
