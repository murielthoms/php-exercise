
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
if  (empty($_GET)){
	 

 	

?>


	<form method="_GET" enctype="multipart/form-data" action="">
		<select name="genre">

			<option value="Mme">Madame</option>
			<option value="Mlle">Mademoiselle</option>
			<option value="Mr">Monsieur</option>

		</select>

		<div>
			<label for="name">Nom</label>
			<input required="required"  type="text" name="nom" placeholder="Entrez votre nom ...">
		</div>
		<div>
			<label for="prenom">Prénom</label>
			<input  required="required"type="text" name="prenom" placeholder="Entrez votre prénom ...">
		</div>

		<div>
		<input required="required"type="file" name="fichier">
		<button type="submit" name="envoi">Envoyer</button>	
		</div>
		<div>

		</div>
	</form>
	<?php
}
else{
	echo 'Bonjour'." ". $_GET['prenom']." ".$_GET['nom']." ".$_GET['genre']."".$_GET['fichier'];
}
?>

 	
	
</body>
</html>