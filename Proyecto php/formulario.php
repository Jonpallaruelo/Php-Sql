




<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto m8</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
  
<main class="bg-dark text-white py-5" id="servicios">
<div class="container">

<div class="row justify-content-center">
     <h2 class="text-center display-4" id="h2-color">REGISTRO</h2>
     


    </div>


  <div class="container" id="form-container">

      <form class="form" action="registro1.php" method="POST">

        <!-- <h2>REGISTRATE</h2> -->
        <div class="mb-3" id="form">
          <label for="id" class="form-label">NOMBRE-USUARIO</label>
          <input type="text" name="nombres"  class="form-control" id="input" aria-describedby="" required>
          <div id="nombre" class="form-text">Introduce tu nombre de usuario</div>
        </div>

       
        
        <div class="mb-3" id="form">
          <label for="exampleInputEmail1" class="form-label">EMAIL</label>
          <input type="email" name="email" class="form-control" id="input" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">Introduce tu email</div>
        </div>
        

        <div class="mb-3" id="form">
          <label for="exampleInputEmail1" class="form-label">PASSWORD</label>
          <input type="password" name="password" class="form-control" id="input" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">Introduce tu contraseña</div>
        </div>
            

        <div class="mb-3" id="form">
          <label for="exampleInputEmail1" class="form-label">SALDO</label>
          <input type="text" name="saldo" class="form-control" id="input" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">500€</div>
        </div>
        





        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">I AGREE</label>
        </div>
        <button type="submit" class="btn btn-warning">Hacer registro</button>
        <div class="container">
      
      </div>
      </form>
        
      
  </div>
  
  <div class="container">


 <p class="text-center"></p>


</div>

    </main>


</main>





  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
   
</body>

</html>