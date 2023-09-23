<?php
include_once('db.php');
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$conectar = conn();

// Verificar que el correo no se repita y ya este inscrito
$verificar_correo = mysqli_query($conectar, "SELECT * FROM Usuario WHERE Correo='$correo'");

// Si existe una fila con el mismo correo
if(mysqli_num_rows($verificar_correo) > 0){
    ?>
    <script>
        alert("Este correo ya esta registrado, intenta con otro");
        window.location = "login-register.html";
    </script>
    <?php
    exit();
}

// Query para insertar el nuevo usuario en la base de datos
$query = "INSERT INTO Usuario(Nombre, Correo, Contraseña) VALUES('$nombre', '$correo', '$contrasena')";

// Ejecuta la query
$ejecutar = mysqli_query($conectar, $query);

if ($ejecutar) {
    ?>
    <script>
        alert("El usuario se ha registrado correctamente");
        window.location = "login-register.html";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Ups, algo ha ocurrido, intenta de nuevo");
        window.location = "login-register.html";
    </script>
    <?php
}

// Cierra la conexion con la bd
mysqli_close($conectar);
?>
