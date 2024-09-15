<?php

function conex(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "datos-estudiantes";

    $conex=mysqli_connect($host, $user, $pass);

    mysqli_select_db($conex, $bd);

    return $conex;

}

?>





