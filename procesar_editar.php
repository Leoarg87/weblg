<?php
session_start();
$fecha_actual = strtotime(date("d-m-Y H:i:00"));
$fechamin=strtotime(($fecha_actual."+ 3 days"));
try{
   $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $dia=$_POST['dia'];
   $hora=$_POST['hora'];
   $asunto=$_POST['asunto'];
   $user=$_SESSION["user"];
   $resultadofecha= "SELECT `diacita` from `usuarios` where 1";
   $result = $base->prepare($resultadofecha);
   $result->execute();
   $array = $result->fetchAll(PDO::FETCH_ASSOC);
   foreach ($array as $row) {
   
    
     $diacita= strtotime(($row['diacita']));
   }
   if($diacita > $fechamin){
      $sql= "UPDATE `usuarios` SET `diacita` = '$dia',`horacita` = '$hora',`asunto` = '$asunto' WHERE `usuarios`.`user` = '".$user."'";
      $resultado = $base->prepare($sql);
      $resultado->execute();
      $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
      
   
header("location:citascliente.php");

   }
   else{ echo'<script type="text/javascript"> alert("No puedes modificar tu cita con menos de 72 horas de antelación");</script>';
    }}
catch(exception $e){
   die("error:". $e->getMessage());
   }

    ?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    html, body {
    	background-image: url("fondo.jpeg");
    	background-size: cover;
    	background-repeat: no-repeat;
    	height: 100%;
    }
    
    
    .container-fluid {
    	border: 2px solid black;
    	display: flex;
      	justify-content: center;	
    }
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Citas</title>
  </head>
  <body class="bg-dark">
  <div class="container-fluid h-100"> 
    		<div class="row w-100 align-items-center">
    			<div class="col text-center">
    				<a href="modificarcita.php" class="btn btn-primary regular-button" role="button">Regresar </a>
    			</div>	
    		</div>
    
    
    	</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>