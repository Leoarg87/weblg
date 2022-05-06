<body>
       <section class="map">
        <div id="mapa"></div>
        <div id="ruta"></div>
       <script>onload(cargarmapa())</script>
        </form>
        <div id="direcciones"></div>
        <h3 class="informacion">Localizanos en:<br> Avenida de la Jacaranda nº 1 residencial playa alicate,Marbella,
            Málaga.<br>
            <br>Telefono de contacto: +3460527349<br><br> Email: leoarielgarcia87@gmail.com</h3>
        <form action="" name="datos" id="datos1">

            <input type="text" name="Nombre" id="nombres1" placeholder="Ingrese su nombre y apellido" required>
            <br><input type="text" name="Correo" id="email1" placeholder="Ingrese su email" required>
            <br><input type="text" name="movil" id="movil1" placeholder="Ingrese su numero de telefono" required><br>
            <input type="date" name="fecha" id="fecha" required><br>
            <textarea type="text" id="mensaje1" cols="20" rows="20" name="mensaje" cols="30"
                placeholder="Escriba aqui la informacion que desea solicitar" required></textarea>
            <br>
            <div class="switch-contenedor">
                <p class="politica">Marca la casilla para aceptar nuestra politica de proteccion de datos. <input
                        type="checkbox" name="acepto" id="switch"></p>
                <input type="button" value="Enviar" id="botonenviar" onclick="validar(this.form);">

        </form>
    </section>
   
</body>