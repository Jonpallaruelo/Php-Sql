

<?php

session_start();

include_once('conexion.php');

$conectar= conn();


$user= utf8_decode($_POST['nombres']);
$pass= utf8_decode($_POST['password']);

// $selectUsers = "SELECT * FROM `usuarios` WHERE password ='".$pass."'";
$resultado= $conectar->query(" SELECT * FROM `usuarios` WHERE nombres ='".$user."' AND password='".$pass."'");

// $resultado=mysqli_query($conectar,$selectUsers);
if($resultado AND $resultado->num_rows>0){
    while($mostrar=mysqli_fetch_array($resultado)){
    $_SESSION['nombres']=$mostrar['nombres'];
    $_SESSION['id']=$mostrar['id'];
    header('location:principal.php');
    // echo("no vale");
    echo("EXISTE");
     }
}else{
    header('location:yaexiste.php');
}

















?>