<?php
    session_start();
    include_once('conexion.php');
    $conectar= conn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<main class="bg-dark text-white py-5" id="servicios">
  <div class="container">
<form class="form" action="add-servicio-action.php" method="POST">

<h2>Introduce el servicio que te gustaria publicar</h2>
<div class="mb-3" id="form">
  <label for="des" class="form-label">DESCRIPCION</label>
  <input type="text" name="descripcion"  class="form-control" id="input" aria-describedby="" required>
  <div id="nombre" class="form-text">Introduce la descripcion</div>
</div>



<div class="mb-3" id="form">
  <label for="exampleInputEmail1" class="form-label">TIEMPO</label>
  <input type="text" name="tiempo" class="form-control" id="input" aria-describedby="emailHelp" required>
  <!-- <div id="emailHelp" class="form-text">TIEMPO</div> -->
</div>



<button type="submit" class="btn btn-primary">AÑADIR SERVICIO</button>

</form>



</div>
</main>







</body>
</html>