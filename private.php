<?php
session_start();

if($_SESSION['login']==null)
{
    header('HTTP/1.1 403 Forbidden',true,403);
    exit;	
}
?>

<h1>Page secrete</h1>

<?php

	echo "Bonjour ".$_SESSION['login'];

?>
<br/>
<a href="index.php">Retour</a><br/>
<a href="deco.php">Deconnexion</a>
