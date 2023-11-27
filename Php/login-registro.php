<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["nombre_usuario"];
    $email = $_POST["email"];
    $contrasena = password_hash($_POST["contrasena"], PASSWORD_BCRYPT);

    $consulta = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = $conexion->query($consulta);
    if ($resultado->num_rows > 0) {
        echo "El correo ya está registrado. Intente con otro.";
    } else {
        $insercion = "INSERT INTO usuarios (nombre_usuario, email, contrasena) VALUES ('$nombre_usuario', '$email', '$contrasena')";
        if ($conexion->query($insercion) === TRUE) {
            header("Location: ../HTML/login-register.html");
            exit();
        } else {
            echo "Error en el registro: " . $conexion->error;
        }
    }
}
?>
