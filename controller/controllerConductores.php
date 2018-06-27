<?php

require_once '../model/ModelConductores.php';
session_start();
$mconductores = new ModelConductores();
$opcion = $_REQUEST['opcion'];
switch ($opcion) {
        case "perfil":
        $username = $_GET['username'];
        //Buscamos los datos
        $conductor = $mconductores->getConductores($username);
        //guardamos los datos
        $_SESSION['conductor'] = $conductor;
        //redirigimos la navegación al formulario de edicion:
        header('Location: ../view/conductor/perfilConductor.php');
        break;

    default:
        header('Location:../view/mainCondutor.php');
}
