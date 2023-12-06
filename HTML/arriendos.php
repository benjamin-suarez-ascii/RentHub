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
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="arriendos.html">Arriendos</a></li>
                        <li><a href="Formulario.html">Contacto</a></li>
                        <li><a href="quienes_somos.html">Quienes Somos</a></li>
                        <li><a href="login-register.html">Login</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="container2">
        <?php
        include "../Php/db.php"; 
        $sql = "SELECT * FROM Publicaciones";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                ?>
                <div class='item'>
                    <h2><?php echo $row["tipo"]; ?></h2>
                    <img src='Imágenes Arriendos/<?php echo $row["imagen"]; ?>' id='arriendos'>
                    <p class='precio'>$<?php echo $row["precio"]; ?> mensual</p>
                    <p>Arrendatario(a): <?php echo $row["arrendatario"]; ?></p>
                    <p>Dirección: <?php echo $row["direccion"]; ?></p>
                    <hr>
                    <p>Número de contacto: <?php echo $row["contacto"]; ?></p>
                    <p>Capacidad: <?php echo $row["capacidad"]; ?> Personas</p>
                    <p><?php echo $row["sector"]; ?></p>
                    <p>Correo: <?php echo $row["correo"]; ?></p>
                    <hr>
                    <button onclick="window.open('https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($row["direccion"]); ?>', '_blank')">Ver Dirección en Mapa</button>
                    <hr>
                    <a href='#' class='btn-contacto'>Contactar</a>
                </div>
                <?php
            }
        } else {
            echo "0 resultados";
        }
        
        $conn->close();
        ?>

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
