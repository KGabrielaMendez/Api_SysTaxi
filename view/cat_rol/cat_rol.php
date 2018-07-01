<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_ROL']) ? $_REQUEST['ID_ROL'] : '';
$sqlV = 'SELECT DESCRIPCION, ID_ROL FROM cat_rol WHERE ID_ROL="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_rol_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_ROL']) ? $_REQUEST['ID_ROL'] : '';
$sqlE = 'SELECT DESCRIPCION, ID_ROL FROM cat_rol WHERE ID_ROL="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/cat_rol_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['ID_ROL']) ? $_REQUEST['ID_ROL'] : '';
$sqlD = 'DELETE FROM cat_rol WHERE ID_ROL="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: cat_rol.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['ID_ROL']) ? $_REQUEST['ID_ROL'] : '';
$DESCRIPCION = isset($_REQUEST['DESCRIPCION']) ? addslashes($_REQUEST['DESCRIPCION']) : '';
$sqlU = "UPDATE cat_rol SET DESCRIPCION= '$DESCRIPCION' WHERE ID_ROL= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: cat_rol.php');
exit;
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/cat_rol_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$DESCRIPCION = isset($_REQUEST['DESCRIPCION']) ? addslashes($_REQUEST['DESCRIPCION']) : '';
$sqlI = "INSERT INTO cat_rol (DESCRIPCION) VALUES ('$DESCRIPCION')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: cat_rol.php');
exit;
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT DESCRIPCION, ID_ROL FROM cat_rol';
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
include 'templates/cat_rol_listing.php';
break;
}
?>
