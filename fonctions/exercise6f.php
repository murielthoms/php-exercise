<?php
function identite($name,$prenom,$age)
{

	return "Bonjour"." ".$prenom." ".$name." "."tu as"." ".$age;

}
echo identite('Thomas','Muriel', 46);
?>