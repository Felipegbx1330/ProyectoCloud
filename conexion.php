<?php
	$mysqli = new mysqli("20.120.80.44","Prueba","Prueba","APP");
    if($mysqli-> connect_errno){
       echo "fallo al conectar a MySql (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    }
?>
