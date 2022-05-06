<?php
session_start();
$id_proyectos=$_GET["id"];
try{
  $base1=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
  $base1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $eliminar1= "DELETE FROM proyectos WHERE id='$id_proyectos'";
  $resultado1 = $base1->prepare($eliminar1);
  $resultado1->execute();
  $arr = $resultado1->fetchAll(PDO::FETCH_ASSOC);
  if($resultado1){
    echo"<script> alert('Se han eliminado los datos de la noticia'); window.location='administracion.php';</script>";

   }else{
    echo"<script> alert('No se ha eliminado los datos de la noticia'); window.location='administracion.php';</script>";
   
   }
  
}catch(exception $e){
   die("error:". $e->getMessage());
   }
    ?>
<?php