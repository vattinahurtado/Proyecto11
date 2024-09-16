<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['ID'];

    $sql="SELECT * FROM datos WHERE ID='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="AccesoColegio.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="ID" value="<?= $row['ID']?>">
                <input type="text" name="Nombres" placeholder="Nombre" value="<?= $row['Nombres']?>">
                <input type="text" name="Apellidos" placeholder="Apellidos" value="<?= $row['Apellidos']?>">
                <input type="text" name="Numero de documento" placeholder="Numero de documento" value="<?= $row['Numero de documento']?>">
                <input type="text" name="Nombres del acudiente" placeholder="Nombres del acudiente" value="<?= $row['Nombres del acudiente']?>">
                <input type="text" name="Apellidos del acudiente" placeholder="Apellidos del acudiente" value="<?= $row['Apellidos del acudiente']?>">
                <input type="text" name="Numero de documento del acudiente" placeholder="Numero de documento del acudiente" value="<?= $row['Numero de documento del acudiente']?>">
                <input type="text" name="Teléfono de contacto" placeholder="Teléfono de contacto" value="<?= $row['Teléfono de contacto']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>