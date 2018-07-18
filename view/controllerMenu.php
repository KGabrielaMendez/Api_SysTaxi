<?php

require_once '../model/LoginModel.php';
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$LoginModel = new LoginModel();
$opcion = $_REQUEST['opcion'];
$mensaje = "";
unset($_SESSION['mensaje']);
switch ($opcion) {

    case "menuPrincipal":
        //obtenemos los parametros del formulario:
        $rol = $_SESSION['rolUsuario'];
        if ($rol == '1') {
            header('Location:../view/mainAdministrador.php');
        } else {
            if ($rol == '2') {
                header('Location:../view/mainCliente.php');
            } else {
                if ($rol == '3') {
                    header('Location:../view/mainConductor.php');
                }
            }
        }


        break;

    case "cerrarSesion":
        session_destroy();
        header("Location: ../login/login.php");
        break;

    case "cambio_contra":

        break;

    default:
        # code...
        break;
}