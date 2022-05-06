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
    <title>Programador Web</title>
    <script>
       // setTimeout(function () {
       //     alert("Bienvenidos a PrograWeb LG, Espero que encuentres lo que buscabas!");
        //}, 5000);
    </script>
    <script async src="js\main.js"></script>
    <script async src="js\ajax.js"></script>


</head>

<body>

<?php

session_start();
if(!isset($_SESSION['user'])){

    header("location:login.php");


}
?>
    <header>

        <h1 id="nombre">Bienvenido a PrograwebLG <?php
        echo  $_SESSION['user'];?> </h1>
        <?php
 setlocale(LC_TIME, 'es_ES.UTF-8');
 
 date_default_timezone_set ('Europe/Madrid');
 
$hoy= date("d-m-Y");
$hora= date("G:i");
echo "Hoy es $hoy y son las $hora";
?>
        <?php
        include("perfil.php")
        ?>
        <a class="row justify-content-end m-3" href="index.php ? action=logout">Cerrar Sesión</a>
            <img id="logo" src="img/logo.jpg" alt="Logo" width="20%" height="20%">
            
        </div>
            
        <div>
            <span><a href="#"> <img width="50px" src="img/flechaup.jpg" id="flechaup"></a>
            </span>
        </div>
        <div id="cabecera">
            <nav>
                <ul class="nav">
                    <li class="menu nav-link active  mx-2 py-0 "><a class="text-decoration-none " href="#home" id="pag1">Home</a></li>
                    <li class="menu nav-link mx-2 py-0"><a class="text-decoration-none" href="#Nuestros-Trabajos" id="pag2">Nuestros Trabajos</a></li>
                    <li class="menu nav-link mx-2 py-0"><a class="text-decoration-none"href="#Presupuestos" id="pag3">Presupuestos</a></li>
                    <li class="menu nav-link mx-2 py-0"><a class="text-decoration-none"href="#Contacto" id="pag4">Contacto</a></li>
                </ul>
            </nav>

        </div>

    </header>
    <div id="index"></div>
<?php
    include('footer.php')
?>
</body>
<script async src="js\mapa.js"></script>
</html>