    <?php

    try{
            $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql2="SELECT * FROM `proyectos`";

            
            
        }catch(exception $e){
            die("error:". $e->getMessage());
            }
            ?>

    <body>
        <div class="entrada">
            <p>Como programador web la mayor parte de trabajos realizados han sido para empresas o particulares, trabajos
                que por cortesia no aparecen aqui. Sin embargo aqui puedes encontrar algunos de los proyectos realizados por
                cuenta propia.</p><br>
            Ya sea un proyecto desarrollado desde cero o un proyecto que haya tenido que coger un momento en el que alguien
            lo dejo. Los he ido sumando a mi largo portafolio. Estos proyectos hablan por si solos, demuestran mi
            experiencia como programador y como trabajador. <br><br>
            Click en cada imagen para mirar su contenido.
        </div>
        <section class="seccioncontenido">
            <div class="divimagengaleria">
                <img src="img/marbellarugby.jpg" onclick="mostrar1()" ; height="100px" width="100px" id="1" value="1"
                    class="imagengaleria" alt="marbella rugby club" onmouseover="cambia('1');">
                <img src="img/lamaxima.jpg" onclick="mostrar2()" height="100px" width="100px" id="2" value="2"
                    class="imagengaleria" alt="la maxima argentina" onmouseover="cambia('2');">
                <img src="img/puenteromano.jpg" onclick="mostrar3()" height="100px" width="100px" id="3" value="3"
                    class="imagengaleria" alt="hotel puente romano" onmouseover="cambia('3');">
                <img src="img/elmundo.jpg" onclick="mostrar4()" height="100px" width="100px" id="4" value="4"
                    class="imagengaleria" alt="periodico el mundo" onmouseover="cambia('4');">
                <img src="img/quesosargudo.jpg" height="100px" width="100px" id="5" value="5" class="imagengaleria"
                    alt="quesos argudo" onmouseover="cambia('5');" onclick="mostrar5()">
                <img src="img/atleticomadrid.jpg" onclick="mostrar6()" height="100px" width="100px" id="6" value="6"
                    class="imagengaleria" alt="atletico de madrid" onmouseover="cambia('6');">
            </div>
            <div class="divmuestraimagen">
                <img src="img/marbellarugby.jpg" class="imagengaleriagrande" id="espacioimagen" width="300vh"
                    height="300vh">
            </div>
            <div class="info">
                <section id="portafolio-text1" style="visibility: hidden;">
                    <h2 class="infos">Marbella Rugby Club</h2>
                    <p class="infos">MARBELLA RUGBY CLUB, es una entidad deportiva sin ánimo de lucro, que impulsa la
                        práctica del Rugby en la ciudad de Marbella y en toda la Costa del Sol.
                        <a href="javascript:void(0)" onclick="ocultarinfo1()">Ocultar información</a>
                    </p>
                    <a href="https://marbellarugby.com/" target="_blank">Pagina Web Marbella Rugby Club</a>
                </section>
                <section id="portafolio-text2" style="visibility: hidden;">
                    <h2 class="infos">La Maxima Argentina</h2>
                    <p class="infos">Es una empresa ÚNICA importadora europea en ofrecer un programa de abastecimiento de
                        CARNE PREMIUM. Controlando desde origen su producción, raza y la selección de los cortes.
                        Sacrificados en mataderos aprobados por la Comunidad Europea.
                        <a href="javascript:void(0)" onclick="ocultarinfo2()">Ocultar información</a></p>
                    <a href="http://www.maxima-argentina.es/" target="_blank">Pagina Web La Maxima Argentina</a>
                </section>
                <section id="portafolio-text3" style="visibility: hidden;">
                    <h2 class="infos">Hotel Puente Romano Marbella</h2>
                    <p class="infos">Puente Romano, el resort de playa más prestigioso de España. Desmarcándose por completo
                        del típico ambiente de resort, presenta un entorno idílico al más puro estilo andaluz, con una
                        infinidad de actividades para que vivas unas vacaciones
                        únicas.
                        <a href="javascript:void(0)" onclick="ocultarinfo3()">Ocultar información</a></p>
                    <a href="https://www.puenteromano.com/" target="_blank">Pagina Web Hotel Puente Romano</a>
                </section>
                <section id="portafolio-text4" style="visibility: hidden;">
                    <h2 class="infos">Periodico El Mundo</h2>
                    <p class="infos"> Periodico Español con noticias, actualidad, álbumes, debates, sociedad, servicios,
                        entretenimiento y última hora en España y el mundo.
                        <a href="javascript:void(0)" onclick="ocultarinfo4()">Ocultar información</a></p>
                    <a href="https://www.elmundo.es/" target="_blank">Pagina Web Periodico El Mundo</a>
                </section>
                <section id="portafolio-text5" style="visibility: hidden;">
                    <h2 class="infos">Quesos Argudo</h2>
                    <p class="infos">Es una empresa familiar con una larga experiencia en el sector quesero caprino que nos
                        dedicamos a la elaboración artesanal de quesos de cabra , autóctonos europeos y destinados al
                        mercado de afinadores y distribución tradicional.
                        <a href="javascript:void(0)" onclick="ocultarinfo5()">Ocultar información</a></p>
                    <a href="http://lact-argudo.com/" target="_blank">Pagina Web Quesos Argudo</a>
                </section>
                <section id="portafolio-text6" style="visibility: hidden;">
                    <h2 class="infos">Club Atletico de Madrid</h2>
                    <p class="infos">Toda la información del Club Atlético de Madrid. Un club historico en España con un
                        palmares apasionante.
                        <a href="javascript:void(0)" onclick="ocultarinfo6()">Ocultar información</a></p>
                    <a href="https://www.atleticodemadrid.com/" target="_blank">Pagina Web Atletico de Madrid</a>
                </section>
            </div>
        </section>

        <h3 class="d-flex justify-content-center">Nuestros proyecto actuales</h3>
        <div class="container-table-5" >

        <div id="nombre"class="table__title-5">Proyectos</div> 
        <div class="table__header">Nombre</div>
        <div class="table__header">Descripcion</div>
        <div class="table__header">Imagen</div>
        <div class="table__header">Tiempo</div>
        <div class="table__header">Link </div>
      
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
        <div class="table__item1"><a href="<?php echo $row["link"];?>"><?php echo $row["link"];?></a></div>    
        
        
        <?php $id_proyectos=$row['id']; }?>
    </body>
