<?php
    require 'conexion.php';

    $id = $mysqli -> real_escape_string($_POST['id']);
    $nombre =  $mysqli -> real_escape_string($_POST['nombre']);

    $sql = "INSERT INTO NOMBRES VALUES ('$id', '$nombre')";
    $resultado = $mysqli->query($sql);
    echo "<a href='index.php' class='btn registrar'>Regresar</a>";
?>