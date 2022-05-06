<?php
session_start();
try{
  $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $user=$_SESSION["user"];
  $mifecha= date('Y-m-d H:i:s');
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
<?php
 setlocale(LC_TIME, 'es_ES.UTF-8');
 
 date_default_timezone_set ('Europe/Madrid');
 
 $hoy= date("d-m-Y");
$hora= date("G:i");
echo "Hoy es $hoy y son las $hora";
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
<form action="procesar_eliminar.php" method="POST">
<div class="container-table" >

<div id="nombre" class="table__title">Citas</div> 
<div class="table__header">Nombre</div>
<div class="table__header">Fecha</div>
<div class="table__header">Hora</div>
<div class="table__header">Motivo</div>
<div class="table__header">Operacion</div>
<div class="table__item"><?php if($user=$row["user"]){
echo $row["user"];}
?></div>
<div class="table__item"><?php echo $row["diacita"]?></div>
<div class="table__item"><?php echo $row["horacita"]?></div>
<div class="table__item"><?php echo $row["asunto"]?></div>
<div class="table__item">
<button type="submit"name="eliminarcita"class="boton_submit" action="procesar_eliminar.php"method="post">Eliminar</button>

</div>

</div>
</form>
<a href="citascliente.php" class="d-inline-block">Volver a mis citas</a>
<script type="text/javascript">
function confirmacion(e){
    if (confirm("¿Estas seguro que desea eliminar la cita?")){
        return true;
    }else{
        e.preventDefault();
    }
   

}
var linkDelete = document.querySelectorAll(".boton_submit");
for(var i=0; i<linkDelete.length;i++){
    linkDelete[i].addEventListener('click', confirmacion);
}
</script>

<?php $resultado->closeCursor();?>
<?php include("footer.php");?>
</body>
</html>