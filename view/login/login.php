<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_LOG']) ? $_REQUEST['ID_LOG'] : '';
$sqlV = 'SELECT ID_ROL, USERNAME, ID_LOG FROM login WHERE ID_LOG="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/login_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_LOG']) ? $_REQUEST['ID_LOG'] : '';
$sqlE = 'SELECT ID_ROL, USERNAME, PASSWORD, ID_LOG FROM login WHERE ID_LOG="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/login_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['ID_LOG']) ? $_REQUEST['ID_LOG'] : '';
$sqlD = 'DELETE FROM login WHERE ID_LOG="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: login.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['ID_LOG']) ? $_REQUEST['ID_LOG'] : '';
$ID_ROL = isset($_REQUEST['ID_ROL']) ? addslashes($_REQUEST['ID_ROL']) : '';
$USERNAME = isset($_REQUEST['USERNAME']) ? addslashes($_REQUEST['USERNAME']) : '';
$PASSWORD = isset($_REQUEST['PASSWORD']) ? addslashes($_REQUEST['PASSWORD']) : '';
$sqlU = "UPDATE login SET ID_ROL= '$ID_ROL', USERNAME= '$USERNAME', PASSWORD= '$PASSWORD' WHERE ID_LOG= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: login.php');
exit;
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/login_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$ID_ROL = isset($_REQUEST['ID_ROL']) ? addslashes($_REQUEST['ID_ROL']) : '';
$USERNAME = isset($_REQUEST['USERNAME']) ? addslashes($_REQUEST['USERNAME']) : '';
$PASSWORD = isset($_REQUEST['PASSWORD']) ? addslashes($_REQUEST['PASSWORD']) : '';
$sqlI = "INSERT INTO login (ID_ROL, USERNAME, PASSWORD) VALUES ('$ID_ROL', '$USERNAME', '$PASSWORD')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: login.php');
exit;
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT ID_ROL, USERNAME, PASSWORD, ID_LOG FROM login';
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
include 'templates/login_listing.php';
break;
}
?>
