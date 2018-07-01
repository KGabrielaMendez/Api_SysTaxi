<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_COOP']) ? $_REQUEST['ID_COOP'] : '';
$sqlV = 'SELECT NOMBRE_COOP, CIUDAD_COOP, PAIS_COOP, NUNIDADES_COOP, FECHAREGISTRO_COOP, ID_COOP FROM cat_cooperativas WHERE ID_COOP="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_cooperativas_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_COOP']) ? $_REQUEST['ID_COOP'] : '';
$sqlE = 'SELECT NOMBRE_COOP, CIUDAD_COOP, PAIS_COOP, NUNIDADES_COOP, FECHAREGISTRO_COOP, ID_COOP FROM cat_cooperativas WHERE ID_COOP="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/cat_cooperativas_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['ID_COOP']) ? $_REQUEST['ID_COOP'] : '';
$sqlD = 'DELETE FROM cat_cooperativas WHERE ID_COOP="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: cat_cooperativas.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['ID_COOP']) ? $_REQUEST['ID_COOP'] : '';
$NOMBRE_COOP = isset($_REQUEST['NOMBRE_COOP']) ? addslashes($_REQUEST['NOMBRE_COOP']) : '';
$CIUDAD_COOP = isset($_REQUEST['CIUDAD_COOP']) ? addslashes($_REQUEST['CIUDAD_COOP']) : '';
$PAIS_COOP = isset($_REQUEST['PAIS_COOP']) ? addslashes($_REQUEST['PAIS_COOP']) : '';
$NUNIDADES_COOP = isset($_REQUEST['NUNIDADES_COOP']) ? addslashes($_REQUEST['NUNIDADES_COOP']) : '';
$FECHAREGISTRO_COOP = isset($_REQUEST['FECHAREGISTRO_COOP']) ? addslashes($_REQUEST['FECHAREGISTRO_COOP']) : '';
$sqlU = "UPDATE cat_cooperativas SET NOMBRE_COOP= '$NOMBRE_COOP', CIUDAD_COOP= '$CIUDAD_COOP', PAIS_COOP= '$PAIS_COOP', NUNIDADES_COOP= '$NUNIDADES_COOP', FECHAREGISTRO_COOP= '$FECHAREGISTRO_COOP' WHERE ID_COOP= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: cat_cooperativas.php');
exit;
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/cat_cooperativas_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$NOMBRE_COOP = isset($_REQUEST['NOMBRE_COOP']) ? addslashes($_REQUEST['NOMBRE_COOP']) : '';
$CIUDAD_COOP = isset($_REQUEST['CIUDAD_COOP']) ? addslashes($_REQUEST['CIUDAD_COOP']) : '';
$PAIS_COOP = isset($_REQUEST['PAIS_COOP']) ? addslashes($_REQUEST['PAIS_COOP']) : '';
$NUNIDADES_COOP = isset($_REQUEST['NUNIDADES_COOP']) ? addslashes($_REQUEST['NUNIDADES_COOP']) : '';
$FECHAREGISTRO_COOP = isset($_REQUEST['FECHAREGISTRO_COOP']) ? addslashes($_REQUEST['FECHAREGISTRO_COOP']) : '';
$sqlI = "INSERT INTO cat_cooperativas (NOMBRE_COOP, CIUDAD_COOP, PAIS_COOP, NUNIDADES_COOP, FECHAREGISTRO_COOP) VALUES ('$NOMBRE_COOP', '$CIUDAD_COOP', '$PAIS_COOP', '$NUNIDADES_COOP', '$FECHAREGISTRO_COOP')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: cat_cooperativas.php');
exit;
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT NOMBRE_COOP, CIUDAD_COOP, PAIS_COOP, NUNIDADES_COOP, FECHAREGISTRO_COOP, ID_COOP FROM cat_cooperativas';
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
include 'templates/cat_cooperativas_listing.php';
break;
}
?>
