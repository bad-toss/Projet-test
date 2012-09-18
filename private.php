<?php
session_start();

if($_SESSION['login']==null)
{
    header('HTTP/1.1 403 Forbidden',true,403);
    exit;	
}
?>

<h1>Accueils</h1>