<?php

include_once 'entidades/Clientes.php';
include_once 'Database.php';

/**
 * Description of ModelClientes
 *
 * @author maicol
 */
class ModelClientes {

    public function getCliente($username) {
        //obtenemos la informacion de la bdd:
        $pdo = Database::connect();
        $sql = "SELECT C.USERNAME, B.NOMBRE_US, B.APELLIDO_US, B.EMAIL_US, B.DIRECCION_US, B.FECHANAC_US
                FROM cat_rol A,cat_usuarios B,login C
                WHERE C.ID_ROL = A.ID_ROL
                AND B.ID_LOG = C.ID_LOG
                AND A.ID_ROL = 2
                AND C.USERNAME = ".$username;
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($username));
        //obtenemos el registro especifico:
        $da = $consulta->fetch(PDO::FETCH_ASSOC);
        $cliente = new Clientes();
        $cliente->setUsername($da['USERNAME']);
        $cliente->setNombre_us($da['NOMBRE_US']);
        $cliente->setApellido_us($da['APELLIDO_US']);
        $cliente->setEmail_us($da['EMAIL_US']);
        $cliente->setDireccion_us($da['DIRECCION_US']);
        $cliente->setFechanac_us($da['FECHANAC_US']);
        Database::disconnect();
        //retornamos el listado resultante:
        return $cliente;
    }
    
    
     public function RecuperarIDLOG($username) {
        $mysqli = new mysqli('localhost', 'root', '', 'systaxi');
        $mysqli->set_charset("utf8");
        $res = $mysqli->query("SELECT ID_LOG from login where USERNAME='" . $username . "'");
        $row = mysql_fetch_array($res);
        $idLog = $row['ID_LOG'];
        $_SESSION['idLog'] = $idLog;
    }

    public function RecuperarUsername($idLog) {
        $mysqli = mysqli_connect('localhost', 'root', '', 'systaxi');
        
        $consulta="SELECT USERNAME from login where ID_LOG=" . $idLog;
        if($res = mysqli_query($mysqli,$consulta)){
            while($fila= mysqli_fetch_row($res)){
            $dato=$fila[0];
            $_SESSION['uname'] = $dato;
            }
        }        
    }

}
