<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_ENCOMIENDA']) ? $_REQUEST['ID_ENCOMIENDA'] : '';
$sqlV = 'SELECT IDTIPOENCOM, DESCRIPCION_ENC, DISTANCIAMIN_ENC, TIEMPOESPERAMIN_ENC, PESOMAXKG_ENC, COSTOENC_MAX_ENC, LATITUD_ENC, LONGITUD_ENC, DIRECCION_ENC, ID_ENCOMIENDA FROM cat_encomienda WHERE ID_ENCOMIENDA="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_encomienda_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_ENCOMIENDA']) ? $_REQUEST['ID_ENCOMIENDA'] : '';
$sqlE = 'SELECT IDTIPOENCOM, DESCRIPCION_ENC, DISTANCIAMIN_ENC, TIEMPOESPERAMIN_ENC, PESOMAXKG_ENC, COSTOENC_MAX_ENC, LATITUD_ENC, LONGITUD_ENC, DIRECCION_ENC, ID_ENCOMIENDA FROM cat_encomienda WHERE ID_ENCOMIENDA="'.$id.'"';
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
$IDTIPOENCOM = isset($_REQUEST['IDTIPOENCOM']) ? addslashes($_REQUEST['IDTIPOENCOM']) : '';
$DESCRIPCION_ENC = isset($_REQUEST['DESCRIPCION_ENC']) ? addslashes($_REQUEST['DESCRIPCION_ENC']) : '';
$DISTANCIAMIN_ENC = isset($_REQUEST['DISTANCIAMIN_ENC']) ? addslashes($_REQUEST['DISTANCIAMIN_ENC']) : '';
$TIEMPOESPERAMIN_ENC = isset($_REQUEST['TIEMPOESPERAMIN_ENC']) ? addslashes($_REQUEST['TIEMPOESPERAMIN_ENC']) : '';
$PESOMAXKG_ENC = isset($_REQUEST['PESOMAXKG_ENC']) ? addslashes($_REQUEST['PESOMAXKG_ENC']) : '';
$COSTOENC_MAX_ENC = isset($_REQUEST['COSTOENC_MAX_ENC']) ? addslashes($_REQUEST['COSTOENC_MAX_ENC']) : '';
$LATITUD_ENC = isset($_REQUEST['LATITUD_ENC']) ? addslashes($_REQUEST['LATITUD_ENC']) : '';
$LONGITUD_ENC = isset($_REQUEST['LONGITUD_ENC']) ? addslashes($_REQUEST['LONGITUD_ENC']) : '';
$DIRECCION_ENC = isset($_REQUEST['DIRECCION_ENC']) ? addslashes($_REQUEST['DIRECCION_ENC']) : '';
$sqlU = "UPDATE cat_encomienda SET IDTIPOENCOM= '$IDTIPOENCOM', DESCRIPCION_ENC= '$DESCRIPCION_ENC', DISTANCIAMIN_ENC= '$DISTANCIAMIN_ENC', TIEMPOESPERAMIN_ENC= '$TIEMPOESPERAMIN_ENC', PESOMAXKG_ENC= '$PESOMAXKG_ENC', COSTOENC_MAX_ENC= '$COSTOENC_MAX_ENC', LATITUD_ENC= '$LATITUD_ENC', LONGITUD_ENC= '$LONGITUD_ENC', DIRECCION_ENC= '$DIRECCION_ENC' WHERE ID_ENCOMIENDA= '$id'";
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
$IDTIPOENCOM = isset($_REQUEST['IDTIPOENCOM']) ? addslashes($_REQUEST['IDTIPOENCOM']) : '';
$DESCRIPCION_ENC = isset($_REQUEST['DESCRIPCION_ENC']) ? addslashes($_REQUEST['DESCRIPCION_ENC']) : '';
$DISTANCIAMIN_ENC = isset($_REQUEST['DISTANCIAMIN_ENC']) ? addslashes($_REQUEST['DISTANCIAMIN_ENC']) : '';
$TIEMPOESPERAMIN_ENC = isset($_REQUEST['TIEMPOESPERAMIN_ENC']) ? addslashes($_REQUEST['TIEMPOESPERAMIN_ENC']) : '';
$PESOMAXKG_ENC = isset($_REQUEST['PESOMAXKG_ENC']) ? addslashes($_REQUEST['PESOMAXKG_ENC']) : '';
$COSTOENC_MAX_ENC = isset($_REQUEST['COSTOENC_MAX_ENC']) ? addslashes($_REQUEST['COSTOENC_MAX_ENC']) : '';
$LATITUD_ENC = isset($_REQUEST['LATITUD_ENC']) ? addslashes($_REQUEST['LATITUD_ENC']) : '';
$LONGITUD_ENC = isset($_REQUEST['LONGITUD_ENC']) ? addslashes($_REQUEST['LONGITUD_ENC']) : '';
$DIRECCION_ENC = isset($_REQUEST['DIRECCION_ENC']) ? addslashes($_REQUEST['DIRECCION_ENC']) : '';
$sqlI = "INSERT INTO cat_encomienda (IDTIPOENCOM, DESCRIPCION_ENC, DISTANCIAMIN_ENC, TIEMPOESPERAMIN_ENC, PESOMAXKG_ENC, COSTOENC_MAX_ENC, LATITUD_ENC, LONGITUD_ENC, DIRECCION_ENC) VALUES ('$IDTIPOENCOM', '$DESCRIPCION_ENC', '$DISTANCIAMIN_ENC', '$TIEMPOESPERAMIN_ENC', '$PESOMAXKG_ENC', '$COSTOENC_MAX_ENC', '$LATITUD_ENC', '$LONGITUD_ENC', '$DIRECCION_ENC')";
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
$sqlL = 'SELECT IDTIPOENCOM, DESCRIPCION_ENC, DISTANCIAMIN_ENC, TIEMPOESPERAMIN_ENC, PESOMAXKG_ENC, COSTOENC_MAX_ENC, LATITUD_ENC, LONGITUD_ENC, DIRECCION_ENC, ID_ENCOMIENDA FROM cat_encomienda';
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
