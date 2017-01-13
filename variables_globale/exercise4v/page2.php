<?php
if( isset($_POST['pseudo']) && isset($_POST['mdp']));{
setcookie('pseudo', $_POST['pseudo'] );
setcookie('mdp', $_POST['mdp']);}



if (isset($_COOKIE['pseudo']) && isset($_COOKIE['mdp'])) {
	echo $_COOKIE['pseudo'].' '. $_COOKIE['mdp'];
}

?>