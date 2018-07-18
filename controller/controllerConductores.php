<?php

require_once '../model/ModelConductores.php';
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$mconductores = new ModelConductores();
$opcion = $_REQUEST['opcion'];
switch ($opcion) {
    case "perfil":
        header('Location: ../view/conductor/conductor.php');
        break;

    case "qsomos":
        header('Location: ../view/infoQuienSomos.php');
        break;

    case "notificaciones":
        //obtenemos la lista de facturas:
        $listado = $mconductores->getEcomiendas();
        $listadoC = $mconductores->getCarreras();
        echo print_r($listadoC);
        //y los guardamos en sesion:
        $_SESSION['listado'] = serialize($listado);
        $_SESSION['listadoC'] = serialize($listadoC);
        //redireccionamos a la pagina index para visualizar:
        header('Location: ../view/conductor/notificaciones.php');
        break;

    case "aceptarE":
        $usuname = $_SESSION['username'];
        $id = $_GET['id'];
        $_SESSION['encomienda'] = $id;
        $idconductor = $mconductores->obtenerID($usuname);
        $mconductores->ModificarPedidoE($id, $idconductor);

        //redireccionamos a la pagina index para visualizar:
        header('Location: ../view/conductor/transaccionFinal.php');
        break;

    case "aceptarC":
        $usuname = $_SESSION['username'];
        $id = $_GET['id'];
        $idconductor = $mconductores->obtenerID($usuname);
        $mconductores->ModificarPedidoC($id, $idconductor);
        //redireccionamos a la pagina index para visualizar:
        header('Location: ../view/conductor/transaccionFinal.php');
        break;
    
    //CASI FUNCIONA EL FINALIZADO
case "fin":
     $idconductor = $mconductores->obtenerID($usuname);
    $id = $_SESSION['encomienda'];
    
    $finEn="FINALIZADO";
        $_SESSION['fin']=$finEn;
        $sqlU = "UPDATE cat_encomienda SET ESTADO= 'FINALIZADO' WHERE ID_ENCOMIENDA= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
        header('Location: http://localhost:8080/AppsI_SysTaxi/view/mainConductor.php');
        break;
       default:
        header('Location:../view/mainConductor.php');
}
