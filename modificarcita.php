<?php
session_start();

$hoy= date("d-m-Y");
$hora= date("G:i");
$fechalimite= strtotime(($hoy."+ 3 days"));
try{
  $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $user=$_SESSION["user"];
   if($base){
     
      $sql="SELECT * FROM `usuarios` WHERE `user`= '".$user."'";
   
      $resultado = $base->prepare($sql);
      $resultado->execute();
      $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
 foreach ($arr as $row) {
   $id=$row['id'];
   $usuario=$row['user'];
   $horacita=$row['horacita'];
   $diacita=$row['diacita'];
   $asuntocita=$row['asunto'];
 }
 
   }
   

  
}catch(exception $e){
   die("error:". $e->getMessage());
   }
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="category" content="Spanish, Spain, Programador Web">
    <meta name="description" content="empresa de programacion de paginas web y aplicaciones moviles">
    <meta name="locality" content="Marbella, Malaga, España">
    <link rel="stylesheet" href="assets\css\reset.css">
    <link rel="stylesheet" href="assets\css\estilos.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBW-YWIoRTIl_rQSUGVFsRWi-kgf5DUU-U"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Citas</title>
</head>
<body>
<h1 id="nombre">Tus Citas <?php
        echo  $_SESSION['user'];?> </h1>
        <?php
 setlocale(LC_TIME, 'es_ES.UTF-8');
 
 date_default_timezone_set ('Europe/Madrid');

echo "Hoy es $hoy y son las $hora";
?>
<form action="procesar_editar.php" method="POST">
  

<div class="container-table" >

  
   <div id="nombre"class="table__title">Citas</div> 
   <div class="table__header">Nombre</div>
   <div class="table__header">Fecha</div>
   <div class="table__header">Hora</div>
   <div class="table__header">Motivo</div>
   <div class="table__header">Operacion</div>
  <div class="table__item"><?php if($user=$row["user"]){
  echo $row["user"];}
  ?></div>
  
  <input type="date" class="table__input text-center" name="dia" id="dia" required min=<?php $hoy=date("Y-m-d",); echo $hoy;?> />  
  <select type="time" name="hora" class="table__input text-center" >
  <option value="09:30" <?php if ($row["horacita"] == '09:30:00') {echo 'disabled="disabled"';} ?>>09:30 </option>
  <option value="09:45" <?php if ($row["horacita"] == '09:45:00') {echo 'disabled="disabled"';} ?>>09:45 </option>
  <option value="10:00" <?php if ($row["horacita"] == '10:00:00') {echo 'disabled="disabled"';} ?>>10:00 </option>
  <option value="10:15" <?php if ($row["horacita"] == '10:15:00') {echo 'disabled="disabled"';} ?>>10:15 </option>
  <option value="10:30" <?php if ($row["horacita"] == '10:30:00') {echo 'disabled="disabled"';} ?>>10:30 </option>
  <option value="10:45" <?php if ($row["horacita"] == '10:45:00') {echo 'disabled="disabled"';} ?>>10:45 </option>
  <option value="11:00" <?php if ($row["horacita"] == '11:00:00') {echo 'disabled="disabled"';} ?>>11:00 </option>
  <option value="11:15" <?php if ($row["horacita"] == '11:15:00') {echo 'disabled="disabled"';} ?>>11:15 </option>
  <option value="11:30" <?php if ($row["horacita"] == '11:30:00') {echo 'disabled="disabled"';} ?>>11:30 </option>
  <option value="11:45" <?php if ($row["horacita"] == '11:45:00') {echo 'disabled="disabled"';} ?>>11:45 </option>
  <option value="12:00" <?php if ($row["horacita"] == '12:00:00') {echo 'disabled="disabled"';} ?>>12:00 </option>
  <option value="12:15" <?php if ($row["horacita"] == '12:15:00') {echo 'disabled="disabled"';} ?>>12:15 </option>
  <option value="12:30" <?php if ($row["horacita"] == '12:30:00') {echo 'disabled="disabled"';} ?>>12:30 </option>
  <option value="12:45" <?php if ($row["horacita"] == '12:45:00') {echo 'disabled="disabled"';} ?>>12:45 </option>
  <option value="16:00" <?php if ($row["horacita"] == '16:00:00') {echo 'disabled="disabled"';} ?>>16:00 </option>
  <option value="16:15" <?php if ($row["horacita"] == '16:15:00') {echo 'disabled="disabled"';} ?>>16:15 </option>
  <option value="16:30" <?php if ($row["horacita"] == '16:30:00') {echo 'disabled="disabled"';} ?>>16:30 </option>
  <option value="16:45" <?php if ($row["horacita"] == '16:45:00') {echo 'disabled="disabled"';} ?>>16:45 </option>
  <option value="17:00" <?php if ($row["horacita"] == '17:00:00') {echo 'disabled="disabled"';} ?>>17:00 </option>
  <option value="17:15" <?php if ($row["horacita"] == '17:15:00') {echo 'disabled="disabled"';} ?>>17:15 </option>  
  <option value="17:30" <?php if ($row["horacita"] == '17:30:00') {echo 'disabled="disabled"';} ?>>17:30 </option>  
  <option value="17:45" <?php if ($row["horacita"] == '17:45:00') {echo 'disabled="disabled"';} ?>>17:45 </option>
  <option value="18:00" <?php if ($row["horacita"] == '18:00:00') {echo 'disabled="disabled"';} ?>>18:00 </option>
  <option value="18:15" <?php if ($row["horacita"] == '18:15:00') {echo 'disabled="disabled"';} ?>>18:15 </option>  
  <option value="18:30" <?php if ($row["horacita"] == '18:30:00') {echo 'disabled="disabled"';} ?>>18:30 </option>  
  <option value="18:45" <?php if ($row["horacita"] == '18:45:00') {echo 'disabled="disabled"';} ?>>18:45 </option>  
</select>

  <input type="text" name="asunto" class="table__input text-center">
  <button type="submit" name="modificarcita"class="boton_submit" action="procesar_editar.php"method="post">Modificar</button>


</div>
</form>
<p class="text-center">Solo podras modificar tu cita con 72 horas de antelacion </p>
  <?php
$resultado->closeCursor();

 ?>
 <?php include("footer.php");
 
 ?>
</body>
</html>
