<script type="text/javascript">
function loadLocation () {
	//inicializamos la funcion y definimos  el tiempo maximo ,las funciones de error y exito.
	navigator.geolocation.getCurrentPosition(viewMap,ViewError,{timeout:1000});
}
//Funcion de exito
function viewMap (position) {
	var lon = position.coords.longitude;	//guardamos la longitud
	var lat = position.coords.latitude;		//guardamos la latitud
	var link = "http://maps.google.com/?ll="+lat+","+lon+"&z=14";
	document.getElementById("long").innerHTML = lon;        //longitud
	document.getElementById("latitud").innerHTML = lat;     //latitud
	document.getElementById("link").href = link;
 
}
function ViewError (error) {
	alert(error.code);
} 
	</script>
        <body  onload="loadLocation();">
<?php  
include"inc/inc_head.php";?>
        
<ul class="breadcrumb">
<li><a href="cat_carrera.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID PEDIDO</label>
<div class="form-group">
<select name="ID_PEDIDO"  class="locationMultiple form-control">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION CAR</label>
<div class="form-group">
<input type="text" name="DESCRIPCION_CAR" class="form-control" value="<?php echo isset($_REQUEST["DESCRIPCION_CAR"]) ? $_REQUEST["DESCRIPCION_CAR"] : ''; ?>" />
</div>
<!--<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DISTANCIA CAR</label>
<div class="form-group">-->
<!--<input type="text" name="DISTANCIA_CAR" class="form-control" value="<?php // echo isset($_REQUEST["DISTANCIA_CAR"]) ? $_REQUEST["DISTANCIA_CAR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIEMPOESPERAMIN CAR</label>
<div class="form-group">
<input type="text" name="TIEMPOESPERAMIN_CAR" class="form-control" value="<?php // echo isset($_REQUEST["TIEMPOESPERAMIN_CAR"]) ? $_REQUEST["TIEMPOESPERAMIN_CAR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTO CAR</label>
<div class="form-group">
<input type="text" name="COSTO_CAR" class="form-control" value="<?php echo isset($_REQUEST["COSTO_CAR"]) ? $_REQUEST["COSTO_CAR"] : ''; ?>" />
</div>-->
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD CAR</label>
<div class="form-group">
    
           <label name="LATITUD_CAR" value="LATITUD_CAR" class="form-control" id='latitud'></label>
           <input type="hidden" name="LATITUD_CAR" class="form-control" id='latitud' value="<?php echo isset($_REQUEST["LATITUD_CAR"]) ? $_REQUEST["LATITUD_CAR"] : ''; ?>"/>
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD CAR</label>
<div class="form-group">
<label name="LONGITUD_CAR" class="form-control" id='long'></label></div>
<DIV>
<a id="link" target="_blank" style="text-transform: capitalize; width: 150px; font-weight: bold;">MOSTRAR UBICACION EN MAPA</a>
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION CAR</label>
<div class="form-group">
    <input type="text" name="DIRECCION_CAR" class="form-control" placeholder="Ingrese numero de casa" value="<?php echo isset($_REQUEST["DIRECCION_CAR"]) ? $_REQUEST["DIRECCION_CAR"] : ''; ?>" />
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
</form></div>
<?php include"inc/inc_footer.php"; ?>
        </body>
