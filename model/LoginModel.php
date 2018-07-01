<?php
include_once 'Database.php';
include_once 'login.php';
include_once 'rol.php';

class LoginModel {


 public function crearLogin($usuario,$rol,$contra){
    	$pdo = Database::connect();
        $sql = "insert into login(USERNAME,ID_ROL,PASSWORD) values(?,?,?)";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros:
        
        try {
            $consulta->execute(array($usuario,$rol,$contra));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();	
    }
    
    
    
    public function RecuperarIDLOG($username){
        mysql_connect('127.0.0.1','root','') or die("Error al conectar " . mysql_error());
mysql_select_db('systaxi') or die ("Error al seleccionar la Base de datos: " . mysql_error());

        $result = mysql_query("SELECT ID_LOG from login where USERNAME='" . $username. "'");
        $row = mysql_fetch_array($result);
        $idLog=$row['ID_LOG'];
        $_SESSION['idLog']=$idLog;
    }
    public function crearUsuario($idLog,$usuario,$apellido,$fechaNac,$ciudad,$telefono,$genero,$direccion,$fechareg,$correo){
    	$pdo = Database::connect();
              
             
        $sql = "insert into cat_usuarios(ID_LOG,NOMBRE_US,APELLIDO_US,FECHANAC_US,CIUDAD_US,TELEFONO_US,GENERO_US,DIRECCION_US,FECHAREGISTRO_US,EMAIL_US) values(?,?,?,?,?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
      //Ejecutamos y pasamos los parametros:
        try {
            $consulta->execute(array($idLog,$usuario,$apellido,$fechaNac,$ciudad,$telefono,$genero,$direccion,$fechareg,$correo));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();	
    }



}

?>