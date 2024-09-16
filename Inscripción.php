<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción</title>
    <link rel="stylesheet" type="text/css" href="Inscripcion.css">
</head>
<body>
<header>
    <img src="logo-icit-png.png" alt="Logo" class="logo">
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Inscripción.php">Inscripciones</a></li>
            <li><a href="Matricula.php">Matriculas</a></li>
        </ul>
    </nav>
</header>
<h1>Formulario de Inscripción</h1>
<form method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido"><br><br>

    <label for="documento_identidad">Documento de identidad:</label>
    <input type="text" id="documento_identidad" name="documento_identidad"><br><br>

    <label for="nombre_acudiente">Nombre del acudiente:</label>
    <input type="text" id="nombre_acudiente" name="nombre_acudiente"><br><br>

    <label for="apellido_acudiente">Apellido del acudiente:</label>
    <input type="text" id="apellido_acudiente" name="apellido_acudiente"><br><br>

    <label for="documento_acudiente">Documento del acudiente:</label>
    <input type="text" id="documento_acudiente" name="documento_acudiente"><br><br>

    <label for="telefono_contacto">Teléfono de contacto:</label>
    <input type="tel" id="telefono_contacto" name="telefono_contacto"><br><br>

    <label for="documentos_estudiante">Cargar documentos:</label>
    <input type="file" id="documentos_estudiante" name="documentos_estudiante"><br><br>

    <input type="submit" name="guardar">

</form>

<?php
    include("guardar_inscripcion.php");
?>

</body>
</html>