<?php
include("con_db.php");
$con = conex();

$sql = "SELECT * FROM datos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Colegio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="AccesoColegio.css">
</head>
<body>
    <h1>Acceso Colegio</h1>
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
                        <th><?= $row['Numero de documento'] ?></th>
                        <th><?= $row['Nombres del acudiente'] ?></th>
                        <th><?= $row['Apellidos del acudiente'] ?></th>
                        <th><?= $row['Numero de documento del acudiente'] ?></th>
                        <th><?= $row['Teléfono de contacto'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

        
        
</body>
</html> 