<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['ID_CARRERA']) ? $_REQUEST['ID_CARRERA'] : '';
$sqlV = 'SELECT DESCRIPCION_CAR, DISTANCIA_CAR, TIEMPOESPERAMIN_CAR, COSTO_CAR, LATITUD_CAR, LONGITUD_CAR, DIRECCION_CAR, ID_CARRERA FROM cat_carrera WHERE ID_CARRERA="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/cat_carrera_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['ID_CARRERA']) ? $_REQUEST['ID_CARRERA'] : '';
$sqlE = 'SELECT DESCRIPCION_CAR, DISTANCIA_CAR, TIEMPOESPERAMIN_CAR, COSTO_CAR, LATITUD_CAR, LONGITUD_CAR, DIRECCION_CAR, ID_CARRERA FROM cat_carrera WHERE ID_CARRERA="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/cat_carrera_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['ID_CARRERA']) ? $_REQUEST['ID_CARRERA'] : '';
$sqlD = 'DELETE FROM cat_carrera WHERE ID_CARRERA="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: cat_carrera.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['ID_CARRERA']) ? $_REQUEST['ID_CARRERA'] : '';
$validator = new FormValidator();
$validator->addValidation("DESCRIPCION_CAR", "req", "Please enter DESCRIPCION_CAR");
$validator->addValidation("DISTANCIA_CAR", "req", "Please enter DISTANCIA_CAR");
$validator->addValidation("TIEMPOESPERAMIN_CAR", "req", "Please enter TIEMPOESPERAMIN_CAR");
$validator->addValidation("COSTO_CAR", "req", "Please enter COSTO_CAR");
$validator->addValidation("LATITUD_CAR", "req", "Please enter LATITUD_CAR");
$validator->addValidation("LONGITUD_CAR", "req", "Please enter LONGITUD_CAR");
$validator->addValidation("DIRECCION_CAR", "req", "Please enter DIRECCION_CAR");
if($validator->ValidateForm())
{
$DESCRIPCION_CAR = isset($_REQUEST['DESCRIPCION_CAR']) ? addslashes($_REQUEST['DESCRIPCION_CAR']) : '';
$DISTANCIA_CAR = isset($_REQUEST['DISTANCIA_CAR']) ? addslashes($_REQUEST['DISTANCIA_CAR']) : '';
$TIEMPOESPERAMIN_CAR = isset($_REQUEST['TIEMPOESPERAMIN_CAR']) ? addslashes($_REQUEST['TIEMPOESPERAMIN_CAR']) : '';
$COSTO_CAR = isset($_REQUEST['COSTO_CAR']) ? addslashes($_REQUEST['COSTO_CAR']) : '';
$LATITUD_CAR = isset($_REQUEST['LATITUD_CAR']) ? addslashes($_REQUEST['LATITUD_CAR']) : '';
$LONGITUD_CAR = isset($_REQUEST['LONGITUD_CAR']) ? addslashes($_REQUEST['LONGITUD_CAR']) : '';
$DIRECCION_CAR = isset($_REQUEST['DIRECCION_CAR']) ? addslashes($_REQUEST['DIRECCION_CAR']) : '';
$sqlU = "UPDATE cat_carrera SET DESCRIPCION_CAR= '$DESCRIPCION_CAR', DISTANCIA_CAR= '$DISTANCIA_CAR', TIEMPOESPERAMIN_CAR= '$TIEMPOESPERAMIN_CAR', COSTO_CAR= '$COSTO_CAR', LATITUD_CAR= '$LATITUD_CAR', LONGITUD_CAR= '$LONGITUD_CAR', DIRECCION_CAR= '$DIRECCION_CAR' WHERE ID_CARRERA= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: cat_carrera.php');
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
include 'templates/cat_carrera_edit.php';
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/cat_carrera_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$validator = new FormValidator();
$validator->addValidation("DESCRIPCION_CAR", "req", "Please enter DESCRIPCION_CAR");
$validator->addValidation("DISTANCIA_CAR", "req", "Please enter DISTANCIA_CAR");
$validator->addValidation("TIEMPOESPERAMIN_CAR", "req", "Please enter TIEMPOESPERAMIN_CAR");
$validator->addValidation("COSTO_CAR", "req", "Please enter COSTO_CAR");
$validator->addValidation("LATITUD_CAR", "req", "Please enter LATITUD_CAR");
$validator->addValidation("LONGITUD_CAR", "req", "Please enter LONGITUD_CAR");
$validator->addValidation("DIRECCION_CAR", "req", "Please enter DIRECCION_CAR");
if($validator->ValidateForm())
{
$DESCRIPCION_CAR = isset($_REQUEST['DESCRIPCION_CAR']) ? addslashes($_REQUEST['DESCRIPCION_CAR']) : '';
$DISTANCIA_CAR = isset($_REQUEST['DISTANCIA_CAR']) ? addslashes($_REQUEST['DISTANCIA_CAR']) : '';
$TIEMPOESPERAMIN_CAR = isset($_REQUEST['TIEMPOESPERAMIN_CAR']) ? addslashes($_REQUEST['TIEMPOESPERAMIN_CAR']) : '';
$COSTO_CAR = isset($_REQUEST['COSTO_CAR']) ? addslashes($_REQUEST['COSTO_CAR']) : '';
$LATITUD_CAR = isset($_REQUEST['LATITUD_CAR']) ? addslashes($_REQUEST['LATITUD_CAR']) : '';
$LONGITUD_CAR = isset($_REQUEST['LONGITUD_CAR']) ? addslashes($_REQUEST['LONGITUD_CAR']) : '';
$DIRECCION_CAR = isset($_REQUEST['DIRECCION_CAR']) ? addslashes($_REQUEST['DIRECCION_CAR']) : '';
$sqlI = "INSERT INTO cat_carrera (DESCRIPCION_CAR, DISTANCIA_CAR, TIEMPOESPERAMIN_CAR, COSTO_CAR, LATITUD_CAR, LONGITUD_CAR, DIRECCION_CAR) VALUES ('$DESCRIPCION_CAR', '$DISTANCIA_CAR', '$TIEMPOESPERAMIN_CAR', '$COSTO_CAR', '$LATITUD_CAR', '$LONGITUD_CAR', '$DIRECCION_CAR')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: cat_carrera.php');
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
include 'templates/cat_carrera_add.php';
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT DESCRIPCION_CAR, DISTANCIA_CAR, TIEMPOESPERAMIN_CAR, COSTO_CAR, LATITUD_CAR, LONGITUD_CAR, DIRECCION_CAR, ID_CARRERA FROM cat_carrera';
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
include 'templates/cat_carrera_listing.php';
break;
}
?>
