<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM datos";
$query = mysqli_query($con, $sql);


if(isset($_POST['guardar'])) {
    if(strlen($_POST['nombre']) >=  1 &&
    strlen($_POST['apellido']) >= 1 &&
    strlen($_POST['documento_identidad']) >= 1 &&
    strlen($_POST['nombre_acudiente']) >= 1 &&
    strlen($_POST['apellido_acudiente']) >= 1 &&
    strlen($_POST['documento_acudiente']) >= 1 &&
    strlen($_POST['telefono_contacto']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $documento_identidad = trim($_POST['documento_identidad']);
        $nombre_acudiente = trim($_POST['nombre_acudiente']);
        $apellido_acudiente = trim($_POST['apellido_acudiente']);
        $documento_acudiente = trim($_POST['documento_acudiente']);
        $telefono_contacto = trim($_POST['telefono_contacto']);
        $consulta = "INSERT INTO datos(Nombres, Apellidos, Numero_de_documento, Nombre_del_acudiente, Apellidos_del_acudiente, Numero_de_documento_del_acudiente, Telefono_de_contacto)
        VALUES ('$nombre', '$apellido', '$documento_identidad', '$nombre_acudiente', '$apellido_acudiente', '$documento_acudiente', '$telefono_contacto')";
        $result = mysqli_query($con, $consulta);
        if ($result){
            echo "<h3 class='ok'> ¡Te has inscrito con éxito!</h3>";
        } else{
            echo "<h3 class='error'>¡Hubo un error al intentar inscribirte, intenta nuevamente!</h3>";
        }
    } else {
        echo "<h3 class='error'>¡Por favor complete todos los campos!</h3>";
    }
}
?>