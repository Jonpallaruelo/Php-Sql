<?php

session_start();

include_once('conexion.php');

$conectar= conn();

$idUR = $_SESSION['id'];

$servicioId = $_GET['id'];

$solicitarServicio="UPDATE `registros` SET `idUR`='$idUR' WHERE `id`=$servicioId";
// echo($solicitarServicio);
if(mysqli_query($conectar,$solicitarServicio)){
    echo("SOLICITADO CORRECTAMENTE");
    header('location:principal.php');
  }else{
      echo("ERROR AL SOLICITAR SERVICIO");
  }
  














?>