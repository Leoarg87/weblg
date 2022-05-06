<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\css\reset.css">
    <link rel="stylesheet" href="assets\css\estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Registro</title>
  </head>
  <body>
  <img id="logo1" src="img/logo.jpg" alt="Logo" width="20%" height="20%">

   <section class="registro">

   <form class="form-control-lg d-flex justify-content-center mt-5 text-black" action="procesar_user.php" method="POST" >
     <div class="col-3" >
     <div class="form-group mt-2">
    <label for="Nombre">Nombre y Apellido</label>
    <input type="text" REQUIERED class="form-control"  name="nombre">
  </div>
  <div class="form-group mt-2">
    <label for="email">Email</label>
    <input type="email" REQUIERED class="form-control" name="email" >
  </div>
  
     <div class="form-group mt-2"> 
    <label for="usuario">Usuario</label>
    <input type="text" REQUIERED class="form-control"  name="usuario">
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" REQUIERED class="form-control" name="password" >
  </div>

  <div class="form-group form-check mt-2">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label" for="exampleCheck1">Aceptar politica de privacidad de datos</label>
  </div>
  <button type="submit" name="guardar" class="button btn btn-primary mt-3">Entrar</button>
  </div>
</form>
   </section>
   <a class=" d-flex justify-content-center mt-3" href="index.php">Regresar al inicio</a>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>