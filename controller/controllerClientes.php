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
    default:
        header('Location:../view/mainCliente.php');
}
