<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


    //lo que esta entre corchetes es el nombre de los campos en el form
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $personaje = $_POST['personaje'];
    $mensaje= $_POST['mensaje'];


    //Despliegue de datos recibidos 

    echo "<h2>El mensaje fue enviado correctamente</h2>";
    echo "<br><br>";
    echo "<p>Nombre: $nombre</p><br>";
    echo "<p>Fecha: $fecha</p><br>";
    echo "<p>Personaje: $personaje</p><br>";
    echo "<p>mensaje: $mensaje</p><br>";

}

?>