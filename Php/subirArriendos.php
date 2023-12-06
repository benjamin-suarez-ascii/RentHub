<?php
include "../Php/db.php";

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ruta donde se guardarán las imágenes
    $target_dir = "Imágenes Arriendos/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);

    // Validar que el archivo es una imagen
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false) {
        // Validar tamaño de la imagen (ejemplo: menor a 5MB)
        if ($_FILES["imagen"]["size"] < 5000000) {
            // Mover la imagen a la carpeta de uploads
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                echo "La imagen ". htmlspecialchars( basename( $_FILES["imagen"]["name"])). " ha sido subida.";
            } else {
                echo "Lo siento, hubo un error al subir tu imagen.";
            }
        } else {
            echo "Lo siento, tu imagen es demasiado grande.";
        }
    } else {
        echo "El archivo no es una imagen.";
    }

    // Preparar la consulta SQL para evitar inyecciones SQL
    $stmt = $conn->prepare("INSERT INTO Publicaciones (tipo, imagen, precio, arrendatario, direccion, contacto, capacidad, sector, correo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $tipo, $imagen, $precio, $arrendatario, $direccion, $contacto, $capacidad, $sector, $correo);

    // Asignar valores a los parámetros
    $tipo = $_POST["tipo"];
    $imagen = $target_file;
    $precio = $_POST["precio"];
    $arrendatario = $_POST["arrendatario"];
    $direccion = $_POST["direccion"];
    $contacto = $_POST["contacto"];
    $capacidad = $_POST["capacidad"];
    $sector = $_POST["sector"];
    $correo = $_POST["correo"];

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Nueva publicación creada exitosamente";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la sentencia y la conexión
    $stmt->close();
}

$conn->close();
?>
