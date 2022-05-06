<?php
session_start();

setlocale(LC_TIME, 'es_ES.UTF-8');
 
date_default_timezone_set ('Europe/Madrid');
try{
    $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
    $id_noticias=$_GET["id"];
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql1="SELECT * FROM `noticias` WHERE id='$id_noticias'";
     
    
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
    <title>Programador Web</title>
    <script>
       // setTimeout(function () {
       //     alert("Bienvenidos a PrograWeb LG, Espero que encuentres lo que buscabas!");
        //}, 5000);
    </script>
    <script async src="js\main.js"></script>
    <script async src="js\ajax.js"></script>


</head>

<body>
<form class="container-table-4"action="procesarnoticia.php" method="post" >
<div id="nombre"class="table__title-4">Noticias</div> 
   <div class="table__header">Titulo</div>
   <div class="table__header">Noticia</div>
   <div class="table__header">Autor</div>
   <div class="table__header">Link </div>
   <div class="table__header">fecha</div>
   <div class="table__header">Operacion</div>
   <?php
     $resultado = $base->prepare($sql1);
     $resultado->execute();
     $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
foreach($arr as $row){
   ?>
<input type="hidden"name="id"class="table__item text-center" value="<?php echo $row["id"];?>">
<input type="textarea" name="titulo"class="table__item text-center" value="<?php echo $row["titulo"];?>">
<input type="textarea" name="detalle"class="table__item text-center" value="<?php echo $row["detalle"];?>">
<input type="text" name="autor"class="table__item text-center" value="<?php echo $row["autor"];?>">
<input type="url" name="link"class="table__item text-center" value="<?php echo $row["link"];?>">
<input type="date" class="table__input text-center" name="dia" id="dia" />
<button type="submit" name="procesarnoticia"class="boton_submit" action="procesarnoticia.php">Modificar</button>
<?php }?>

</form>

  <div class="col text-center">
  <a href="administracion.php" class="btn btn-primary regular-button text-white" role="button">Regresar a panel de administrador </a>
  </div>
  <?php
$resultado->closeCursor();

 ?>
 <?php include("footer.php");
 
 ?>



</body>
</html>