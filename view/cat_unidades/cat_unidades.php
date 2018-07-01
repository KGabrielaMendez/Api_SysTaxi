<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_UNI']) ? $_REQUEST['ID_UNI'] : '';
$sqlV = 'SELECT co.NOMBRE_COOP, PLACA_UNI, TIPO_UNI, MARCA_UNI, MODELO_UNI, ANIO_UNI, NUMERO_UNI, ID_UNI FROM cat_unidades u, cat_cooperativas co WHERE ID_UNI="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_unidades_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_UNI']) ? $_REQUEST['ID_UNI'] : '';
$sqlE = 'SELECT co.NOMBRE_COOP, PLACA_UNI, TIPO_UNI, MARCA_UNI, MODELO_UNI, ANIO_UNI, NUMERO_UNI, ID_UNI FROM cat_unidades u, cat_cooperativas co WHERE ID_UNI="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/cat_unidades_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['ID_UNI']) ? $_REQUEST['ID_UNI'] : '';
$sqlD = 'DELETE FROM cat_unidades WHERE ID_UNI="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: cat_unidades.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['ID_UNI']) ? $_REQUEST['ID_UNI'] : '';
$validator = new FormValidator();
$validator->addValidation("ID_COOP", "req", "Please enter ID_COOP");
$validator->addValidation("PLACA_UNI", "req", "Please enter PLACA_UNI");
$validator->addValidation("TIPO_UNI", "req", "Please enter TIPO_UNI");
$validator->addValidation("MARCA_UNI", "req", "Please enter MARCA_UNI");
$validator->addValidation("MODELO_UNI", "req", "Please enter MODELO_UNI");
$validator->addValidation("ANIO_UNI", "req", "Please enter ANIO_UNI");
$validator->addValidation("NUMERO_UNI", "req", "Please enter NUMERO_UNI");
if($validator->ValidateForm())
{
$ID_COOP = isset($_REQUEST['ID_COOP']) ? addslashes($_REQUEST['ID_COOP']) : '';
$PLACA_UNI = isset($_REQUEST['PLACA_UNI']) ? addslashes($_REQUEST['PLACA_UNI']) : '';
$TIPO_UNI = isset($_REQUEST['TIPO_UNI']) ? addslashes($_REQUEST['TIPO_UNI']) : '';
$MARCA_UNI = isset($_REQUEST['MARCA_UNI']) ? addslashes($_REQUEST['MARCA_UNI']) : '';
$MODELO_UNI = isset($_REQUEST['MODELO_UNI']) ? addslashes($_REQUEST['MODELO_UNI']) : '';
$ANIO_UNI = isset($_REQUEST['ANIO_UNI']) ? addslashes($_REQUEST['ANIO_UNI']) : '';
$NUMERO_UNI = isset($_REQUEST['NUMERO_UNI']) ? addslashes($_REQUEST['NUMERO_UNI']) : '';
$sqlU = "UPDATE cat_unidades SET ID_COOP= '$ID_COOP', PLACA_UNI= '$PLACA_UNI', TIPO_UNI= '$TIPO_UNI', MARCA_UNI= '$MARCA_UNI', MODELO_UNI= '$MODELO_UNI', ANIO_UNI= '$ANIO_UNI', NUMERO_UNI= '$NUMERO_UNI' WHERE ID_UNI= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: cat_unidades.php');
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
include 'templates/cat_unidades_edit.php';
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/cat_unidades_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$validator = new FormValidator();
$validator->addValidation("ID_COOP", "req", "Please enter ID_COOP");
$validator->addValidation("PLACA_UNI", "req", "Please enter PLACA_UNI");
$validator->addValidation("TIPO_UNI", "req", "Please enter TIPO_UNI");
$validator->addValidation("MARCA_UNI", "req", "Please enter MARCA_UNI");
$validator->addValidation("MODELO_UNI", "req", "Please enter MODELO_UNI");
$validator->addValidation("ANIO_UNI", "req", "Please enter ANIO_UNI");
$validator->addValidation("NUMERO_UNI", "req", "Please enter NUMERO_UNI");
if($validator->ValidateForm())
{
$ID_COOP = isset($_REQUEST['ID_COOP']) ? addslashes($_REQUEST['ID_COOP']) : '';
$PLACA_UNI = isset($_REQUEST['PLACA_UNI']) ? addslashes($_REQUEST['PLACA_UNI']) : '';
$TIPO_UNI = isset($_REQUEST['TIPO_UNI']) ? addslashes($_REQUEST['TIPO_UNI']) : '';
$MARCA_UNI = isset($_REQUEST['MARCA_UNI']) ? addslashes($_REQUEST['MARCA_UNI']) : '';
$MODELO_UNI = isset($_REQUEST['MODELO_UNI']) ? addslashes($_REQUEST['MODELO_UNI']) : '';
$ANIO_UNI = isset($_REQUEST['ANIO_UNI']) ? addslashes($_REQUEST['ANIO_UNI']) : '';
$NUMERO_UNI = isset($_REQUEST['NUMERO_UNI']) ? addslashes($_REQUEST['NUMERO_UNI']) : '';
$sqlI = "INSERT INTO cat_unidades (ID_COOP, PLACA_UNI, TIPO_UNI, MARCA_UNI, MODELO_UNI, ANIO_UNI, NUMERO_UNI) VALUES ('$ID_COOP', '$PLACA_UNI', '$TIPO_UNI', '$MARCA_UNI', '$MODELO_UNI', '$ANIO_UNI', '$NUMERO_UNI')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: cat_unidades.php');
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
include 'templates/cat_unidades_add.php';
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT co.NOMBRE_COOP, PLACA_UNI, TIPO_UNI, MARCA_UNI, MODELO_UNI, ANIO_UNI, NUMERO_UNI, ID_UNI FROM cat_unidades u, cat_cooperativas co';
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
include 'templates/cat_unidades_listing.php';
break;
}
?>
