<?php
// inicia sesion
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: ");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENTHUB</title>
    <link rel="icon" href="../Imágenes/uctLogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/arriendos.css">
</head>
<body>
    <section class="showcase">
        <header>
            <h2 class="logo">RENTHUB</h2>
            <div class="container1">
                <nav>
                    <ul>
                        <li><a href="../index.html">Inicio</a></li>
                        <li><a href="arriendos.html">Arriendos</a></li>
                        <li><a href="Formulario.html">Contacto</a></li>
                        <li><a href="quienes_somos.html">Quienes Somos</a></li>
                        <?php 
            if(isset($_SESSION['usuario'])){
                echo "<li><a href='#'>Perfil</a></li>
                <li><button onclick=session_destroy()>Cerrar Sesion</button></li>";
            }
            else {
                echo "<li><a href='login-register.html'>Login</a></li>";
            }
        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="container2">
            <div class="item">
                <h2>Departamento</h2>
                <img src="../Imágenes Arriendos/arriendo1.jpeg" id ="arriendos">
                <p class="precio"> $160.000 mensual </p>
                <p>arrendatario(a): Celia mondaca  </p>
                <p> Dirección:sector cajon, cerca del cesfam a 10 minutos campus uct  </p>
                <hr>
                <p> Número de contacto: +56 9 6164 8598</p>
                <p> Capacidad: 1 Persona </p>
                <p> Sector Cajon </p>
                <p> Correo:(no especificado) </p>
                <hr>
                <a href="#" class="btn-contacto"> Contactar</a>
            </div>
            
            <div class="item">
                <h2>Casa</h2>
                <img src="../Imágenes Arriendos/arriendo1.jpeg" id ="arriendos">
                <p class="precio"> $150.000 mensual </p>
                <p>arrendatario(a): Sonia alvarez </p>
                <p> Dirección:Pasaje juan rulfo 3581 </p>
                <hr>
                <p> Número de contacto: +56 9 8376 7653</p>
                <p> Capacidad: 1 Persona </p>
                <p> Sector Parque Alcántara </p>
                <p> Correo:  </p>
                <hr>
                <a href="#" class="btn-contacto"> Contactar</a>
            </div>
            
            <div class="item">
                <h2> Casa Estudiantil </h2>
                <img src="../Imágenes Arriendos/arriendo1.jpeg" id ="arriendos">
                <p class="precio"> $220.000 </p>
                <p>arrendatario(a): Maria suarez </p>
                <p>Dirección: Roni Bandini 3530 </p>
                <hr>
                <p> Número de contacto: +56 9 7158 5526</p>
                <p> Capacidad: 2 Personas </p>
                <p> Alcántara </p>
                <p> Correo: (no especificado) </p>
                <hr>
                <a href="#" class="btn-contacto"> Contactar</a>
            </div>

            <div class="item">
                <h2> Casa Estudiantil </h2>
                <img src="../Imágenes Arriendos/arriendo1.jpeg" id ="arriendos">
                <p class="precio"> $220.000 </p>
                <p>arrendatario(a): Ana Sovarzo </p>
                <p>Dirección: luis de gongora 3670 </p>
                <hr>
                <p> Número de contacto: +56 9 8229 3898</p>
                <p> Capacidad: 1 Personas </p>
                <p> Alcántara </p>
                <p> Correo: (no especificado) </p>
                <hr>
                <a href="#" class="btn-contacto"> Contactar</a>
            </div>

            <div class="item">
                <h2> pieza Estudiantil </h2>
                <img src="../Imágenes Arriendos/arriendo1.jpeg" id ="arriendos">
                <p class="precio"> $240.000 </p>
                <p>arrendatario(a): Juan Sandoval </p>
                <p>Dirección: luis de gongora 3640 </p>
                <hr>
                <p> Número de contacto: +56 9657 25107</p>
                <p> Capacidad: 1 Personas </p>
                <p> Alcántara </p>
                <p> Correo: (no especificado) </p>
                <hr>
                <a href="#" class="btn-contacto"> Contactar</a>
            </div>

            <div class="item">
                <h2> Pieza estudiantil </h2>
                <img src="../Imágenes Arriendos/arriendo1.jpeg" id ="arriendos">
                <p class="precio"> $130.000 </p>
                <p>arrendatario(a): Juan Sandoval </p>
                <p>Dirección: Caracas 03986 </p>
                <hr>
                <p> Número de contacto: +56 9 7774 7934</p>
                <p> Capacidad: 1 Personas </p>
                <p> Parque Alcántara </p>
                <p> Correo: (no especificado) </p>
                <hr>
                <a href="#" class="btn-contacto"> Contactar</a>
            </div>

            <div class="item">
                <h2> Pieza estudiantil(baño compartido) </h2>
                <img src="../Imágenes Arriendos/arriendo1.jpeg" id ="arriendos">
                <p class="precio"> $130.000 </p>
                <p>arrendatario(a): Emilia gomez </p>
                <p>Dirección: Pasaje juan rulfo 3581 </p>
                <hr>
                <p> Número de contacto: +56 9 8376 7653</p>
                <p> Capacidad: 1 Personas </p>
                <p> Alcántara </p>
                <p> Correo: (no especificado) </p>
                <hr>
                <a href="#" class="btn-contacto"> Contactar</a>
            </div>

        </section>
        <video src="../Videos/video4.mp4" muted loop autoplay></video>
        <ul class="social">
            <li><a href="https://web.facebook.com/canaluctemuco/?_rdc=1&_rdr"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
            <li><a href="https://twitter.com/uc_temuco"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
            <li><a href="https://www.instagram.com/uctemuco/"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
        </ul>
    </section>   
</body>
</html>