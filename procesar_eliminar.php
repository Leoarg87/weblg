<?php
session_start();
try{
   $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $user=$_SESSION["user"];
   
   if($base){
      $sql="UPDATE `usuarios` SET `diacita` = null,`horacita` = null,`asunto` = null WHERE `usuarios`.`user` = '".$user."'";
    
    
      $resultado = $base->prepare($sql);
      $resultado->execute();
      $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
  
   
header("location:citascliente.php");
}}catch(exception $e){
   die("error:". $e->getMessage());
   }

    ?>