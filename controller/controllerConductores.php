<?php

require_once '../model/ModelConductores.php';
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
            header('Location: ../view/conductor/notificaciones.php');
            break;
       

    default:
        header('Location:../view/mainConductor.php');
}
