<?php
	$conexion = mysqli_int();
	mysqli_ssl_set($conexion,NULL,NULL, "ssl/BaltimoreCyberTrustRoot.crt.pem", NULL,NULL);
	mysqli_real_connect($conexion,"10.1.0.6","PruebaApp","PruebaApp1","PruebaApp",3306)
    if($conexion -> connect_errno){
        echo "fallo al conectar a MySql (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    }
?>
