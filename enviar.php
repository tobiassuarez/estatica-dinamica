<?php

    $con = mysqli_connect('localhost', 'root', '', 'formulario') or die('no se conecto');

    echo 'enviar.php';
    echo "<br>";
    $campo_nombre = $_POST['nombre'];
    echo 'el nombre es: '.$campo_nombre;
    echo "<br>";
    $campo_apellidos = $_POST['apellidos'];
    echo 'el apellidos es: '.$campo_apellidos;
    echo "<br>";
    $campo_direccion = $_POST['direccion'];
    echo 'el direccion es: '.$campo_direccion;
    echo "<br>";
    $campo_email = $_POST['email'];
    echo 'el email es: '.$campo_email;
    echo "<br>";
    $campo_localidad= $_POST['localidad'];
    echo 'el localidad es: '.$campo_localidad;
    echo "<br>";
    $campo_distrito = $_POST['distrito'];
    echo 'el distrito es: '.$campo_distrito;
    echo "<br>";
    $campo_telefono = $_POST['telefono'];
    echo 'el telefono es: '.$campo_telefono;
    

    mysqli_close($con);

?>