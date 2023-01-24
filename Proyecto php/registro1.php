<?php

include('conexion.php');

$conectar= conn();

$nombre=$_POST['nombres'];
$email=$_POST['email'];
$password=$_POST['password'];
$saldo=$_POST['saldo'];


$resultado1=$conectar->query("SELECT * FROM `usuarios` where email='".$email."'");
if($resultado1 AND $resultado1->num_rows>0){
  header('location:error.php');
} else{
    $sql= "INSERT INTO `usuarios`(`id`,`nombres`,`email`, `password`, `saldo`) VALUES (NULL,'$nombre','$email','$password','$saldo')";
    $resultado=mysqli_query($conectar,$sql);

    if(!$resultado){
        die('error');
    }else{
        header('location:gracias.html');
    }
}


