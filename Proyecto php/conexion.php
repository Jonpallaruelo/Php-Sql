<?php

function conn(){

$hostname="localhost";
$usuario="root";
$password="";
$dbname="proyecto";

$conectar=mysqli_connect($hostname,$usuario,$password,$dbname);

if(!$conectar){

    echo("error");
}else{
    
}

 return $conectar;


}














?>