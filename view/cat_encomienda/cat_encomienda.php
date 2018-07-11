<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_ENCOMIENDA']) ? $_REQUEST['ID_ENCOMIENDA'] : '';
$sqlV = 'SELECT ID_US, IDCONDUCTOR, TIPO_ENCOMIENDA, DESCRIPCION_ENC, DISTANCIAMIN_ENC, TIEMPOESPERAMIN_ENC, COSTOENC_MAX_ENC, LATITUD_ORIG, LONGITUD_ORIG, LATITUD_DEST, LONGITUD_DEST, DIRECCION_ENC, FECHA_ENC, ID_ENCOMIENDA FROM cat_encomienda WHERE ID_ENCOMIENDA="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_encomienda_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_ENCOMIENDA']) ? $_REQUEST['ID_ENCOMIENDA'] : '';
$sqlE = 'SELECT ID_US, IDCONDUCTOR, TIPO_ENCOMIENDA, DESCRIPCION_ENC, DISTANCIAMIN_ENC, TIEMPOESPERAMIN_ENC, COSTOENC_MAX_ENC, LATITUD_ORIG, LONGITUD_ORIG, LATITUD_DEST, LONGITUD_DEST, DIRECCION_ENC, FECHA_ENC, ID_ENCOMIENDA FROM cat_encomienda WHERE ID_ENCOMIENDA="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/cat_encomienda_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['ID_ENCOMIENDA']) ? $_REQUEST['ID_ENCOMIENDA'] : '';
$sqlD = 'DELETE FROM cat_encomienda WHERE ID_ENCOMIENDA="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: cat_encomienda.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['ID_ENCOMIENDA']) ? $_REQUEST['ID_ENCOMIENDA'] : '';
$ID_US = isset($_REQUEST['ID_US']) ? addslashes($_REQUEST['ID_US']) : '';
$IDCONDUCTOR = isset($_REQUEST['IDCONDUCTOR']) ? addslashes($_REQUEST['IDCONDUCTOR']) : '';
$TIPO_ENCOMIENDA = isset($_REQUEST['TIPO_ENCOMIENDA']) ? addslashes($_REQUEST['TIPO_ENCOMIENDA']) : '';
$DESCRIPCION_ENC = isset($_REQUEST['DESCRIPCION_ENC']) ? addslashes($_REQUEST['DESCRIPCION_ENC']) : '';
$DISTANCIAMIN_ENC = isset($_REQUEST['DISTANCIAMIN_ENC']) ? addslashes($_REQUEST['DISTANCIAMIN_ENC']) : '';
$TIEMPOESPERAMIN_ENC = isset($_REQUEST['TIEMPOESPERAMIN_ENC']) ? addslashes($_REQUEST['TIEMPOESPERAMIN_ENC']) : '';
$COSTOENC_MAX_ENC = isset($_REQUEST['COSTOENC_MAX_ENC']) ? addslashes($_REQUEST['COSTOENC_MAX_ENC']) : '';
$LATITUD_ORIG = isset($_REQUEST['LATITUD_ORIG']) ? addslashes($_REQUEST['LATITUD_ORIG']) : '';
$LONGITUD_ORIG = isset($_REQUEST['LONGITUD_ORIG']) ? addslashes($_REQUEST['LONGITUD_ORIG']) : '';
$LATITUD_DEST = isset($_REQUEST['LATITUD_DEST']) ? addslashes($_REQUEST['LATITUD_DEST']) : '';
$LONGITUD_DEST = isset($_REQUEST['LONGITUD_DEST']) ? addslashes($_REQUEST['LONGITUD_DEST']) : '';
$DIRECCION_ENC = isset($_REQUEST['DIRECCION_ENC']) ? addslashes($_REQUEST['DIRECCION_ENC']) : '';
$FECHA_ENC = isset($_REQUEST['FECHA_ENC']) ? addslashes($_REQUEST['FECHA_ENC']) : '';
$sqlU = "UPDATE cat_encomienda SET ID_US= '$ID_US', IDCONDUCTOR= '$IDCONDUCTOR', TIPO_ENCOMIENDA= '$TIPO_ENCOMIENDA', DESCRIPCION_ENC= '$DESCRIPCION_ENC', DISTANCIAMIN_ENC= '$DISTANCIAMIN_ENC', TIEMPOESPERAMIN_ENC= '$TIEMPOESPERAMIN_ENC', COSTOENC_MAX_ENC= '$COSTOENC_MAX_ENC', LATITUD_ORIG= '$LATITUD_ORIG', LONGITUD_ORIG= '$LONGITUD_ORIG', LATITUD_DEST= '$LATITUD_DEST', LONGITUD_DEST= '$LONGITUD_DEST', DIRECCION_ENC= '$DIRECCION_ENC', FECHA_ENC= '$FECHA_ENC' WHERE ID_ENCOMIENDA= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: cat_encomienda.php');
exit;
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/cat_encomienda_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$ID_US = $_SESSION['idUS'];
$TIPO_ENCOMIENDA = isset($_REQUEST['TIPO_ENCOMIENDA']) ? addslashes($_REQUEST['TIPO_ENCOMIENDA']) : '';
$DESCRIPCION_ENC = isset($_REQUEST['DESCRIPCION_ENC']) ? addslashes($_REQUEST['DESCRIPCION_ENC']) : '';
$DISTANCIAMIN_ENC = isset($_REQUEST['DISTANCIAMIN_ENC']) ? addslashes($_REQUEST['DISTANCIAMIN_ENC']) : '';
$TIEMPOESPERAMIN_ENC = isset($_REQUEST['TIEMPOESPERAMIN_ENC']) ? addslashes($_REQUEST['TIEMPOESPERAMIN_ENC']) : '';
$COSTOENC_MAX_ENC = rand(1,5).".".rand(0, 99);
$LATITUD_ORIG = isset($_REQUEST['LATITUD_ORIG']) ? addslashes($_REQUEST['LATITUD_ORIG']) : '';
$LONGITUD_ORIG = isset($_REQUEST['LONGITUD_ORIG']) ? addslashes($_REQUEST['LONGITUD_ORIG']) : '';
$LATITUD_DEST = isset($_REQUEST['LATITUD_DEST']) ? addslashes($_REQUEST['LATITUD_DEST']) : '';
$LONGITUD_DEST = isset($_REQUEST['LONGITUD_DEST']) ? addslashes($_REQUEST['LONGITUD_DEST']) : '';
$DIRECCION_ENC = isset($_REQUEST['DIRECCION_ENC']) ? addslashes($_REQUEST['DIRECCION_ENC']) : '';
$sqlI = "INSERT INTO cat_encomienda (ID_US,DESCRIPCION_ENC, DISTANCIAMIN_ENC, TIEMPOESPERAMIN_ENC, COSTOENC_MAX_ENC, LATITUD_ORIG, LONGITUD_ORIG, LATITUD_DEST, LONGITUD_DEST, DIRECCION_ENC) VALUES ('$ID_US','$DESCRIPCION_ENC', '$DISTANCIAMIN_ENC', '$TIEMPOESPERAMIN_ENC', '$COSTOENC_MAX_ENC', '$LATITUD_ORIG', '$LONGITUD_ORIG', '$LATITUD_DEST', '$LONGITUD_DEST', '$DIRECCION_ENC')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: cat_encomienda.php');
exit;
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT ID_US, IDCONDUCTOR, TIPO_ENCOMIENDA, DESCRIPCION_ENC, DISTANCIAMIN_ENC, TIEMPOESPERAMIN_ENC, COSTOENC_MAX_ENC, LATITUD_ORIG, LONGITUD_ORIG, LATITUD_DEST, LONGITUD_DEST, DIRECCION_ENC, FECHA_ENC, ID_ENCOMIENDA FROM cat_encomienda';
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
include 'templates/cat_encomienda_listing.php';
break;
}
?>
