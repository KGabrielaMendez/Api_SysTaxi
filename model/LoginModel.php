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
    
    
    public function crearUsuario($username,$usuario,$apellido,$fechaNac,$ciudad,$telefono,$genero,$direccion,$fechareg,$correo){
    	$pdo = Database::connect();
        $sql = "insert into cat_usuarios(USERNAME,NOMBRE_US,APELLIDO_US,FECHANAC_US,CIUDAD_US,TELEFONO_US,GENERO_US,DIRECCION_US,FECHAREGISTRO_US,EMAIL_US) values(?,?,?,?,?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros:
        try {
            $consulta->execute(array($username,$usuario,$apellido,$fechaNac,$ciudad,$telefono,$genero,$direccion,$fechareg,$correo));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();	
    }



}
?>