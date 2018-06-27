<?php
include 'Database.php';
include 'Usuarios.php';

class UsuariosModel {


public function getUsuarios($order){
//obtenemos la informacion de la bdd:
	$pdo = Database::connect();
	//verificamos el ordenamiento asc o desc:
if($orden==true)//asc
$sql = "select * from usuario order by nombre";
else //desc
	$sql = "select * from usuario order by nombre desc";
	$resultado = $pdo->query($sql);
//transformamos los registros en objetos de tipo usuario:
	$listado = array();
	foreach ($resultado as $res){
		$usuario = new usuario();
		$usuario->setCodigo($res['codigo']);
		$usuario->setNombre($res['nombre']);
		$usuario->setPrecio($res['precio']);
		$usuario->setCantidad($res['cantidad']);
		array_push($listado, $usuario);
	}
	Database::disconnect();
//retornamos el listado resultante:
	return $listado;
}

public function getUsuario($id,$cedula){
//Obtenemos la informacion del usuario especifico:
	$pdo = Database::connect();
//Utilizamos parametros para la consulta:
	$sql = "select * from cat_usuarios where ID_US=?";
	$consulta = $pdo->prepare($sql);
//Ejecutamos y pasamos los parametros para la consulta:
	$consulta->execute(array($id));
//Extraemos el registro especifico:
	$dato = $consulta->fetch(PDO::FETCH_ASSOC);
//Transformamos el registro obtenido a objeto:
	$usuario=new Usuarios();
	$usuario->setID_US($dato['ID_US']);
	$usuario->setCEDULA_US($dato['CEDULA_US']);
	$usuario->setNOMBRE_US($dato['NOMBRE_US']);
	$usuario->setAPELLIDO_US($dato['APELLIDO_US']);
	$usuario->setFECHANAC_US($dato['FECHANAC_US']);
	$usuario->setCIUDAD_US($dato['CIUDAD_US']);
	$usuario->setTELEFONO_US($dato['TELEFONO_US']);
	$usuario->setGENERO_US($dato['GENERO_US']);
	$usuario->setAPELLIDO_US($dato['APELLIDO_US']);
	$usuario->setDIRECCION_US($dato['DIRECCION_US']);
	$usuario->setFECHAREGISTRO_US($dato['FECHAREGISTRO_US']);
	$usuario->setEMAIL_US($dato['EMAIL_US']);

	Database::disconnect();
	return $usuario;
}
/**
* Crea un nuevo usuario en la base de datos.
* @param type $codigo
* @param type $nombre
* @param type $precio
* @param type $cantidad
*/
public function crearusuario($codigo,$nombre,$precio,$cantidad){
//Preparamos la conexion a la bdd:
	$pdo=Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Preparamos la sentencia con parametros:
	$sql="insert into usuario (codigo,nombre,precio,cantidad) values(?,?,?,?)";
	$consulta=$pdo->prepare($sql);
//Ejecutamos y pasamos los parametros:
	try{
		$consulta->execute(array($codigo,$nombre,$precio,$cantidad));
	} catch (PDOException $e){
		Database::disconnect();
		throw new Exception($e->getMessage());
	}
	Database::disconnect();
}
/**
* Elimina un usuario especifico de la bdd.
* @param type $codigo
*/
public function eliminarusuario($codigo){
	//Preparamos la conexion a la bdd:
	$pdo=Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="delete from usuario where codigo=?";
	$consulta=$pdo->prepare($sql);
//Ejecutamos la sentencia incluyendo a los parametros:
	$consulta->execute(array($codigo));
	Database::disconnect();
}
/**
* Actualiza un usuario existente.
* @param type $codigo
* @param type $nombre
* @param type $precio
* @param type $cantidad
*/
public function actualizarusuario($codigo,$nombre,$precio,$cantidad){
//Preparamos la conexión a la bdd:
	$pdo=Database::connect();
	$sql="update usuario set nombre=?,precio=?,cantidad=? where codigo=?";
	$consulta=$pdo->prepare($sql);
//Ejecutamos la sentencia incluyendo a los parametros:
	$consulta->execute(array($nombre,$precio,$cantidad,$codigo));
	Database::disconnect();
}
}