<?php

include("connection.php");
$con = connection();

$id = $_POST["ID"];
$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$documentoEst = $_POST['Numerodedocumento'];
$nombreAcu = $_POST['Nombresdelacudiente'];
$apellidoAcu = $_POST['Apellidosdelacudiente'];
$documentoAcu = $_POST['Numerodedocumentodelacudiente'];
$telContacto = $_POST['Teléfonodecontacto'];

// Consulta SQL corregida
$sql = "UPDATE datos SET Nombres='$nombre', Apellidos='$apellido', Numerodocumento='$documentoEst', NombreAcudiente='$nombreAcu', ApellidoAcudiente='$apellidoAcu', DocumentoAcudiente='$documentoAcu', Telefono='$telContacto' WHERE ID='$id'";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: AccesoColegio.php");
} else {
    echo "Error al actualizar los datos.";
}

?>
