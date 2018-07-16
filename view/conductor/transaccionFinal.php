<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Obtener coordenadas de un marcador </title>
        <style>
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            #map {
                width: 50%;
                height: 80%;
            }
            #coords{width: 500px;}
        </style>
    </head>
    <body >
        <h1>EL DESTINO DE LA ENCOMIENDA ES:</h1>
        <?php
session_start();
$id = $_SESSION['encomienda'];

$mysqli = mysqli_connect('localhost', 'root', '', 'systaxi');
$consulta = 'SELECT LATITUD_ORIG,LONGITUD_ORIG, LATITUD_DEST, LONGITUD_DEST, ID_ENCOMIENDA, DESCRIPCION_ENC FROM cat_encomienda A, cat_usuarios B, login C
            WHERE A.ID_US = B.ID_US
            AND B.ID_LOG = C.ID_LOG
            AND A.ID_ENCOMIENDA="' . $id . '"';
if ($res = mysqli_query($mysqli, $consulta)) {
    while ($fila = mysqli_fetch_row($res)) {
        $latIni = $fila[0];
        $lonIni = $fila[1];
        $latFin = $fila[2];
        $lonFin = $fila[3];
    }
}
?>
        <div id="map" ></div>

        <input type="text" id="coords" value="<?php echo $latFin.",".$lonFin?>"/>
        <script>
                <input


            var marker;          //variable del marcador
            var coords = {};    //coordenadas obtenidas con la geolocalización

            //Funcion principal
            initMap = function ()
            {

                //usamos la API para geolocalizar el usuario
                navigator.geolocation.getCurrentPosition(
                        function (position) {
                            coords = {
                                lng: <?php echo $lonFin; ?>,
                                lat: <?php echo $latFin; ?>
                            };
                            setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa


                        }, function (error) {
                    console.log(error);
                });

            }



            function setMapa(coords)
            {
                //Se crea una nueva instancia del objeto mapa
                var map = new google.maps.Map(document.getElementById('map'),
                        {
                            zoom: 16,
                            center: new google.maps.LatLng(<?php echo $latFin; ?>,<?php echo $lonFin; ?>),

                        });

                //Creamos el marcador en el mapa con sus propiedades
                //para nuestro obetivo tenemos que poner el atributo draggable en true
                //position pondremos las mismas coordenas que obtuvimos en la geolocalización
                marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: new google.maps.LatLng(coords.lat, coords.lng),

                });
                //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
                //cuando el usuario a soltado el marcador
                marker.addListener('click', toggleBounce);

                marker.addListener('dragend', function (event)
                {
                    //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
                    document.getElementById("coords").value = this.getPosition().lat() + "," + this.getPosition().lng();
                });
            }

            //callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            // Carga de la libreria de google maps 

        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDttBbx4Y6SReV1zxWgmCbvR_hQkja-15A&callback=initMap"></script>
        <form action="../mainConductor.php">
            <input type="submit" name="Finalizar Encomienda" value="Finalizar Encomienda">
        </form>
    </body>
</html>