<?php
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
setcookie('pseudo', $pseudo, time() + 3600);
setcookie('mdp', $mdp, time() + 3600);
echo '<div>' . $_COOKIE['pseudo'] . '</div>';
echo '<div>' . $_COOKIE['mdp'] . '</div>';