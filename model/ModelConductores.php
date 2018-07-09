<?php

include_once 'entidades/Conductores.php';
include_once 'Database.php';

/**
 * Description of ModelConductores
 *
 * @author maicol
 */
class ModelConductores {

    public function getConductores($username) {
        //obtenemos la informacion de la bdd:
        $pdo = Database::connect();
        $sql = "SELECT C.NOMBRE_US, C.APELLIDO_US, C.EMAIL_US, F.NUMERO_UNI, E.NOMBRE_COOP, C.FECHANAC_US, C.TELEFONO_US
                FROM conductor A, cat_rol B,cat_usuarios C,login D, cat_cooperativas E, cat_unidades F
                WHERE A.ID_US = C.ID_US
                AND A.ID_UNI = F.ID_UNI
                AND C.ID_LOG = D.ID_LOG
                AND B.ID_ROL = D.ID_ROL
                AND F.ID_COOP = E.ID_COOP
                AND B.ID_ROL = 3
                AND D.USERNAME = ?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($username));
        //obtenemos el registro especifico:
        $da = $consulta->fetch(PDO::FETCH_ASSOC);
        $conductor = new Conductores();
        $conductor->setNombre_us($da['NOMBRE_US']);
        $conductor->setApellido_us($da['APELLIDO_US']);
        $conductor->setEmail_us($da['EMAIL_US']);
        $conductor->setNumero_uni($da['NUMERO_UNI']);
        $conductor->setNombre_coop($da['NOMBRE_COOP']);
        $conductor->setFechanac_us($da['FECHANAC_US']);
        $conductor->setTelefono_us($da['TELEFONO_US']);
        Database::disconnect();
        //retornamos el listado resultante:
        return $conductor;
    }

}
