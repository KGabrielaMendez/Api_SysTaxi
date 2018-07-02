<?php

require_once '../model/ModelClientes.php';
session_start();
$mconductores = new ModelClientes();
$opcion = $_REQUEST['opcion'];
switch ($opcion) {
        case "perfil":
        header('Location: ../view/cat_cliente/cat_cliente.php');
        break;

        case "qsomos":
            header('Location: ../view/infoQuienSomos.php');
            break;
        
        case "servicios":
            header('Location: ../view/cat_cliente/servicios.php');
            break;
        case "carrera":
            header('Location: ../view/cat_carrera/cat_carrera.php?option=add');
            
            
            break;
        
    default:
        session_destroy();
        header('Location:../view/mainCliente.php');
}
