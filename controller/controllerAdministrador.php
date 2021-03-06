<?php

require_once '../model/ModelAdmin.php';
session_start();
$madmin = new ModelAdmin();
$opcion = $_REQUEST['opcion'];
switch ($opcion) {

    case "clientes":
        header('Location: ../view/cat_usuarios/cat_usuarios.php');
        break;

    case "conductores":
        header('Location: ../view/conductor/conductor.php');
        break;

    case "unidades":
        header('Location: ../view/cat_unidades/cat_unidades.php');
        break;

    case "cooperativas":
        header('Location: ../view/cat_cooperativas/cat_cooperativas.php');
        break;

    case "nuevoAdmin":
        header('Location: ../view/login/login.php');
        break;

    case "cerrarSesion":
        session_destroy();
        header("Location: ../login/login.php");
        break;
    
    case "ListaEncomienda":
        header('Location: ../view/lista_encomienda/cat_encomienda.php');
        break;

    default:
        session_destroy();
        header('Location:../view/mainAdministrador.php');
}
