<?php

include_once 'Database.php';
include_once 'login.php';
include_once 'rol.php';

class LoginModel {

    public function crearLogin($usuario, $rol, $contra) {
        $pdo = Database::connect();
        $sql = "insert into login(USERNAME,ID_ROL,PASSWORD) values(?,?,?)";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros:

        try {
            $consulta->execute(array($usuario, $rol, $contra));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function cambioContraseña($contra, $email) {      
        $pdo = Database::connect();
       
        $idLog = $_SESSION['idLog'];
       $sql = " update login set PASSWORD ='".$contra."' WHERE ID_LOG =".$idLog."";
       $consult = $pdo->prepare($sql);
       $consult->execute(array($valor));
//                 echo print_r($consult)  ;                
       Database::disconnect();
    }
    public function RecuperarIDLOG($username) {
        $mysqli = new mysqli('localhost', 'root', '', 'systaxi');
        $consulta="SELECT ID_LOG from login where USERNAME='" . $username . "'";
         if($res = mysqli_query($mysqli,$consulta)){
            while($fila= mysqli_fetch_row($res)){
            $dato=$fila[0];
            $_SESSION['idLog'] = $dato;
            }
         }
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

    public function crearUsuario($idLog, $usuario, $apellido, $fechaNac, $ciudad, $telefono, $genero, $direccion, $fechareg, $correo) {
        $pdo = Database::connect();
        $sql = "insert into cat_usuarios(ID_LOG,NOMBRE_US,APELLIDO_US,FECHANAC_US,CIUDAD_US,TELEFONO_US,GENERO_US,DIRECCION_US,FECHAREGISTRO_US,EMAIL_US) values(?,?,?,?,?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros:
        try {
            $consulta->execute(array($idLog, $usuario, $apellido, $fechaNac, $ciudad, $telefono, $genero, $direccion, $fechareg, $correo));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

}

?>
