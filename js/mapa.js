/*Mapa Google*/
var mapa;
var mostrar_direcciones;
var servicios_rutas = new google.maps.DirectionsService();
function cargarmapa() {
mostrar_direcciones = new google.maps.DirectionsRenderer();
var punto = new google.maps.LatLng(
36.500721,
-4.816710
);
var opciones = {
zoom: 7,
center: punto,
mapTypeId: google.maps.MapTypeId.ROADMAP
};


mapa = new google.maps.Map(document.getElementById("mapa"),
opciones);
var marker = new google.maps.Marker({
position: punto,
map: mapa});
mostrar_direcciones.setPanel(document.getElementById("ruta"));

}

function calcularRuta() {
var partida = document.getElementById("partida").value;
var destino = new google.maps.LatLng(
36.500721,
-4.816710
);
var opciones = {
origin:partida,
destination: destino,
travelMode: google.maps.DirectionsTravelMode.DRIVING
};
servicios_rutas.route(opciones, function(response, status) {
if (status == google.maps.DirectionsStatus.OK) {
mostrar_direcciones.setDirections(response);
}
});
};