<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\css\reset.css">
    <link rel="stylesheet" href="assets\css\estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Mi perfil</title>
  </head>
  <body class="bg-dark">
  
  <a class=" d-flex text-white text-center justify-content-center mt-3" href="cliente.php">Regresar a la pagina principal</a>
  <div class="botones perfil container">
      <div class="row">
        <div class="col-sm">
            <a class="text-decoration-none btn btn-primary  mx-4 text-white text-decoration-none" href="citascliente.php">Mis citas</a>
            </div>
        <div class="col-sm">
            <a href='nuevacita.php' class="cita btn btn-primary" >Pedir una nueva cita</a>
            </div>
 
      </div>
</div>
 
   <section class="registro mt-5 text-white text-center">
   <h2>Cambiar datos de mi usuario</h2>
   <?php
   session_start();
   if(isset($_POST['editar'])){
   

$user=$_SESSION['user'];

try{
    $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultadofecha= "SELECT `password` , `nombre` FROM `usuarios`";
   $result = $base->prepare($resultadofecha);
   $result->execute();
   $array = $result->fetchAll(PDO::FETCH_ASSOC);
   foreach ($array as $row) {
   $nombre=$row['nombre'];
   $password=$row['password'];
   }
$passsincifrar1=$_POST['pass1'];
$passsincifrar2=$_POST['pass2'];
$pass1=password_hash($_POST['pass1'], PASSWORD_DEFAULT, array("coast"=>12));
$pass2=password_hash($_POST['pass2'], PASSWORD_DEFAULT, array("coast"=>12));
$name=$_POST['nombre'];
    if($passsincifrar1==$passsincifrar2){
        $consulta= "UPDATE `usuarios` SET `password` = '$pass1', `nombre` = '$name' WHERE `user`= '".$user."'";
        $resultado = $base->prepare($consulta);
      $resultado->execute();
      $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
        if($consulta){echo "Se ha actualizado tu nombre y contraseña";}
    }else{echo "las contraseñas no coinciden";}




}catch(exception $e){
    die("error:". $e->getMessage());
    }}
 
?>
     
   <form class="form-control-lg d-flex justify-content-center mt-3 text-white" action="" method="POST" >
  
     <div class="col-3" >
     <div class="form-group mt-2">
    <label for="Nombre">Nombre y Apellido</label>
    <input type="text" class="form-control"  name="nombre">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Cambiar contraseña</label>
    <input type="password" class="form-control" name="pass1" >
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Repetir contraseña</label>
    <input type="password" class="form-control" name="pass2" >
  </div>
  
  
  <div class="form-group form-check mt-2">
 
    <label><input type="checkbox" class="form-check-input"required>Aceptar politica de privacidad de datos</label>
  </div>
  <button type="submit" name="editar" class="btn btn-primary mt-3">Modificar datos</button>
  </div>
</form>
   </section>
  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>