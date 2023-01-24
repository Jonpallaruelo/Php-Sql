
<?php

session_start();

include_once('conexion.php');

$conectar= conn();

$servicioId = $_GET['id'];

$solicitarServicio="UPDATE `registros` SET `validado`=1 WHERE `id`=$servicioId";
// echo($solicitarServicio);
if(mysqli_query($conectar,$solicitarServicio)){
    echo("VALIDADO CORRECTAMENTE");
    header('location:principal.php');
  }else{
      echo("ERROR AL VALIDADO SERVICIO");
  }
?>