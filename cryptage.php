<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="UTF-8">

  <title>Cryptage</title>
</head>
<body>

	<form method="post" action="cryptage.php">
		Chaine à crypter : <input type="text" name="chaine"/>
		<br/>
		<input type="submit" name="valider" value="valider" />		
	</form>
	
	<?php
	
		if(isset($_POST['valider'])){
			echo "<br/>";
			$chaineCrypt = sha1($_POST['chaine']);
			echo $chaineCrypt;
		}
	
	?>

</body>
</html>