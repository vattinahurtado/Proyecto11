<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$documentoEst = $_POST['Numero de documento'];
$nombreAcu = $_POST['Nombres del acudiente'];
$apellidoAcu = $_POST['Apellidos del acudiente'];
$documentoAcu = $_POST['Numero de documento del acudiente'];
$telContacto = $_POST['Teléfono de contacto'];

$sql = "INSERT INTO users VALUES('$id','$nombre','$apellido','$documentoEst','$nombreAcu','$apellidoAcu','$documentoAcu','$telContacto)";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: AccesoColegio.php");
}else{

}

?>