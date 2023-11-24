<?php
include 'conexion.php';
$nombre = $_POST[ 'nombre'];
$nombre = $_POST[ 'correo'];
$nombre = $_POST[ 'usuario'];
$nombre = $_POST[ 'contrase']:


$query = "INSERT INTO usuarios(nombre,correo,usuario,contrase) 
          values('$nombre','$correo','$usuario','$contrase')";

  $ejecutar = mysqli_query($conexion, $query);
  
  ?>