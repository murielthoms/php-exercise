<?php
function genre($genre , $age)
{
	if ($genre === 'homme' && $age > 18) {
		echo'Vous êtes un homme et vous êtes majeur';
	}
	elseif ($genre === 'homme' && $age < 18){
		echo'Vous êtes un homme et vous êtes mineur';
	}
	elseif ($genre === 'femme' && $age > 18){
		echo'Vous êtes une femme et vous êtes majeure';
	}
	elseif ($genre === 'femme' && $age < 18){
		echo "Vous êtes une femme egt vous êtes mineure";
	}

}
genre('femme', 28);

?>