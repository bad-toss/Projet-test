<?php

	session_start();
	
	$_SESSION['login']=NULL;
	$_SESSION['sessionAddr']=NULL;
	
	header('Location:index.php');

?>