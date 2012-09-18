<?php
session_start();

if(!isset($_SESSION['login']))
{
    header('HTTP/1.1 403 Forbidden',true,403);
    exit;	
}
?>

<h1>Accueils</h1>

<?php

	echo "Bonjour ".$_SESSION['login'];

?>
<br/>
<a href="index.php">Retour</a><br/>
<a href="deco.php">Deconnexion</a>
