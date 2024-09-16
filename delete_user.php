<?php

include("connection.php");
$con = connection();

$id=$_GET["ID"];

$sql="DELETE FROM datos WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: AccesoColegio.php");
}else{

}

?>