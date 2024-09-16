<?php

include("connection.php");
$con = connection();

$id=$_POST["ID"];
$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$documentoEst = $_POST['Numero de documento'];
$nombreAcu = $_POST['Nombres del acudiente'];
$apellidoAcu = $_POST['Apellidos del acudiente'];
$documentoAcu = $_POST['Numero de documento del acudiente'];
$telContacto = $_POST['Teléfono de contacto'];

$sql="UPDATE users SET Nombres='$name', Apellidos='$lastname', Numero de documento='$documentoEst', Apellidos del acudiente='$apellidoAcu', Numero de documento del acudiente '$documentoAcu', Teléfono de contacto='$telContacto' WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: AccesoColegio.php");
}else{

}

?>