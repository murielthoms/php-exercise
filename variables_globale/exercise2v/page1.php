<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<div>
	Bonjour, je m'appelle <?= $_SESSION['prenom'].' '.$_SESSION['nom']?> et j'ai <?= $_SESSION['age']?> ans.
</div>
	
</body>
</html>