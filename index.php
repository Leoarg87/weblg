
<?php
session_start();
require 'db.php';
if(isset($_GET['action'])&& $_GET['action']=='logout'){
    session_destroy();
unset($_SESSION['user']);
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="category" content="Spanish, Spain, Programador Web">
    <meta name="description" content="empresa de programacion de paginas web y aplicaciones moviles">
    <meta name="locality" content="Marbella, Malaga, España">
    <link rel="stylesheet" href="assets\css\reset.css">
    <link rel="stylesheet" href="assets\css\estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBW-YWIoRTIl_rQSUGVFsRWi-kgf5DUU-U"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
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
    <header>

        <h1 id="nombre">Leonardo Ariel Garcia</h1>
        <?php
        include("registros.php")
        ?>
            
            <img id="logo" src="img/logo.jpg" alt="Logo" width="20%" height="20%">
            
        </div>
        
      
            <span><a href="#"> <img width="50px" src="img/flechaup.jpg" id="flechaup"></a>
            </span>
        </div>
        <div id="cabecera">
            <nav>
                <ul class="nav">
                    <li class="menu nav-link active  mx-2 py-0 "><a class="text-decoration-none text-white " href="#home" id="pag1">Home</a></li>
                    <li class="menu nav-link mx-2 py-0"><a class="text-decoration-none text-white" href="#Nuestros-Trabajos" id="pag2">Nuestros Trabajos</a></li>
                    <li class="menu nav-link mx-2 py-0"><a class="text-decoration-none text-white"href="#Presupuestos" id="pag3">Presupuestos</a></li>
                    <li class="menu nav-link mx-2 py-0"><a class="text-decoration-none text-white"href="#Contacto" id="pag4">Contacto</a></li>
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