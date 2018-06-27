<?php

include_once 'entidades/Clientes.php';
include_once 'entidades/Conductores.php';
include_once 'Database.php';

class ModelAdmin {

    public function getClientes() {
        //obtenemos la informacion de la bdd:
        $pdo = Database::connect();
        $sql = "SELECT B.ID_US, C.USERNAME, B.NOMBRE_US, B.APELLIDO_US, B.EMAIL_US, B.DIRECCION_US, B.FECHANAC_US
                FROM cat_rol A,cat_usuarios B,login C
                WHERE B.USERNAME = C.USERNAME
                AND C.ID_ROL = A.ID_ROL
                AND A.ID_ROL = 2";
        $resultado = $pdo->query($sql);
        //transformamos los registros en objetos de tipo Factura:
        $listado = array();
        foreach ($resultado as $da) {
            $cliente = new Clientes();
            $cliente->setId($da['ID_US']);
            $cliente->setUsername($da['USERNAME']);
            $cliente->setNombre_us($da['NOMBRE_US']);
            $cliente->setApellido_us($da['APELLIDO_US']);
            $cliente->setEmail_us($da['EMAIL_US']);
            $cliente->setDireccion_us($da['DIRECCION_US']);
            $cliente->setFechanac_us($da['FECHANAC_US']);
            array_push($listado, $cliente);
        }
        Database::disconnect();
        //retornamos el listado resultante:
        return $listado;
    }
    
    public function getConductores() {
        //obtenemos la informacion de la bdd:
        $pdo = Database::connect();
        $sql = "SELECT C.ID_US C.NOMBRE_US, C.APELLIDO_US, C.EMAIL_US, F.NUMERO_UNI, E.NOMBRE_COOP, C.FECHANAC_US, C.TELEFONO_US
                FROM rol_user A, cat_rol B,cat_usuarios C,login D, cat_cooperativas E, cat_unidades F
                WHERE A.ID_US = C.ID_US
                AND A.ID_UNI = F.ID_UNI
                AND C.USERNAME = D.USERNAME
                AND B.ID_ROL = D.ID_ROL
                AND F.ID_COOP = E.ID_COOP
               ";
        $resultado = $pdo->query($sql);
        //transformamos los registros en objetos de tipo Factura:
        $listado = array();
        foreach ($resultado as $da) {
           $conductor = new Conductores();
           
        $conductor->setId($da['ID_US']);
        $conductor->setNombre_us($da['NOMBRE_US']);
        $conductor->setApellido_us($da['APELLIDO_US']);
        $conductor->setEmail_us($da['EMAIL_US']);
        $conductor->setNumero_uni($da['NUMERO_UNI']);
        $conductor->setNombre_coop($da['NOMBRE_COOP']);
        $conductor->setFechanac_us($da['FECHANAC_US']);
        $conductor->setTelefono_us($da['TELEFONO_US']);
            array_push($listado, $conductor);
        }
        Database::disconnect();
        //retornamos el listado resultante:
        return $listado;
    }
    
    
    public function eliminarCliente($id){
        $pdo = Database::connect();
        $sql = "delete from cat_usuarios where ID_US=?";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros:
        try {
            $consulta->execute(array($id));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }
    
    public function eliminarConductor($id){
        $pdo = Database::connect();
        $sql = "delete from cat_usuarios where ID_US=?";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros:
        try {
            $consulta->execute(array($id));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

}
