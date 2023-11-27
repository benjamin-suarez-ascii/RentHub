<?php
$servidor = "db.inf.uct.cl";
$usuario = "basuarez";
$contrasena = "21376870";
$base_datos = "A2023_basuarez";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>
