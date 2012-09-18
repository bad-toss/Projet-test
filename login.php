<!DOCTYPE html>

<html lang="fr">
<head>
	
  	<meta charset="UTF-8">

  	<title>Minisite</title>
  	
</head>
<body>

	<div id="authentification">
		<form method="POST" action="index.php">
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
			$pwd = md5($_POST['pwd']);
			
			if($id == "admin" && $pwd == "5f4dcc3b5aa765d61d8327deb882cf99"){
				
				header("Location:accueil.html");
				
			}
			
		}
	
	?>
	
</body>
</html>