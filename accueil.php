<?php
session_start();

if($_SESSION['login']==null)
{
    header("HTTP/1.1 401 Unauthorized" );
    exit;	
}
?>

<h1>Accueils</h1>