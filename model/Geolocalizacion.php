<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>geo localizacion</title>
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
</head>
<body onload="loadLocation();">
     <?php 
 session_start();
 $_SESSION['long']='<script>document.write(lon)</script>';

 $x=$_SESSION['long'];
echo $x."hola";
$long="<label id='long'></label>";
$lat="<label id='latitud'></label>";
echo "longitud: ".$long;
echo "Latitud: ".$lat;
$_SESSION['longitud']=$long;
$_SESSION['latitud']=$lat;

         ?>
    ------------------<br>
<!--<label id="long"></label> <br/>
<label id="latitud"></label> <br/>-->
<a id="link" target="_blank">Enlace al mapa</a>
 Esto es una prueba
 
</body>
</html>
