<?php
	$mysqli = new mysqli("10.1.0.6","PruebaApp","PruebaApp1","PruebaApp");
    if($mysqli -> connect_errno){
        echo "fallo al conectar a MySql (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    }
?>