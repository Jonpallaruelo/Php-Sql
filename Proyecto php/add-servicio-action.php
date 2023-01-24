

<?php

session_start();

include_once('conexion.php');

$conectar= conn();

$idUP = $_SESSION['id'];

$descripcion= utf8_decode($_POST['descripcion']);
$tiempo= utf8_decode($_POST['tiempo']);

$insertServicio = "INSERT INTO `registros` (`descripcion`,`tiempo`,`idUP`,`fecha`,`validado`) VALUES ('$descripcion', '$tiempo', '$idUP', CURRENT_DATE, 0)";

if(mysqli_query($conectar,$insertServicio)){
  echo("CREADO CORRECTAMENTE");
  header('location:principal.php');
}else{
    echo("ERROR AL CREAR SERVICIO");
}


?>