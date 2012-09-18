<?php
	session_start();
	
	
	/*if(substr($_SERVER['SERVER_PROTOCOL'],0,5)!=='HTTPS'){
		var_dump($_SERVER['SERVER_PROTOCOL']);	
	}*/
?>

<!DOCTYPE html>

<html lang="fr">
<head>
	
  	<meta charset="UTF-8">

  	<title>Minisite</title>
  	
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
				
				header("Location:accueil.html");
				
			}
			
		}
	
	?>
	
</body>
</html>