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
<?php include"inc/inc_head.php"; ?>
<ul class="breadcrumb">
    <li><a href="cat_encomienda.php">Inicio</a></li>
    <li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
    <form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
        <?php echo $msg; ?>
        <br/>
        <br/>
        <div class="form-group">
            <input type="hidden" name="ID_US" class="form-control" value="<?php echo $_SESSION['idUS']; ?>" />
        </div>

        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIPO ENCOMIENDA</label>

        <select name="TIPO_ENCOMIENDA"  value="TIPO_ENCOMIENDA" style="width:100%; height: 40px">
            <option name="TIPO_ENCOMIENDA" value="caja">cajas</option>
            <option name="TIPO_ENCOMIENDA" value="sobres">sobres</option>
            <option name="TIPO_ENCOMIENDA" value="alimentos">alimentos</option>
            <option name="TIPO_ENCOMIENDA" value="productos de hogar">productos de hogar</option>
            <option name="TIPO_ENCOMIENDA" value="Otros">Otros</option>
        </select>

        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION ENC</label>
        <div class="form-group">
            <input type="text" name="DESCRIPCION_ENC" class="form-control" value="<?php echo isset($_REQUEST["DESCRIPCION_ENC"]) ? $_REQUEST["DESCRIPCION_ENC"] : ''; ?>" />
        </div>
       
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD ORIGEN</label>
        <div class="form-group" contenteditable="false">
            <input type="text" readonly name="LATITUD_ORIG" id="latIni" class="form-control" value="<?php echo isset($_REQUEST["LATITUD_ORIG"]) ? $_REQUEST["LATITUD_ORIG"] : ''; ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD ORIGEN</label>
        <div class="form-group" contenteditable="false">
            <input type="text" readonly name="LONGITUD_ORIG" id="lonFin" class="form-control" value="<?php echo isset($_REQUEST["LONGITUD_ORIG"]) ? $_REQUEST["LONGITUD_ORIG"] : ''; ?>" />
        </div>
        <div id="map" ></div>

        <input type="hidden" id="coords" />
        <script>


            var marker;          //variable del marcador
            var coords = {};    //coordenadas obtenidas con la geolocalización
            var latIni;
            var lonIni;
            var latFin;
            var lonFin;
            //Funcion principal
            initMap = function ()
            {

                //usamos la API para geolocalizar el usuario
                navigator.geolocation.getCurrentPosition(
                        function (position) {
                            coords = {
                                lng: position.coords.longitude,
                                lat: position.coords.latitude
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
                            center: new google.maps.LatLng(coords.lat, coords.lng),

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
                document.getElementById("latIni").value = coords.lat;
                document.getElementById("lonFin").value = coords.lng;
                latIni = coords.lat;
                lonIni = coords.lng;
                //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
                //cuando el usuario a soltado el marcador
                marker.addListener('click', toggleBounce);

                marker.addListener('dragend', function (event)
                {
                    //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
                    document.getElementById("coords").value = this.getPosition().lat() + "," + this.getPosition().lng();
                    document.getElementById("latitud").value = this.getPosition().lat();
                    document.getElementById("longitud").value = this.getPosition().lng();
                    latFin = this.getPosition().lat();
                    lonFin = this.getPosition().lng();
                    var punto1 = new google.maps.LatLng(latIni, lonIni);
                    var punto2 = new google.maps.LatLng(latFin, lonFin);
                    var distanciapuntos = google.maps.geometry.spherical.computeDistanceBetween(punto1, punto2);
                    document.getElementById("distancia").value = distanciapuntos;
                    alert(distanciapuntos);
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

        <script>
            function distancia() {
                var punto1 = new google.maps.LatLng(latIni, lonIni);
                var punto2 = new google.maps.LatLng(latFin, lonFin);
                var distanciapuntos = google.maps.geometry.spherical.computeDistanceBetween(punto1, punto2);
                document.getElementById("distancia").value = distanciapuntos;
            }

        </script>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD DESTINO</label>
        <div class="form-group" contenteditable="false">
            <input type="text" readonly name="LATITUD_DEST" id="latitud" class="form-control" value="<?php echo isset($_REQUEST["LATITUD_DEST"]) ? $_REQUEST["LATITUD_DEST"] : ''; ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD DESTINO</label>
        <div class="form-group" contenteditable="false">
            <input type="text" readonly name="LONGITUD_DEST" id="longitud" class="form-control" value="<?php echo isset($_REQUEST["LONGITUD_DEST"]) ? $_REQUEST["LONGITUD_DEST"] : ''; ?>" />
        </div>
        <p><label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION ENC</label></p>
        <div class="form-group">

            <input type="text" name="DIRECCION_ENC" class="form-control" value="<?php echo isset($_REQUEST["DIRECCION_ENC"]) ? $_REQUEST["DIRECCION_ENC"] : ''; ?>" />
        </div>
        <input type="hidden" name="option" value="insert">
        <input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
    </form>
</div> 
<?php include"inc/inc_footer.php"; ?>
