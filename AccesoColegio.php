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
    <h1>Acceso Colegio</h1>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="Nombres" placeholder="Nombre">
            <input type="text" name="Apellidos" placeholder="Apellidos">
            <input type="text" name="Numero de documento" placeholder="Numero de documento">
            <input type="text" name="Nombres del acudiente" placeholder="Nombres del acudiente">
            <input type="text" name="Apellidos del acudiente" placeholder="Apellidos del acudiente">
            <input type="text" name="Numero de documento del acudiente" placeholder="Documento del acudiente">
            <input type="text" name="Teléfono de contacto" placeholder="Telefono">

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
                        <th><?= $row['Numero de documento'] ?></th>
                        <th><?= $row['Nombres del acudiente'] ?></th>
                        <th><?= $row['Apellidos del acudiente'] ?></th>
                        <th><?= $row['Numero de documento del acudiente'] ?></th>
                        <th><?= $row['Teléfono de contacto'] ?></th>
                        <th><a href="update.php?ID=<?= $row['ID'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?ID=<?= $row['ID'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

        
        
</body>
</html> 