<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_ENCOMIENDA']) ? $_REQUEST['ID_ENCOMIENDA'] : '';
$sqlV = 'SELECT  *  FROM cat_encomienda WHERE ID_ENCOMIENDA="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_encomienda_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_ENCOMIENDA']) ? $_REQUEST['ID_ENCOMIENDA'] : '';
$sqlE = 'SELECT  *  FROM cat_encomienda WHERE ID_ENCOMIENDA="'.$id.'"';
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
$sqlU = "UPDATE cat_encomienda SET  WHERE ID_ENCOMIENDA= '$id'";
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
$sqlI = "INSERT INTO cat_encomienda () VALUES ()";
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
$sqlL = 'SELECT e.ID_US, u.NOMBRE_US,IDCONDUCTOR, TIPO_ENCOMIENDA, DESCRIPCION_ENC, DISTANCIAMIN_ENC, TIEMPOESPERAMIN_ENC, COSTOENC_MAX_ENC, LATITUD_ORIG, LONGITUD_ORIG, LATITUD_DEST, LONGITUD_DEST, DIRECCION_ENC, FECHA_ENC, ID_ENCOMIENDA FROM cat_encomienda e, cat_usuarios u where e.ID_US=u.ID_US';
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
