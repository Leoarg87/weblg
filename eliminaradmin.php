<?php
session_start();
$id=$_POST['id'];
try{
  $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $eliminar= "DELETE FROM usuarios WHERE id='$id'";
  $resultado = $base->prepare($eliminar);
  $resultado->execute();
  $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
  if($resultado){
    echo"<script> alert('Se han eliminado los datos del cliente'); window.location='administracion.php';</script>";

   }else{
    echo"<script> alert('No se ha eliminado los datos del cliente'); window.location='administracion.php';</script>";
   
   }
  
}catch(exception $e){
   die("error:". $e->getMessage());
   }
    ?>
<?php