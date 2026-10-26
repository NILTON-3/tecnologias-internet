<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars($_POST["nombre"] ?? "");
    $correo = htmlspecialchars($_POST["correo"] ?? "");
    $servicio = htmlspecialchars($_POST["servicio"] ?? "");
    $mensaje = htmlspecialchars($_POST["mensaje"] ?? "");

    echo "<h1>JH7 SRL</h1>";
    echo "<h2>Solicitud recibida</h2>";

    echo "Nombre: " . $nombre . "<br>";
    echo "Correo: " . $correo . "<br>";
    echo "Servicio: " . $servicio . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";

} else {
    echo "Debe enviar el formulario primero.";
}

?>