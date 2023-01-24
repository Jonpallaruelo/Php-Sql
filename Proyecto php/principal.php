
<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
       <link rel="stylesheet" href="style.css"> 
</head>

<body>
    
<main class="bg-dark text-white py-5" id="servicios">
    <div class="container">
        <div class="row justify-content-center">
        <h1>Registra tus servicios</h1>

       
        <div class="container">

        <button type="button" id="button" onclick="goAddService()" class="btn btn-primary">AÑADIR SERVICIO</button>

        </div>
       

      




    </div>
</main>


<div class="container">
  <tr>
    <form action="principal.php" method="post">
      <input type="text" name="descripcion" />
      <input type="submit" name="buscador" value="Buscar" />
    </form>
  </tr>
  <?php include('conexion.php') ?>
   <div class="row justify-content-center">
   <table >
    <tr class="tr-class"><th colspan="6"><h3>Listado de Servicios para Solicitar</h3></th></tr>
    <tr>
    <th>ID</th>
    <th>DESCRIPCIÓN</th>
    <th>TIEMPO</th>
    <th>IDUP</th>
    <th>IDUR</th>
    <th>FECHA</th>
    <th>VALIDADO</th>
    <th></th>


    </tr>

  <?php
  $conectar= conn();
//   $sql= "SELECT * FROM registros";
  $id= $_SESSION['id'];
  $selectUsers = "SELECT * FROM `registros` WHERE idUP != $id ";
  if (!empty($_POST['buscador'])) {
    $descripcion1 = $_POST['descripcion'];
    if (!empty($descripcion1)) {
      $selectUsers = $selectUsers." AND descripcion LIKE '%$descripcion1%'";
    }
  }
  $resultado= mysqli_query($conectar,$selectUsers);
  
  While($mostrar=mysqli_fetch_array($resultado))
  {
    ?>

     <tr class="tr-class">
        
        <td class="tabla"><?php echo $mostrar['id'] ?></td>
        <td class="tabla"><?php echo $mostrar['descripcion']?></td>
        <td class="tabla"><?php echo $mostrar['tiempo'] ?></td>
        <td class="tabla"><?php echo $mostrar['idUP'] ?></td>
        <td class="tabla"><?php echo $mostrar['idUR'] ?></td>
        <td class="tabla"><?php echo $mostrar['fecha'] ?></td>
        <td class="tabla"><?php echo $mostrar['validado'] ?></td>
        <td class="tabla">
          <?php
            if ($mostrar['idUR']) {
              echo "<span>SOLICITADO</span>";
            } else {
              echo "<a href='solicitar.php?id=".$mostrar['id']."'>SOLICITAR</a>";
            }
          ?>
        </td>
       
    </tr>
  <?php
  }
  ?>
  </table>
  <table >
    <tr class="tr-class"><th colspan="6"><h3>Listado de mis Servicios</h3></th></tr>

    <tr>
    <th>ID</th>
    <th>DESCRIPCIÓN</th>
    <th>TIEMPO</th>
    <th>IDUP</th>
    <th>IDUR</th>
    <th>FECHA</th>
    <th>VALIDADO</th>
    <th></th>


    </tr>
  <?php

  $selectmyservice="SELECT * FROM `registros` WHERE idUP = $id ";
  if (!empty($_POST['buscador'])) {
    $descripcion2 = $_POST['descripcion'];
    if (!empty($descripcion2)) {
      $selectmyservice = $selectmyservice." AND descripcion LIKE '%$descripcion2%'";
    }
  }
  $resultado2= mysqli_query($conectar, $selectmyservice);
  While($mostrar2=mysqli_fetch_array($resultado2))
  {
  
  ?>

<tr class="tr-class">
        
        <td class="tabla"><?php echo $mostrar2['id'] ?></td>
        <td class="tabla"><?php echo $mostrar2['descripcion']?></td>
        <td class="tabla"><?php echo $mostrar2['tiempo'] ?></td>
        <td class="tabla"><?php echo $mostrar2['idUP'] ?></td>
        <td class="tabla"><?php echo $mostrar2['idUR'] ?></td>
        <td class="tabla"><?php echo $mostrar2['fecha'] ?></td>
        <td class="tabla"><?php echo $mostrar2['validado'] ?></td>
        <td class="tabla">
          <?php
            if (!$mostrar2['idUR']){
              echo "<span>NO SOLICITADO</span>";  
            } else if ($mostrar2['validado'] == 1) {
              echo "<span>VALIDADO</span>";
            } else {
              echo "<a href='validar.php?id=".$mostrar2['id']."'>VALIDAR</a>";
            }
          ?>
        </td>
       
    </tr>

    <?php

  }?>
  </table>
  <div>

</div>


</body>

<script>
    function goAddService() {
        window.location = "add-servicio-form.php";
    }
</script>
        





