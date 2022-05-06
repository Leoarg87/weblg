<?php
  $conexion=new mysqli("localhost","root","liceorc4","proyecto");
  if($conexion){
  
  }else{
      echo "error";
      header('location:administracion.php');
  }
  $nombre=$_POST['nombre'];
  $tipo=$_FILES['imagen']['type'];
  $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  $tiempo=$_POST['tiempo'];
  $descripcion=$_POST['descripcion'];
  $link=$_POST['link'];
  $query="INSERT INTO proyectos (nombre,descripcion,imagen,tipo,tiempo,link) VALUES ('$nombre','$descripcion','$imagen','$tipo','$tiempo','$link')";
  $resultado=$conexion->query($query);
  if($resultado){
    echo"<script> alert('Se ha insertado la noticia correctamente'); window.location='administracion.php';</script>";

   }else{
    echo"<script> alert('No se ha insertado la noticia correctamente'); window.location='editadmin.php';</script>";
   }
  
  
?>