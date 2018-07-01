<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['IDCONDUCTOR']) ? $_REQUEST['IDCONDUCTOR'] : '';
$sqlV = 'SELECT ID_US, ID_UNI, IDCONDUCTOR FROM conductor WHERE IDCONDUCTOR="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/conductor_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['IDCONDUCTOR']) ? $_REQUEST['IDCONDUCTOR'] : '';
$sqlE = 'SELECT ID_US, ID_UNI, IDCONDUCTOR FROM conductor WHERE IDCONDUCTOR="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/conductor_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['IDCONDUCTOR']) ? $_REQUEST['IDCONDUCTOR'] : '';
$sqlD = 'DELETE FROM conductor WHERE IDCONDUCTOR="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: conductor.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['IDCONDUCTOR']) ? $_REQUEST['IDCONDUCTOR'] : '';
$validator = new FormValidator();
$validator->addValidation("ID_US", "req", "Please enter ID_US");
$validator->addValidation("ID_UNI", "req", "Please enter ID_UNI");
if($validator->ValidateForm())
{
$ID_US = isset($_REQUEST['ID_US']) ? addslashes($_REQUEST['ID_US']) : '';
$ID_UNI = isset($_REQUEST['ID_UNI']) ? addslashes($_REQUEST['ID_UNI']) : '';
$sqlU = "UPDATE conductor SET ID_US= '$ID_US', ID_UNI= '$ID_UNI' WHERE IDCONDUCTOR= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: conductor.php');
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
include 'templates/conductor_edit.php';
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/conductor_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$validator = new FormValidator();
$validator->addValidation("ID_US", "req", "Please enter ID_US");
$validator->addValidation("ID_UNI", "req", "Please enter ID_UNI");
if($validator->ValidateForm())
{
$ID_US = isset($_REQUEST['ID_US']) ? addslashes($_REQUEST['ID_US']) : '';
$ID_UNI = isset($_REQUEST['ID_UNI']) ? addslashes($_REQUEST['ID_UNI']) : '';
$sqlI = "INSERT INTO conductor (ID_US, ID_UNI) VALUES ('$ID_US', '$ID_UNI')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: conductor.php');
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
include 'templates/conductor_add.php';
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT ID_US, ID_UNI, IDCONDUCTOR FROM conductor';
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
include 'templates/conductor_listing.php';
break;
}
?>
