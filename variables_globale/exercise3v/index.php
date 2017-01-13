<?php
setcookie('pseudo', $_POST['identifiant'], time()+ 365*24*3600);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600);
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<form action="" method="post">
		<div>
		<p><label for="pseudo">Pseudo</label></p>
			<p><input type="text" name="identifiant"></p>
		</div>
		<div>
			<p><label for="mdp">Mot de passe</label></p>
			<p><input type="text" name="mdp"></p>
		</div>
		<button type="submit">Se connecter</button>


	</form>
	
</body>
</html>