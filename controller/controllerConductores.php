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

    case "aceptar":
        $usuname = $_SESSION['username'];
        $id = $_GET['id'];
        $idconductor = $mconductores->obtenerID($usuname);
        $mconductores->ModificarPedido($id,$idconductor);

        //redireccionamos a la pagina index para visualizar:
        header('Location: ../view/conductor/transaccionFinal.php');

        break;

    default:
        header('Location:../view/mainConductor.php');
}
