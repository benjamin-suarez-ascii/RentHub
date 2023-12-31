<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENTHUB</title>
    <link rel="icon" href="Imágenes/uctLogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="showcase">
        <header>
            <h2 class="logo">RENTHUB</h2>
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="./HTML/arriendos.html">Arriendos</a></li>
                        <li><a href="./HTML/Formulario.html">Contacto</a></li>
                        <li><a href="./HTML/quienes_somos.html">Quienes Somos</a></li>
                        <?php
                        session_start();

                        if (isset($_SESSION["usuario_conectado"]) && $_SESSION["usuario_conectado"] === TRUE) {
                            $username = $_SESSION["usuario_nombre"];
                            ?>

                            <li style="text-align: center;">
                                <a id="username-btn" href="#" onclick="toggleLogout()"> <?php echo $username; ?> </a>
                                <ul id="logout-btn" style="display:none; width: 50px;">
                                    <li style="text-align: left;"><a href="./Php/cerrar_sesion.php">Cerrar Sesión</a></li>
                                </ul>
                            </li>

                            <script>
                                function toggleLogout() {
                                    var logoutBtn = document.getElementById('logout-btn');
                                    logoutBtn.style.display = (logoutBtn.style.display === 'none') ? 'block' : 'none';
                                }
                            </script>

                        <?php
                        } else {
                            echo '<li><a href="./HTML/login-register.html">Regístrate/Login</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <video src="Videos/video4.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
            <h2>EXPLORA CON CONFIANZA TUS</h2>  
            <h3>OPCIONES DE ALQUILER</h3>
            <p>Encuentra tu hogar inveristario ideal,
                En nuestro sitio web especializado,
                seguro, acogedor y perzonalizado
                ¡vive la experiencia, bienvenido a tu lugar!.</p>
            <a href="./HTML/login-register.html">Explorar</a>
        </div>
        <ul class="social">
            <li><a href="https://web.facebook.com/canaluctemuco/?_rdc=1&_rdr"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
            <li><a href="https://twitter.com/uc_temuco"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
            <li><a href="https://www.instagram.com/uctemuco/"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
        </ul>
    </section>
    <script src="JavaScript/main.js"></script>
</body>
</html>