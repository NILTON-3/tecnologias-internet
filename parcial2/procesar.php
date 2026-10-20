<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST["nombre"] ?? "");
    $correo = htmlspecialchars($_POST["correo"] ?? "");
    $mascota = htmlspecialchars($_POST["mascota"] ?? "");

    echo "<h1>Turno reservado en Veterinaria Patitas</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo: $correo</p>";
    echo "<p>Mascota: $mascota</p>";

    $servicios = [
        "Consulta general - Bs 60",
        "Vacuna antirrabica - Bs 40",
        "Bano y corte - Bs 50"
    ];

    echo "<h2>Servicios de la veterinaria</h2>";
    echo "<ul>";
    foreach ($servicios as $servicio) {
        echo "<li>$servicio</li>";
    }
    echo "</ul>";
    echo "<p>Te atiende NILTON MAMANI CAUNA</p>";
} else {
    echo "<p>Primero completa el formulario para reservar tu turno.</p>";
}
?>
