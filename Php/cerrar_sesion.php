<?php
session_start();
$_SESSION["usuario_conectado"] = FALSE;
session_destroy();
header("Location: ../index.php");
exit();
?>
