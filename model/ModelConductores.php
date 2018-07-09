<?php

include_once 'entidades/Pedidos.php';
include_once 'Database.php';

/**
 * Description of ModelConductores
 *
 * @author maicol
 */
class ModelConductores {

    public function getEcomiendas() {
        //obtenemos la informacion de la bdd:
        $pdo = Database::connect();
        $sql = "SELECT B.DESCRIPCION_ENC, D.NOMBRE_US, D.APELLIDO_US, B.DIRECCION_ENC "
                . "FROM cat_pedidos A, cat_encomienda B, cat_usuarios D "
                . "WHERE A.ID_PEDIDO = B.ID_PEDIDO AND A.ID_US = D.ID_US";
        $resultado = $pdo->query($sql);
        //transformamos los registros en objetos de tipo Factura:
        $listado = array();
        foreach ($resultado as $da) {
            $ped = new Pedidos();
            $ped->setDescripcionPedido($da['DESCRIPCION_ENC']);
                        $ped->setNombre($da['NOMBRE_US']);
            $ped->setApellido($da['APELLIDO_US']);
            $ped->setDireccionPedido($da['DIRECCION_ENC']);
            array_push($listado,$ped);
        }
        Database::disconnect();
        //retornamos el listado resultante:
        return $listado;
    }
    
    public function getCarreras() {
        //obtenemos la informacion de la bdd:
        $pdo = Database::connect();
        $sql = "SELECT B.DESCRIPCION_CAR, D.NOMBRE_US, D.APELLIDO_US, B.DIRECCION_CAR "
                . "FROM cat_pedidos A, cat_carrera B, cat_usuarios D "
                . "WHERE A.ID_PEDIDO = B.ID_PEDIDO AND A.ID_US = D.ID_US";
        $resultado = $pdo->query($sql);
        //transformamos los registros en objetos de tipo Factura:
        $listado = array();
        foreach ($resultado as $da) {
            $ped = new Pedidos();
            $ped->setDescripcionPedido($da['DESCRIPCION_CAR']);
                        $ped->setNombre($da['NOMBRE_US']);
            $ped->setApellido($da['APELLIDO_US']);
            $ped->setDireccionPedido($da['DIRECCION_CAR']);
            array_push($listado,$ped);
        }
        Database::disconnect();
        //retornamos el listado resultante:
        return $listado;
    }

}
