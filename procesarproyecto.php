<?php
session_start();

try{
   $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $id=$_POST['id'];
   $nombre=$_POST['nombre'];
   $descripcion=$_POST['descripcion'];
   $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
   $link=$_POST['link'];
   $tiempo=$_POST['tiempo'];
   
   $sql2="UPDATE `proyectos` SET `nombre`='$nombre',`descripcion`='$descripcion',`imagen`='$imagen',`tiempo`='$tiempo',`link`='$link'WHERE `id`='$id'";
   
   
   $resultado = $base->prepare($sql2);
   $resultado->execute();
   $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
   if($resultado){
    echo"<script> alert('Se ha modificado la noticia correctamente'); window.location='administracion.php';</script>";

   }else{
    echo"<script> alert('No se ha modificado la noticia correctamente'); window.location='editadmin.php';</script>";
   
   }
   }
catch(exception $e){
   die("error:". $e->getMessage());
   }

    ?>