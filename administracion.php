    <?php
    session_start();

    setlocale(LC_TIME, 'es_ES.UTF-8');
    
    date_default_timezone_set ('Europe/Madrid');
    try{
        $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM `usuarios`";
            $sql1="SELECT * FROM `noticias`";
            $sql2="SELECT * FROM `proyectos`";

        
        
    }catch(exception $e){
        die("error:". $e->getMessage());
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

    <h1 class="panel d-flex justify-content-center">Panel de Administrador</h1>
        <form action="eliminaradmin.php" method="POST">
            
        
    <div class="container-table-1" >

    <div id="nombre"class="table__title-1">Usuarios</div> 
    <div class="table__header">Nombre</div>
    <div class="table__header">Rol</div>
    <div class="table__header">Usuario</div>
    <div class="table__header">Fecha de la cita</div>
    <div class="table__header">Hora de la cita</div>
    <div class="table__header">Motivo de la cita</div>
    <div class="table__header">Operacion</div>
    <?php
        $resultado = $base->prepare($sql);
        $resultado->execute();
        $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($arr as $row){
    
    ?>
    <input type="hidden"name="id"class="table__item text-center" value="<?php echo $row["id"];?>">
    <div class="table__item"><?php echo $row["nombre"];?></div>
    <div class="table__item"><?php echo $row["role"];?></div>
    <div class="table__item"><?php echo $row["user"];?></div>
    <div class="table__item"><?php echo $row["diacita"];?></div>
    <div class="table__item"><?php echo $row["horacita"];?></div>
    <div class="table__item"><?php echo $row["asunto"];?></div>
    <div class="table__item">
    <a href="editadmin.php?id=<?php echo $row["id"];?>"class="table__item__link">Modificar</a> |
    <button type="submit"name="eliminarcita"class="boton_submit btn-danger" action="eliminaradmin.php"method="post">Eliminar</button>
    </div>
    
    <?php $id=$row['id']; }?>
    <script type="text/javascript">
    function confirmacion(e){
        if (confirm("¿Estas seguro que desea eliminar este usuario?")){
            return true;
        }else{
            e.preventDefault();
        }
    

    }
    var linkDelete = document.querySelectorAll(".boton_submit");
    for(var i=0; i<linkDelete.length;i++){
        linkDelete[i].addEventListener('click', confirmacion);
    }
            </script>
    </form>
    </div>
    <p class="text-center m-0auto">
        Recuerda que el rol 1 es administrador y 2 es cliente
    </p>

    <hr>

    <h3 class="d-flex justify-content-center">Insertar nueva noticias</h3>
    <div>
    <form  class="container-table-2" action="insertarnoticia.php" method="post" >
    <div id="nombre" class="table__title-2"><h1 class="d-flex justify-content-center">Noticias</h1></div>
    <input type="textarea" REQUIRED name="titulo"class="" placeholder="Titulo" value="">
    <input type="textarea" REQUIRED name="detalle"class="" placeholder="Noticia" value="">
    <input type="text" REQUIRED name="autor"class="" placeholder="Autor" value="">
    <input type="url" REQUIRED name="link" class="" placeholder="link" value="">
    <input type="date" class="" REQUIRED name="fecha" id="date" />
    <button type="submit" name="insertarnoticia" class="boton_noticia" action="insertarnoticia.php" method="post">Insertar</button>
    </form>
    </div>
    </div>
    <hr>
    <h3 class="d-flex justify-content-center">Modificar noticias</h3>
    <div class="container-table-3" >

    <div id="nombre"class="table__title-3">Noticias</div> 
    <div class="table__header">Titulo</div>
    <div class="table__header">Autor</div>
    <div class="table__header">Link </div>
    <div class="table__header">Fecha</div>
    <div class="table__header">Operacion</div>
    <?php
        $resultado = $base->prepare($sql1);
        $resultado->execute();
        $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($arr as $row){
    
    ?>
    <input type="hidden"name="id"class="table__item1 text-center" value="<?php echo $row["id"];?>">
    <div class="table__item1"><?php echo $row["titulo"];?></div>
    <div class="table__item1"><?php echo $row["autor"];?></div>
    <div class="table__item1"><?php echo $row["link"];?></div>
    <div class="table__item1"><?php echo $row["fecha"];?></div>

    <div class="table__item1">
    <a href="editarnoticia.php?id=<?php echo $row["id"];?>"class="table__item__link">Modificar</a> |
    <a href="eliminarnoticia.php?id=<?php echo $row["id"];?>"  class="boton_submit1 btn-danger">Eliminar</a>
    </div>
    
    <?php $id_noticias=$row['id']; }?>

    </form>
    </div>

    <hr>

    <h3 class="d-flex justify-content-center">Insertar nuevo proyecto</h3>
    <div>
    <form  class="container-table-1 " action="datosimagen.php" method="post" enctype="multipart/form-data" >
    <div id="nombre" class="table__title-1"><h1 class="d-flex justify-content-center">Proyectos</h1></div>
    <input type="text" REQUIRED name="nombre" value="" placeholder="Nombre">
    <input type="textarea" REQUIRED name="descripcion" placeholder="Descripcion" >
    <input type="file" REQUIRED name="imagen" class="mt-2" >
    <input type="text" REQUIRED name="tiempo" placeholder="Tiempo empleado">
    <input type="url" REQUIRED name="link" placeholder="Link">
    <input type="submit" name="insertarproyecto" class="boton_noticia" value="Aceptar">
    </form>
    </div>
    </div>
    <hr>

    <h3 class="d-flex justify-content-center">Modificar Proyectos</h3>
    <div class="container-table-4" >

    <div id="nombre"class="table__title-4">Proyectos</div> 
    <div class="table__header">Nombre</div>
    <div class="table__header">Descripcion</div>
    <div class="table__header">Imagen</div>
    <div class="table__header">Tiempo</div>
    <div class="table__header">Link </div>
    <div class="table__header">Operacion</div>
    <?php
        $resultado = $base->prepare($sql2);
        $resultado->execute();
        $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($arr as $row){
    
    ?>
    <input type="hidden"name="id"class="table__item1 text-center" value="<?php echo $row["id"];?>">
    <div class="table__item1"><?php echo $row["nombre"];?></div>
    <div class="table__item1"><?php echo $row["descripcion"];?></div>
    <div class="table__item1"><img class="imagenmuestra" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" max-width="250px"></div>
    <div class="table__item1"><?php echo $row["tiempo"];?></div>
    <div class="table__item1"><?php echo $row["link"];?></div>    
    <div class="table__item1">
    <a href="editarproyectos.php?id=<?php echo $row["id"];?>"class="table__item__link">Modificar</a> |
    <a href="eliminarproyectos.php?id=<?php echo $row["id"];?>"  class="boton_submit1 btn-danger">Eliminar</a>
    </div>
    
    <?php $id_proyectos=$row['id']; }?>

    </form>
    </div>

    
    <div class="col text-center">
    <a href="admin.php" class="btn btn-primary regular-button text-white" role="button">Regresar a la pagina principal </a>
    </div>
    <?php 
    $resultado->closeCursor();

    ?>
    <?php include("footer.php");
    
    ?>

    </body>
    </html>
