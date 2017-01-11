<?php
if (isset($_GET['batiment']) && isset($_GET['salle'])) {

	echo "Bâtiment :"." ".$_GET['batiment'].","."Salle :"." ".$_GET['salle'];
}else{
	echo 'erreur de bâtiment ou de salle';
}


?>
