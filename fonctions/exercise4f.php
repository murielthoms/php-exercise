<?php
function desNombres($num1= 3, $num2= 6)
{
	if ( $num1 > $num2 || $num1 < $num2 ) {
		echo $num1;
		}
	else{
		echo $num1 ,"\n". $num2;
	}
}
desNombres();


?>