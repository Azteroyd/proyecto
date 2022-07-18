<?php 
function conexion(){
        $conexion=mysqli_connect('localhost','root','','formulario');
        return $conexion;
    }
 ?>
