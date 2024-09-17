<?php
include("connection.php");
$con = connection();

$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$documentoEst = $_POST['Numerodedocumento'];
$nombreAcu = $_POST['Nombresdelacudiente'];
$apellidoAcu = $_POST['Apellidosdelacudiente'];
$documentoAcu = $_POST['Numerodedocumentodelacudiente'];
$telContacto = $_POST['Teléfonodecontacto'];

$consulta = "INSERT INTO datos(Nombres, Apellidos, Numerodocumento, NombreAcudiente, ApellidoAcudiente, DocumentoAcudiente, Telefono)
VALUES ('$nombre', '$apellido', '$documentoEst', '$nombreAcu', '$apellidoAcu', '$documentoAcu', '$telContacto')";
$result = mysqli_query($con, $consulta);

if($result){
    Header("Location: AccesoColegio.php");
}else{

}

?>