var pagina;
$(document).ready(function () {
    switch (pagina) {
        default:$("#index").load("home.php");
                
        case 1: $(document).ready(function () {
            $("#pag1").click(function () {
                $("#index").load("home.php");  
            });
        });
        case 2: $(document).ready(function () {
            $("#pag2").click(function () {
                $("#index").load("portafolio.php");
            });
        });
        case 3: $(document).ready(function () {
            $("#pag3").click(function () {
                $("#index").load("presupuesto.php");
            });
        });
        case 4: $(document).ready(function () {
            $("#pag4").click(function () {
                $("#index").load("contacto.php");
            });
        });
    }
});

