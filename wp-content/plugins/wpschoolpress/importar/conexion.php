<?php
 $conexion = mysqli_connect("localhost","eric","eric","sae");

if($conexion){
    echo"se realizo correctamente la conexion";
}else{
    echo"no se realizo correctamente la conexion";
}

?>