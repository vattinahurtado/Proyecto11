<?php

include("con_db.php");
$con = conex();

$id=$_GET["id"];

$sql="DELETE FROM datos WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: AccesoColegio.php");
}else{

}

?>