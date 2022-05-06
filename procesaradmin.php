<?php
session_start();

try{
   $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $id=$_POST['id'];
   $nombre=$_POST['nombre'];
   $rol=$_POST['rol'];
   $user=$_POST['user'];
   $dia=$_POST['dia'];
   $hora=$_POST['hora'];
   $asunto=$_POST['asunto'];

   
   $sql= "UPDATE `usuarios` SET `nombre`='$nombre',`user`='$user',`role`='$rol',`diacita`='$dia',`horacita`='$hora',`asunto`='$asunto' WHERE `id`='$id' ";
   $resultado = $base->prepare($sql);
   $resultado->execute();
   $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
   if($resultado){
    echo"<script> alert('Se han actualizado los datos del cliente'); window.location='administracion.php';</script>";

   }else{
    echo"<script> alert('No se han actualizado los datos del cliente'); window.location='editadmin.php';</script>";
   
   }
   }
catch(exception $e){
   die("error:". $e->getMessage());
   }

    ?>