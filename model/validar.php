<?php

$usuario = $_POST['uname'];
$pass = md5($_POST['psw']);

if(empty($usuario) || empty($pass)){
	header("Location: ../login/login.php");
	exit();
}

mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
mysql_select_db('systaxi') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from login where USERNAME='" . $usuario . "'");

if($row = mysql_fetch_array($result)){
	if($row['PASSWORD'] ==  $pass){

		if($row['ID_ROL'] == '1'){
		session_start();
		$_SESSION['rolUsuario'] = '1';
                $_SESSION['username']=$usuario;
		header("Location: ../view/mainAdministrador.php");
	}
	else {
		if($row['ID_ROL'] == '2'){
		session_start();
		$_SESSION['rolUsuario'] = "2";
                $_SESSION['username']=$usuario;
		header("Location: ../view/mainCliente.php");
	}	else{
		if($row['ID_ROL'] == '3'){
		session_start();
		$_SESSION['rolUsuario'] = "3";
                $_SESSION['username']=$usuario;
		header("Location: ../view/mainConductor.php");
		}
		}
	}
	}else{
            session_start();
      $_SESSION['incorrecto']= 'incorrecto';
		header("Location: ../login/login.php");
		exit();
	}
}else{
      session_start();
      $_SESSION['incorrecto']= 'incorrecto';
	header("Location: ../login/login.php");
	exit();
}


?>