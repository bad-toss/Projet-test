<?php

	session_start();

?>

<h1>Page secrete</h1>

<?php echo "Bonjour ".$_SESSION['login']; ?>
<br/>
<a href="index.php">Accueil</a><br/>
<a href="deco.php">Deconnexion</a><br/>
