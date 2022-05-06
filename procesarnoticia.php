<?php
session_start();

try{
   $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $id=$_POST['id'];
   $titulo=$_POST['titulo'];
   $detalle=$_POST['detalle'];
   $autor=$_POST['autor'];
   $link=$_POST['link'];
   $dia=$_POST['dia'];
   
   $sql1="UPDATE `noticias` SET `titulo`='$titulo',`detalle`='$detalle',`autor`='$autor',`fecha`='$dia',`link`='$link'WHERE `id`='$id'";
   
   //$sql1= "UPDATE `noticias`(`id`, `titulo`, `detalle`, `autor`, `fecha`, `link`) VALUES ('null','$titulo','$detalle','$autor','$dia','$link')";
   $resultado = $base->prepare($sql1);
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