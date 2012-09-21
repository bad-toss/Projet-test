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

<!DOCTYPE html>

<html lang="fr">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
  	<meta charset="UTF-8">

  	<title>Mini-site</title>
  	
</head>
<body>

	<div id="authentification">
		<form method="POST" action="login.php">
			Login :
			<input type="text" name="id" />
			<br/>
			Password :
			<input type="password" name="pwd" />
			<br/>
			<input type="submit" name="validate" value="Connection" />
		</form>
	</div>
	
	<?php	
	
		if(isset($_POST['validate'])){
			
			$id = $_POST['id'];
			$pwd = sha1($_POST['pwd']."grain");
			
			if($id == "admin" && $pwd == "dee3d9026fdbf7c11e4f18858933cd5ecf88d9b8"){
				
				$_SESSION['login']=$id;
				$_SESSION['sessionAddr']=$_SERVER['REMOTE_ADDR'];
				header("Location:private.php");
				
			}
			
		}
	
	?>
	
</body>
</html>