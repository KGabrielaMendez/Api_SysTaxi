<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    #map {
        width: 90%;
        height: 80%;
    }
    #coords{width: 500px;}
    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 35px;
        width: 100px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }
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
        <input id="pac-input" class="controls" type="text" placeholder="Ingresar ubicación">
        <div id="type-selector" class="controls">
            <input type="radio" name="type" id="changetype-all" checked="checked">
            <label for="changetype-all">Todos</label>
        </div>
        <div id="map" ></div>

        <input type="hidden" id="coords" />

        <script>
            function initMap() {

//aqui empieza
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
//aqui termina
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 0.3499768,
                        lng: -78.12601289999998
                    },
                    zoom: 13
                });
                var input = /** @type {!HTMLInputElement} */ (
                        document.getElementById('pac-input'));

                var types = document.getElementById('type-selector');
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

                var autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.bindTo('bounds', map);

                var infowindow = new google.maps.InfoWindow();
                var marker = new google.maps.Marker({
                    map: map,
                    anchorPoint: new google.maps.Point(0, -29),
                    position: new google.maps.LatLng(coords.lat, coords.lng)
                });

                autocomplete.addListener('place_changed', function () {
                    infowindow.close();
                    marker.setVisible(false);
                    var place = autocomplete.getPlace();
                    if (!place.geometry) {
                        window.alert("Autocomplete's returned place contains no geometry");
                        return;
                    }
                    // Si el lugar tiene una geometría, luego lo presentan en un mapa.
                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17); // ¿Por qué 17 ? Porque se ve bien.
                    }
                    marker.setIcon(/** @type {google.maps.Icon} */ ({
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(35, 35)
                    }));
                    marker.setPosition(place.geometry.location);
                    var la = place.geometry.location.lat();
                    var lo = place.geometry.location.lng();
                    document.getElementById("destinolat").value = la;
                    document.getElementById("destinolon").value = lo;

                    marker.setVisible(true);
                    google.maps.event.addListener(marker, 'dragend', function (event) {
                        document.getElementById("coords").value = this.getPosition().toString();

                    });


                    var address = '';
                    if (place.address_components) {
                        address = [
                            (place.address_components[0] && place.address_components[0].short_name || ''), (place.address_components[1] && place.address_components[1].short_name || ''), (place.address_components[2] && place.address_components[2].short_name || '')
                        ].join(' ');
                    }

                    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address + '<br>' + place.geometry.location);

                    infowindow.open(map, marker);
                });

                // Estaece un event en un radio button para cambiar el tipo de filtro en lugares
                // Autocompletado.
                function setupClickListener(id, types) {
                    var radioButton = document.getElementById(id);
                    radioButton.addEventListener('click', function () {
                        autocomplete.setTypes(types);
                    });
                }

                setupClickListener('changetype-all', []);
                setupClickListener('changetype-address', ['address']);
                setupClickListener('changetype-establishment', ['establishment']);
                setupClickListener('changetype-geocode', ['geocode']);
            }

            function setMapa(coords)
            {

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

        <script>
            function distancia(la, lo) {
                var API_KEY="AIzaSyDttBbx4Y6SReV1zxWgmCbvR_hQkja-15A";
                var origen = "{lat: " + latIni + " , lng: " + lonIni + " }";
                var destino = "{lat: " + la + " , lng: " + lo + " }";
                var dist = "l";
                var distanciaURL = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=" + latIni + "," + lonIni + "&destinations=" + la + "," + lo + "&key=" + API_KEY;

                var request = new XMLHttpRequest();

                request.onreadystatechange = function () {
                    if (request.readyState === 4 && request.state == 200) { //200 significa que la petición a Google fue correcta
                        var respuesta = JSON.parse(request.responseText);
                        if (respuesta) {
                            var distancia = respuesta.rows[0].elements[0].distance.text;
                            if (distancia) {                                
                                document.getElementById("span_distancia").innerText = distancia;
                            } else {
                                console.log("Error al obtener el valor de la distancia");
                            }
                        } else {
                            console.log("Error al convertir la respuesta obtenida de Google");
                        }
                    } else {
                        console.log("Error al pedir la distancia entre dos puntos a Google");
                    }
                }
                request.open('GET', distanciaURL, true);
                request.send();
            }



        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDttBbx4Y6SReV1zxWgmCbvR_hQkja-15A&sensor=false&signed_in=true&libraries=places&callback=initMap" async defer></script>
 <div>
    	Distancia entre los puntos: <span id="span_distancia"></span>
    </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD DESTINO</label>
        <div class="form-group" contenteditable="false">
            <input type="text" readonly name="LATITUD_DEST" id="destinolat" class="form-control" value="<?php echo isset($_REQUEST["LATITUD_DEST"]) ? $_REQUEST["LATITUD_DEST"] : ''; ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD DESTINO</label>
        <div class="form-group" contenteditable="false">
            <input type="text" readonly name="LONGITUD_DEST" id="destinolon" class="form-control" value="<?php echo isset($_REQUEST["LONGITUD_DEST"]) ? $_REQUEST["LONGITUD_DEST"] : ''; ?>" />
        </div>
        <p><label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION ENC</label></p>
        <div class="form-group">

            <input type="text" name="DIRECCION_ENC" id="dist" class="form-control" value="<?php echo isset($_REQUEST["DIRECCION_ENC"]) ? $_REQUEST["DIRECCION_ENC"] : ''; ?>" />
        </div>
        <input type="hidden" name="option" value="insert">
        <input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
    </form>
</div> 
<?php include"inc/inc_footer.php"; ?>
