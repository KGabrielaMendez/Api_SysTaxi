<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_US']) ? $_REQUEST['ID_US'] : '';
$sqlV = 'SELECT ID_LOG, NOMBRE_US, APELLIDO_US, FECHANAC_US, CIUDAD_US, TELEFONO_US, GENERO_US, DIRECCION_US, FECHAREGISTRO_US, EMAIL_US, ID_US FROM cat_usuarios WHERE ID_US="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_usuarios_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_US']) ? $_REQUEST['ID_US'] : '';
$sqlE = 'SELECT ID_LOG, NOMBRE_US, APELLIDO_US, FECHANAC_US, CIUDAD_US, TELEFONO_US, GENERO_US, DIRECCION_US, FECHAREGISTRO_US, EMAIL_US, ID_US FROM cat_usuarios WHERE ID_US="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/cat_usuarios_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['ID_US']) ? $_REQUEST['ID_US'] : '';
$sqlD = 'DELETE FROM cat_usuarios WHERE ID_US="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: cat_usuarios.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['ID_US']) ? $_REQUEST['ID_US'] : '';
$ID_LOG = isset($_REQUEST['ID_LOG']) ? addslashes($_REQUEST['ID_LOG']) : '';
$NOMBRE_US = isset($_REQUEST['NOMBRE_US']) ? addslashes($_REQUEST['NOMBRE_US']) : '';
$APELLIDO_US = isset($_REQUEST['APELLIDO_US']) ? addslashes($_REQUEST['APELLIDO_US']) : '';
$FECHANAC_US = isset($_REQUEST['FECHANAC_US']) ? addslashes($_REQUEST['FECHANAC_US']) : '';
$CIUDAD_US = isset($_REQUEST['CIUDAD_US']) ? addslashes($_REQUEST['CIUDAD_US']) : '';
$TELEFONO_US = isset($_REQUEST['TELEFONO_US']) ? addslashes($_REQUEST['TELEFONO_US']) : '';
$GENERO_US = isset($_REQUEST['GENERO_US']) ? addslashes($_REQUEST['GENERO_US']) : '';
$DIRECCION_US = isset($_REQUEST['DIRECCION_US']) ? addslashes($_REQUEST['DIRECCION_US']) : '';
$FECHAREGISTRO_US = isset($_REQUEST['FECHAREGISTRO_US']) ? addslashes($_REQUEST['FECHAREGISTRO_US']) : '';
$EMAIL_US = isset($_REQUEST['EMAIL_US']) ? addslashes($_REQUEST['EMAIL_US']) : '';
$sqlU = "UPDATE cat_usuarios SET ID_LOG= '$ID_LOG', NOMBRE_US= '$NOMBRE_US', APELLIDO_US= '$APELLIDO_US', FECHANAC_US= '$FECHANAC_US', CIUDAD_US= '$CIUDAD_US', TELEFONO_US= '$TELEFONO_US', GENERO_US= '$GENERO_US', DIRECCION_US= '$DIRECCION_US', FECHAREGISTRO_US= '$FECHAREGISTRO_US', EMAIL_US= '$EMAIL_US' WHERE ID_US= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: cat_usuarios.php');
exit;
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/cat_usuarios_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$ID_LOG = isset($_REQUEST['ID_LOG']) ? addslashes($_REQUEST['ID_LOG']) : '';
$NOMBRE_US = isset($_REQUEST['NOMBRE_US']) ? addslashes($_REQUEST['NOMBRE_US']) : '';
$APELLIDO_US = isset($_REQUEST['APELLIDO_US']) ? addslashes($_REQUEST['APELLIDO_US']) : '';
$FECHANAC_US = isset($_REQUEST['FECHANAC_US']) ? addslashes($_REQUEST['FECHANAC_US']) : '';
$CIUDAD_US = isset($_REQUEST['CIUDAD_US']) ? addslashes($_REQUEST['CIUDAD_US']) : '';
$TELEFONO_US = isset($_REQUEST['TELEFONO_US']) ? addslashes($_REQUEST['TELEFONO_US']) : '';
$GENERO_US = isset($_REQUEST['GENERO_US']) ? addslashes($_REQUEST['GENERO_US']) : '';
$DIRECCION_US = isset($_REQUEST['DIRECCION_US']) ? addslashes($_REQUEST['DIRECCION_US']) : '';
$FECHAREGISTRO_US = isset($_REQUEST['FECHAREGISTRO_US']) ? addslashes($_REQUEST['FECHAREGISTRO_US']) : '';
$EMAIL_US = isset($_REQUEST['EMAIL_US']) ? addslashes($_REQUEST['EMAIL_US']) : '';
$sqlI = "INSERT INTO cat_usuarios (ID_LOG, NOMBRE_US, APELLIDO_US, FECHANAC_US, CIUDAD_US, TELEFONO_US, GENERO_US, DIRECCION_US, FECHAREGISTRO_US, EMAIL_US) VALUES ('$ID_LOG', '$NOMBRE_US', '$APELLIDO_US', '$FECHANAC_US', '$CIUDAD_US', '$TELEFONO_US', '$GENERO_US', '$DIRECCION_US', '$FECHAREGISTRO_US', '$EMAIL_US')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: cat_usuarios.php');
exit;
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT u.ID_LOG, NOMBRE_US, APELLIDO_US, FECHANAC_US, CIUDAD_US, TELEFONO_US, GENERO_US, DIRECCION_US, FECHAREGISTRO_US, EMAIL_US, ID_US FROM cat_usuarios u, login l WHERE l.ID_ROL =2 AND l.ID_LOG=u.ID_LOG';
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
include 'templates/cat_usuarios_listing.php';
break;
}
?>
