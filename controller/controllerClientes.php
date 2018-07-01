<?php

require_once '../model/ModelClientes.php';
session_start();
$mconductores = new ModelClientes();
$opcion = $_REQUEST['opcion'];
switch ($opcion) {
        case "perfil":
        $username = $_SESSION['username'];
        //Buscamos los datos
        $conductor = $mconductores->getCliente($username);
        //guardamos los datos
        $_SESSION['cliente'] = $conductor;
        //redirigimos la navegación al formulario de edicion:
        header('Location: ../view/cliente/perfilCliente.php');
        break;

        case "qsomos":
            header('Location: ../view/infoQuienSomos.php');
            break;
        
        case "cerrarSesion":
            session_destroy();
            header("Location: ../login/login.php");
            break;
        
    default:
        header('Location:../view/mainCliente.php');
}
