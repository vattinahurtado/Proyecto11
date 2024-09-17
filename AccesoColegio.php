<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM datos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="AccesoColegio.css" rel="stylesheet">
    <title>Acceso Colegio</title>
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
    <h1>Acceso Colegio</h1>
    <div class="users-form">
        <h2>Crear usuario</h2>
        <form action="insert_user.php" method="POST">
            <input type="text" name="Nombres" placeholder="Nombre">
            <input type="text" name="Apellidos" placeholder="Apellidos">
            <input type="text" name="Numerodedocumento" placeholder="Numero de documento">
            <input type="text" name="Nombresdelacudiente" placeholder="Nombres del acudiente">
            <input type="text" name="Apellidosdelacudiente" placeholder="Apellidos del acudiente">
            <input type="text" name="Numerodedocumentodelacudiente" placeholder="Documento del acudiente">
            <input type="text" name="Teléfonodecontacto" placeholder="Telefono">

            <input type="submit" value="Agregar">
        </form>
    </div>
    <div class="datos-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Documento de identidad</th>
                    <th>Nombre acudiente</th>
                    <th>Apellido acudiente</th>
                    <th>Documento del acudiente</th>
                    <th>Telefono de contacto</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID'] ?></th>
                        <th><?= $row['Nombres'] ?></th>
                        <th><?= $row['Apellidos'] ?></th>
                        <th><?= $row['Numerodocumento'] ?></th>
                        <th><?= $row['NombreAcudiente'] ?></th>
                        <th><?= $row['ApellidoAcudiente'] ?></th>
                        <th><?= $row['DocumentoAcudiente'] ?></th>
                        <th><?= $row['Telefono'] ?></th>
                        <th><a href="update.php?ID=<?= $row['ID'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?ID=<?= $row['ID'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

        
        
</body>
</html> 