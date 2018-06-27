<?php

require_once '../model/ModelAdmin.php';
session_start();
$madmin = new ModelAdmin();
$opcion = $_REQUEST['opcion'];
switch ($opcion) {
    
    case "clientes":
        //obtenemos la lista cliente
        $listado = $madmin->getClientes();
        //y los guardamos en sesion:
        $_SESSION['listado'] = serialize($listado);
        //redireccionamos a la pagina index para visualizar:
        header('Location: ../view/administrador/tableClientes.php');
        break;
    
    case "conductores":
        //obtenemos la lista cliente
        $listado = $madmin->getConductores();
        //y los guardamos en sesion:
        $_SESSION['listado'] = serialize($listado);
        //redireccionamos a la pagina index para visualizar:
        header('Location: ../view/administrador/tableConductores.php');
        break;
    
    case "eliminar":

            $id=$_REQUEST['id'];
            $madmin->eliminarCliente($id);
            $listado = $madmin->getClientes();
            //y los guardamos en sesion:
               $_SESSION['listado'] = serialize($listado);
            header('Location: ../view/administrador/tableClientes.php');
        break;
    
    case "eliminar_con":

            $id=$_REQUEST['id'];
            $madmin->eliminarCliente($id);
            $listado = $madmin->getClientes();
            //y los guardamos en sesion:
               $_SESSION['listado'] = serialize($listado);
            header('Location: ../view/administrador/tableConductores.php');
        break;
    
    default:
        header('Location:../view/mainAdministrador.php');
}
