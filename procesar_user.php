<?php


try{
    $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
ini_set('display_errors', 1);
error_reporting(E_ALL);


$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$pass=password_hash($_POST['password'], PASSWORD_DEFAULT, array("coast"=>12));
$email=$_POST['email'];


$consulta="INSERT INTO `usuarios` (`id`, `nombre`, `user`, `password`, `email`, `role`) VALUES (NULL, '$nombre', '$usuario', '$pass', '$email', '2'); ";
$resultado=$base->prepare($consulta) or die("error de registro");
$resultado->execute();

header("location:login.php");
}catch(exception $e){
    die("error:". $e->getMessage());
    }
mysqli_close($base);
?>