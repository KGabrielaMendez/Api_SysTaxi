<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_PEDIDO']) ? $_REQUEST['ID_PEDIDO'] : '';
$sqlV = 'SELECT ID_ENCOMIENDA, ID_CARRERA, IDCONDUCTOR, ID_US, FECHA, ID_PEDIDO FROM cat_pedidos WHERE ID_PEDIDO="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_pedidos_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_PEDIDO']) ? $_REQUEST['ID_PEDIDO'] : '';
$sqlE = 'SELECT ID_ENCOMIENDA, ID_CARRERA, IDCONDUCTOR, ID_US, FECHA, ID_PEDIDO FROM cat_pedidos WHERE ID_PEDIDO="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/cat_pedidos_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['ID_PEDIDO']) ? $_REQUEST['ID_PEDIDO'] : '';
$sqlD = 'DELETE FROM cat_pedidos WHERE ID_PEDIDO="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: cat_pedidos.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['ID_PEDIDO']) ? $_REQUEST['ID_PEDIDO'] : '';
$validator = new FormValidator();
$validator->addValidation("FECHA", "req", "Please enter FECHA");
if($validator->ValidateForm())
{
$ID_ENCOMIENDA = isset($_REQUEST['ID_ENCOMIENDA']) ? addslashes($_REQUEST['ID_ENCOMIENDA']) : '';
$ID_CARRERA = isset($_REQUEST['ID_CARRERA']) ? addslashes($_REQUEST['ID_CARRERA']) : '';
$IDCONDUCTOR = isset($_REQUEST['IDCONDUCTOR']) ? addslashes($_REQUEST['IDCONDUCTOR']) : '';
$ID_US = isset($_REQUEST['ID_US']) ? addslashes($_REQUEST['ID_US']) : '';
$FECHA = isset($_REQUEST['FECHA']) ? addslashes($_REQUEST['FECHA']) : '';
$sqlU = "UPDATE cat_pedidos SET ID_ENCOMIENDA= '$ID_ENCOMIENDA', ID_CARRERA= '$ID_CARRERA', IDCONDUCTOR= '$IDCONDUCTOR', ID_US= '$ID_US', FECHA= '$FECHA' WHERE ID_PEDIDO= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: cat_pedidos.php');
exit;
}
else
{
$error_hash = $validator->GetErrors();
foreach($error_hash as $inpname => $inp_err)
{
$msg =  "$inp_err";
break;
}
@extract($_REQUEST);
}
include 'templates/cat_pedidos_edit.php';
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/cat_pedidos_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$validator = new FormValidator();
$validator->addValidation("FECHA", "req", "Please enter FECHA");
if($validator->ValidateForm())
{
$ID_ENCOMIENDA = isset($_REQUEST['ID_ENCOMIENDA']) ? addslashes($_REQUEST['ID_ENCOMIENDA']) : '';
$ID_CARRERA = isset($_REQUEST['ID_CARRERA']) ? addslashes($_REQUEST['ID_CARRERA']) : '';
$IDCONDUCTOR = isset($_REQUEST['IDCONDUCTOR']) ? addslashes($_REQUEST['IDCONDUCTOR']) : '';
$ID_US = isset($_REQUEST['ID_US']) ? addslashes($_REQUEST['ID_US']) : '';
$FECHA = isset($_REQUEST['FECHA']) ? addslashes($_REQUEST['FECHA']) : '';
$sqlI = "INSERT INTO cat_pedidos (ID_ENCOMIENDA, ID_CARRERA, IDCONDUCTOR, ID_US, FECHA) VALUES ('$ID_ENCOMIENDA', '$ID_CARRERA', '$IDCONDUCTOR', '$ID_US', '$FECHA')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: cat_pedidos.php');
exit;
}
else
{
$error_hash = $validator->GetErrors();
foreach($error_hash as $inpname => $inp_err)
{
$msg =  "$inp_err";
break;
}
}
include 'templates/cat_pedidos_add.php';
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT ID_ENCOMIENDA, ID_CARRERA, IDCONDUCTOR, ID_US, FECHA, ID_PEDIDO FROM cat_pedidos';
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
include 'templates/cat_pedidos_listing.php';
break;
}
?>
