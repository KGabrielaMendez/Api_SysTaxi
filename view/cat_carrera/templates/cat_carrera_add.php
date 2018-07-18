<?php include"../inc/inc_head.php";?>

<br/>
<div class="col-sm-12 col-md-12">
<form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<div class="form-group">
    <input type="hidden" name="ID_US" class="form-control" value="<?php  echo $_SESSION['idUS']; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION CAR</label>
<div class="form-group">
<input type="text" name="DESCRIPCION_CAR" class="form-control" value="<?php echo isset($_REQUEST["DESCRIPCION_CAR"]) ? $_REQUEST["DESCRIPCION_CAR"] : ''; ?>" />
</div>

<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD CAR</label>
<div class="form-group">
<input type="text" id="latIni" name="LATITUD_CAR" class="form-control" value="<?php echo isset($_REQUEST["LATITUD_CAR"]) ? $_REQUEST["LATITUD_CAR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD CAR</label>

<div class="form-group">
<input type="text" id="lonFin" name="LONGITUD_CAR" class="form-control" value="<?php echo isset($_REQUEST["LONGITUD_CAR"]) ? $_REQUEST["LONGITUD_CAR"] : ''; ?>" />
</div>
           <div id="map" ></div>
           
            <input type="hidden" id="coords" />
            <script>


                var marker;          //variable del marcador
                var coords = {};    //coordenadas obtenidas con la geolocalización

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
                    //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
                    //cuando el usuario a soltado el marcador
                    marker.addListener('click', toggleBounce);

                    marker.addListener('dragend', function (event)
                    {
                        //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
                        document.getElementById("coords").value = this.getPosition().lat() + "," + this.getPosition().lng();
                        document.getElementById("latitud").value = this.getPosition().lat();

                        document.getElementById("longitud").value = this.getPosition().lng();
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

<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION CAR</label>
<div class="form-group">
<input type="text" name="DIRECCION_CAR" class="form-control" value="<?php echo isset($_REQUEST["DIRECCION_CAR"]) ? $_REQUEST["DIRECCION_CAR"] : ''; ?>" />
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;
<a href="cat_carrera.php" class="btn btn-danger" value="Cancelar">Cancelar</a>
</form></div>
<?php // include"inc/inc_footer.php"; ?>
