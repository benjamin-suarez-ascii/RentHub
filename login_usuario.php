<?php
// sesion iniciada
session_start();

include_once('db.php');
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// conectar con base de datos
$conectar=conn();

// query para validar si el correo usado esta en la base de datos
$validar_login = mysqli_query($conectar, "SELECT * FROM users WHERE correo='$correo' 
and contrasena='$contrasena'");

// si encuentra algun usuario o correo que existe
if(mysqli_num_rows($validar_login) > 0){
    // sesion iniciada
    $_SESSION['usuario'] = $correo;
    header("location: bienvenida.php");
    exit();
}else{
    ?>
    <script>
        alert("Usuario ingresado no existe, por favor verifique los datos introducidos");
        window.location = "login-register.php";
    </script>
    <?php
    exit();
}

?>