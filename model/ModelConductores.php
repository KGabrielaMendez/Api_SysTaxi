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
        $sql = "SELECT A.ID_ENCOMIENDA, B.NOMBRE_US, B.APELLIDO_US, B.TELEFONO_US, 
                A.DIRECCION_ENC, A.DESCRIPCION_ENC 
                FROM cat_encomienda A, cat_usuarios B
                WHERE A.ID_US = b.ID_US
                AND A.IDCONDUCTOR IS NULL";
        $resultado = $pdo->query($sql);
        //transformamos los registros en objetos de tipo Factura:
        $listado = array();
        foreach ($resultado as $da) {
            $ped = new Pedidos();
            $ped->setId($da['ID_ENCOMIENDA']);
            $ped->setDescripcionPedido($da['DESCRIPCION_ENC']);
            $ped->setNombre($da['NOMBRE_US']);
            $ped->setApellido($da['APELLIDO_US']);
            $ped->setTelefono($da['TELEFONO_US']);
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
        $sql = "SELECT A.ID_CARRERA, B.NOMBRE_US, B.APELLIDO_US, B.TELEFONO_US, 
                A.DIRECCION_CAR, A.DESCRIPCION_CAR 
                FROM cat_carrera A, cat_usuarios B
                WHERE A.ID_US = b.ID_US
                AND A.IDCONDUCTOR IS NULL";
        $resultado = $pdo->query($sql);
        //transformamos los registros en objetos de tipo Factura:
        $listado = array();
        foreach ($resultado as $da) {
            $ped = new Pedidos();
            $ped->setId($da['ID_CARRERA']);
            $ped->setDescripcionPedido($da['DESCRIPCION_CAR']);
            $ped->setNombre($da['NOMBRE_US']);
            $ped->setApellido($da['APELLIDO_US']);
            $ped->setTelefono($da['TELEFONO_US']);
            $ped->setDireccionPedido($da['DIRECCION_CAR']);         
                        array_push($listado,$ped);
        }
        Database::disconnect();
        //retornamos el listado resultante:
        return $listado;
    }

    public function ModificarPedidoE($idencomienda,$idconductor) {
        $pdo = Database::connect();
        $sql = "Update cat_encomienda set IDCONDUCTOR = ? WHERE ID_ENCOMIENDA = ?";
        $consulta = $pdo->prepare($sql);
        $dato = $_SESSION['idLog'];
        //Ejecutamos la sentencia incluyendo a los parametros:
        $consulta->execute(array($dato,$idencomienda));
        Database::disconnect();       
    }
    
    public function ModificarPedidoC($idencomienda,$idconductor) {
        $pdo = Database::connect();
        $sql = "Update cat_carrera set IDCONDUCTOR = ? WHERE ID_CARRERA = ?";
        $consulta = $pdo->prepare($sql);
        $dato = $_SESSION['idLog'];
        //Ejecutamos la sentencia incluyendo a los parametros:
        $consulta->execute(array($dato,$idencomienda));
        Database::disconnect();       
    }
    
    public function obtenerID($username) {
        $mysqli = new mysqli('localhost', 'root', '', 'systaxi');
        $consulta="SELECT C.IDCONDUCTOR
            FROM login A, cat_usuarios B, conductor C, cat_unidades D
            WHERE A.ID_LOG = B.ID_LOG
            AND C.ID_US = B.ID_US
            AND C.ID_UNI = D.ID_UNI
            AND A.USERNAME='" . $username . "'";
         if($res = mysqli_query($mysqli,$consulta)){
            while($fila= mysqli_fetch_row($res)){
            $dato=$fila[0];
            $_SESSION['idLog'] = $dato;
            }
         }
    }
    
    public function obtenerIDOriginal($username) {
        $mysqli = new mysqli('localhost', 'root', '', 'systaxi');
        $consulta="SELECT A.ID_LOG
            FROM login A, cat_usuarios B
            WHERE A.ID_LOG = B.ID_LOG
            AND B.ID_US='" . $username . "'";
         if($res = mysqli_query($mysqli,$consulta)){
            while($fila= mysqli_fetch_row($res)){
            $dato=$fila[0];
            $_SESSION['idLog'] = $dato;
            }
         }
    }
    
    public function insertarConductor($iduser, $idauto) {
        $pdo = Database::connect();
        $sql = "INSERT INTO `conductor`(`ID_US`,`ID_UNI`) VALUES (?,?)";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros:
        try {
            $consulta->execute(array($iduser, $idauto));
                  
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }
}
