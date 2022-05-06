<?php
session_start();
require 'db.php';
if(isset($_POST['login'])){
$stmt=$base->prepare ('SELECT `id`, `user`, `password`,`role` FROM `usuarios` WHERE `user` = :user');
$stmt->bindValue('user', $_POST['usuario']);
$stmt->execute();
$stmt->bindColumn('id',$id);
$stmt->bindColumn('user',$usuario);
$stmt->bindColumn('password',$pass);
$stmt->bindColumn('role',$role);
$cuenta = $stmt->fetch (PDO::FETCH_OBJ);
if($cuenta!=NULL){
  if (password_verify($_POST['password'],$cuenta->password)){
    session_start();
  $_SESSION['user']= $_POST['usuario'];
  
  if($role== 1){header('location:admin.php');}
  else if($role==2){header('location:cliente.php'); }

  }else{
    $error='Cuenta invalida';
  }
}else{
 $error='Cuenta invalida';
}}
?>




<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\css\reset.css">
    <link rel="stylesheet" href="assets\css\estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body >
  <img id="logo1" src="img/logo.jpg" alt="Logo" width="20%" height="20%">
     
   <section class="registro">

   <form class="form-control-lg d-flex justify-content-center mt-5 text-black"  method="post" >
     <div class="col-3" >
     <?php
     echo isset($error) ? $error :'';
     ?>
   <div class="form-group mt-2">
    <label>Usuario</label>
    <input type="text" class="form-control" id="usuario" name="usuario">
  </div>
  <div class="form-group mt-2">
    <label>Contraseña</label>
    <input type="password" class="form-control" id="password"name="password">
  </div>
 
  <div class="form-group form-check mt-2">
    <input type="checkbox" class="form-check-input" id="check" required>
    <label class="form-check-label" >Aceptar politica de privacidad de datos</label>
  </div>
  <button type="submit" name="login" class="button btn btn-primary mt-3">Entrar</button>
  </div>
</form>
<div class="d-flex justify-content-center">
<p>¿Eres nuevo?</p>
<a class=" d-flex justify-content-center text-black text-decoration-none" href="nuevo_user.php">--->Registrate<---</a>
</div>

   </section>
   <a class=" d-flex justify-content-center regresar" href="index.php">Regresar al inicio</a>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>