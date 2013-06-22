<?php
function validar($cadena){ 
	$cadena = htmlspecialchars($cadena); 
	$cadena = trim($cadena); 
	$cadena = stripslashes($cadena); 
	$cadena = nl2br($cadena); 
	return $cadena; 
} 
?>