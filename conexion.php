<?php

$conexion = mysqli_connect("localhost", "root","","login_register_db");

if($conexion){
    echo 'conectado exitosamente a la base de datos';
    }
    else{
        echo ' no se ha podidom conectar la base de datos';
    }


?>