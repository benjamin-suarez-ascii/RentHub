<?php
// funcion el cual conecta con la base de datos utilizada y el servidor
function conn(){
$hostname = "db.inf.uct.cl";
$usuariodb = "basuarez";
$passworddb = "21376870";
$dbname = "A2023_basuarez";
 //generando la conexion con el servidor
 $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
 return $conectar;
}
?>