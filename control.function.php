<?php
	
	function isLogged($user){
		
		$result = false;
		
		if(isset($user) && $_SESSION['currentAddr']==$_SESSION['sessionAddr'])
			$result =  true;
		
		return $result;
		
	}
	
?>