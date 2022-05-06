//Rss
//function cargarss() {
//var objHttp = null;
  //  if (window.XMLHttpRequest) {
 //       objHttp = new XMLHttpRequest();
 //   } else if (window.ActiveXObject) {
  //      objHttp = new ActiveXObject("Microsoft.XMLHTTP");
 //   }
  //  objHttp.open("GET", "xml/marcarss.xml", true);

  //  objHttp.onreadystatechange = function () {
  //      if (objHttp.readyState == 4) {
  //          var documento = objHttp.responseXML;
  //          var noticias = documento.documentElement;
  //          var cadena = "";
  //          for (i = 0; i < 3; i++) {
  //              cadena = cadena + "<b>Titular:</b> " + noticias.getElementsByTagName("item")[i].childNodes[1].firstChild.nodeValue + "<br/>";
   //             cadena = cadena + "<b>Descripcion:</b> " + noticias.getElementsByTagName("item")[i].childNodes[9].firstChild.nodeValue + "<br/>";
   //             cadena = cadena + "<b>Enlace:</b> <a href='" + noticias.getElementsByTagName("item")[i].childNodes[3].firstChild.nodeValue + "' target='_blank'>" +
   //                 noticias.getElementsByTagName("link")[i].childNodes[0].nodeValue + "</a><br/><br/>";
   //         }
    //        document.getElementById("caja").innerHTML = cadena;
  //      }
  //  }
   // objHttp.send(null);
//};
//Portafolio

        function mostrar1() {
            document.getElementById('portafolio-text1').style.visibility = "visible";
        };

        function mostrar2() {
            document.getElementById('portafolio-text2').style.visibility = "visible";
        };

        function mostrar3() {
            document.getElementById('portafolio-text3').style.visibility = "visible";
        };

        function mostrar4() {
            document.getElementById('portafolio-text4').style.visibility = "visible";
        };

        function mostrar5() {
            document.getElementById('portafolio-text5').style.visibility = "visible";
        };

        function mostrar6() {
            document.getElementById('portafolio-text6').style.visibility = "visible";
        };

        function ocultarinfo1() {
            document.getElementById('portafolio-text1').style.visibility = "hidden";
        };

        function ocultarinfo2() {
            document.getElementById('portafolio-text2').style.visibility = "hidden";
        };

        function ocultarinfo3() {
            document.getElementById('portafolio-text3').style.visibility = "hidden";
        };

        function ocultarinfo4() {
            document.getElementById('portafolio-text4').style.visibility = "hidden";
        };

        function ocultarinfo5() {
            document.getElementById('portafolio-text5').style.visibility = "hidden";
        };

        function ocultarinfo6() {
            document.getElementById('portafolio-text6').style.visibility = "hidden";
        };


        function cambia(val) {
            var nodos = document.getElementById(val);
            var atributo = nodos.attributes.getNamedItem("src").nodeValue;
            var elementorecibe = document.getElementById("espacioimagen");
            elementorecibe.setAttribute("src", atributo);
        };

        window.onscroll = function (e) {
            var element = document.getElementById("cabecera");
            element.classList.add("change");

        };




// Presupuestos
        function calcular() {
            $radios = $("input[type=radio]:checked");
            var coste_total = 0;
            $radios.each(function () {
                coste_total = coste_total + parseInt($(this).val());
            })





            var descuentos;
            var descuento = document.getElementById("meses").value;
            switch (descuento) {

                case "1":
                    descuentos = coste_total * 0.05;
                    break;
                case "2":
                    descuentos = coste_total * 0.10;
                    break;
                case "3":
                    descuentos = coste_total * 0.15;
                    break;
                default: descuentos = coste_total * 0.20;
            }
            var precio = coste_total - descuentos;

            $(".resultado").html(precio);
        }
        $(function () {
            $("input[type=radio]").click(function () {
                calcular();

            })
        });

        function unselect(){
            document.querySelectorAll('[type=radio]').forEach((x) => x.checked=false);
          }

// Validacion de datos 
var  ok;
var  msg;
        function validar(form) {
            if (form.aceptacion.checked == false) {
                alert("debes aceptar los terminos de proteccion de datos");
                form.aceptacion.focus(); return true;

            }
            alert("checkbox verificado");


            if (!re.exec(document.getElementById('movil').value)) {
                ok = 'no';
                msg = msg + 'El campo "Telefono" es erroneo.\n'
            }
            else {
                valor = document.getElementById('movil').value;
            }
            if (!(/^\d{9}$/.test(valor))) {
                ok = 'no'
                msg = msg + 'El telefono esta mal.\n';
            }




            if (!re.exec(document.getElementById('movil1').value)) {
                ok = 'no';
                msg = msg + 'El telefono esta mal.\n'
            }
            else {
                valor = document.getElementById('movil1').value;
            }
            if (!(/^\d{9}$/.test(valor))) {
                ok = 'no'
                msg = msg + 'El telefono debe contener 9 digitos.\n'
                re = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[az]{2,3})$/;
            }
            if (!re.exec(document.getElementById('email').value)) {
                ok = 'no';
                msg = msg + 'El Email esta mal escrito.\n'
            }
            else {
                valor = document.getElementById('email').value
                if (!(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[az]{2,3})$/))
                    ok = 'si';
            }
            if (ok == 'si') {
                document.formulario.submit()
            } else {
                alert(msg);
                return false;
            }
            if (!(/^\d{9}$/.test(valor))) {
                ok = 'no'
                msg = msg + 'El telefono debe contener 9 digitos.\n'
                re = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[az]{2,3})$/;
            }
            if (!re.exec(document.getElementById('email1').value)) {
                ok = 'no';
                msg = msg + 'El Email esta mal escrito.\n'
            }
            else {
                valor = document.getElementById('email1').value
                if (!(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[az]{2,3})$/))
                    ok = 'si';
            }
        };