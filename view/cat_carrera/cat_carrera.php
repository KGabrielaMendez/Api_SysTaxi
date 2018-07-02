<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_CARRERA']) ? $_REQUEST['ID_CARRERA'] : '';
$sqlV = 'SELECT ID_PEDIDO, DESCRIPCION_CAR, DISTANCIA_CAR, TIEMPOESPERAMIN_CAR, COSTO_CAR, LATITUD_CAR, LONGITUD_CAR, DIRECCION_CAR, ID_CARRERA FROM cat_carrera WHERE ID_CARRERA="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_carrera_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_CARRERA']) ? $_REQUEST['ID_CARRERA'] : '';
$sqlE = 'SELECT ID_PEDIDO, DESCRIPCION_CAR, DISTANCIA_CAR, TIEMPOESPERAMIN_CAR, COSTO_CAR, LATITUD_CAR, LONGITUD_CAR, DIRECCION_CAR, ID_CARRERA FROM cat_carrera WHERE ID_CARRERA="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/cat_carrera_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['ID_CARRERA']) ? $_REQUEST['ID_CARRERA'] : '';
$sqlD = 'DELETE FROM cat_carrera WHERE ID_CARRERA="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: cat_carrera.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['ID_CARRERA']) ? $_REQUEST['ID_CARRERA'] : '';
$ID_PEDIDO = isset($_REQUEST['ID_PEDIDO']) ? addslashes($_REQUEST['ID_PEDIDO']) : '';
$DESCRIPCION_CAR = isset($_REQUEST['DESCRIPCION_CAR']) ? addslashes($_REQUEST['DESCRIPCION_CAR']) : '';
$DISTANCIA_CAR = isset($_REQUEST['DISTANCIA_CAR']) ? addslashes($_REQUEST['DISTANCIA_CAR']) : '';
$TIEMPOESPERAMIN_CAR = isset($_REQUEST['TIEMPOESPERAMIN_CAR']) ? addslashes($_REQUEST['TIEMPOESPERAMIN_CAR']) : '';
$COSTO_CAR = isset($_REQUEST['COSTO_CAR']) ? addslashes($_REQUEST['COSTO_CAR']) : '';
$LATITUD_CAR = isset($_REQUEST['LATITUD_CAR']) ? addslashes($_REQUEST['LATITUD_CAR']) : '';
$LONGITUD_CAR = isset($_REQUEST['LONGITUD_CAR']) ? addslashes($_REQUEST['LONGITUD_CAR']) : '';
$DIRECCION_CAR = isset($_REQUEST['DIRECCION_CAR']) ? addslashes($_REQUEST['DIRECCION_CAR']) : '';
$sqlU = "UPDATE cat_carrera SET ID_PEDIDO= '$ID_PEDIDO', DESCRIPCION_CAR= '$DESCRIPCION_CAR', DISTANCIA_CAR= '$DISTANCIA_CAR', TIEMPOESPERAMIN_CAR= '$TIEMPOESPERAMIN_CAR', COSTO_CAR= '$COSTO_CAR', LATITUD_CAR= '$LATITUD_CAR', LONGITUD_CAR= '$LONGITUD_CAR', DIRECCION_CAR= '$DIRECCION_CAR' WHERE ID_CARRERA= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: cat_carrera.php');
exit;
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/cat_carrera_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$ID_PEDIDO = isset($_REQUEST['ID_PEDIDO']) ? addslashes($_REQUEST['ID_PEDIDO']) : '';
$DESCRIPCION_CAR = isset($_REQUEST['DESCRIPCION_CAR']) ? addslashes($_REQUEST['DESCRIPCION_CAR']) : '';
$DISTANCIA_CAR = isset($_REQUEST['DISTANCIA_CAR']) ? addslashes($_REQUEST['DISTANCIA_CAR']) : '';
$TIEMPOESPERAMIN_CAR = isset($_REQUEST['TIEMPOESPERAMIN_CAR']) ? addslashes($_REQUEST['TIEMPOESPERAMIN_CAR']) : '';
$COSTO_CAR = isset($_REQUEST['COSTO_CAR']) ? addslashes($_REQUEST['COSTO_CAR']) : '';
$LATITUD_CAR = isset($_REQUEST['LATITUD_CAR']) ? addslashes($_REQUEST['LATITUD_CAR']) : '';
$LONGITUD_CAR = isset($_REQUEST['LONGITUD_CAR']) ? addslashes($_REQUEST['LONGITUD_CAR']) : '';
$DIRECCION_CAR = isset($_REQUEST['DIRECCION_CAR']) ? addslashes($_REQUEST['DIRECCION_CAR']) : '';
$sqlI = "INSERT INTO cat_carrera (ID_PEDIDO, DESCRIPCION_CAR, DISTANCIA_CAR, TIEMPOESPERAMIN_CAR, COSTO_CAR, LATITUD_CAR, LONGITUD_CAR, DIRECCION_CAR) VALUES ('$ID_PEDIDO', '$DESCRIPCION_CAR', '$DISTANCIA_CAR', '$TIEMPOESPERAMIN_CAR', '$COSTO_CAR', '$LATITUD_CAR', '$LONGITUD_CAR', '$DIRECCION_CAR')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: cat_carrera.php');
exit;
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT ID_PEDIDO, DESCRIPCION_CAR, DISTANCIA_CAR, TIEMPOESPERAMIN_CAR, COSTO_CAR, LATITUD_CAR, LONGITUD_CAR, DIRECCION_CAR, ID_CARRERA FROM cat_carrera';
$pag = new Paginator($sqlL, 10);
$link1 = $pag->getCount('Item %d of %d - %d');
$link2 = $pag->getLinks(5);
$tempSql = $pag->getQuery();
$qryL = mysql_query($tempSql) or die('Error: ' . mysql_error());
$result = array();
while($qryLResult = mysql_fetch_assoc($qryL))
{
$result[] = $qryLResult;
}
include 'templates/cat_carrera_listing.php';
break;
}
?>
