<?php
// sesion iniciada
session_start();

include_once('db.php');
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Verificar que los campos estan llenos
if(empty($correo)){
    ?>
    <script>
        alert("Por favor, rellene el campo correo.");
        window.location = "../HTML/login-register.html";
    </script>
    <?php
    exit();
}

if(empty($contrasena)){
    ?>
    <script>
        alert("Por favor, rellene el campo contraseña.");
        window.location = "../HTML/login-register.html";
    </script>
    <?php
    exit();
}

// conectar con base de datos
$conectar=conn();

// query para validar si el correo usado esta en la base de datos
$validar_login = mysqli_query($conectar, "SELECT * FROM users WHERE correo='$correo' 
and contrasena='$contrasena'");

// si encuentra algun usuario o correo que existe
if(mysqli_num_rows($validar_login) > 0){
    // sesion iniciada
    $_SESSION['usuario'] = $correo;
    header("location: ../index.html");
    exit();
}else{
    ?>
    <script>
        alert("Usuario ingresado no existe, por favor verifique los datos introducidos");
        window.location = "../HTML/login-register.html";
    </script>
    <?php
    exit();
}

?>