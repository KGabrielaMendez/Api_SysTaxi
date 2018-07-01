<?php
require_once '../model/LoginModel.php';

session_start();
$LoginModel = new LoginModel();
$opcion = $_REQUEST['opcion'];
$mensaje="";
unset($_SESSION['mensaje']);
switch ($opcion) {

	case "crear_login":
            //obtenemos los parametros del formulario:

			$usuario=$_REQUEST['uname'];
            $correo=$_REQUEST['email'];
            $rol=2;
           
            if($_REQUEST['psw1']!=$_REQUEST['psw2']){
                
                 ?>
             <script type="text/javascript">
                    alert("LA CONTRASEÑA NO ES LA MISMA");
                </script>
                    
                <?php
                 header('Location: ../login/login.php');
            }else{ 
                $contra=md5($_REQUEST['psw1']);
            //creamos el nuevo registro:
            $LoginModel->crearLogin($usuario,$rol,$contra);
            
            $_SESSION['username']=$usuario;
            $_SESSION['email']=$correo;
            
            ?>
             <script type="text/javascript">
                    alert("CREADO EXITOSAMENTE, POR FAVOR TERMINE SU REGISTRO"){
                        <?php
            //redireccionamos a una nueva pagina para visualizar:
                 header('Location: ../view/completarRegistro.php');
            } ?>
                    }
                </script>
<?php
                
        break;
        
        case "crear_usuario":
            date_default_timezone_set('America/Guayaquil');
            //obtenemos los parametros del formulario:
            
            if(isset($_SESSION['email']) && isset($_SESSION['username'])){
                        $username=$_SESSION['username'];
			$usuario=$_REQUEST['uname'];
			$apellido=$_REQUEST['uape'];
			$fechaNac=$_REQUEST['fdn'];
			$ciudad=$_REQUEST['ciudad'];
			$telefono=$_REQUEST['telf'];
                        $genero = $_REQUEST['gnr'];
                        $direccion= $_REQUEST['dir'];
                       
                        $fecha_reg= date('Y-m-d G:i:s');
                        
                    
                        $correo =$_SESSION['email'];
                    
            $LoginModel->RecuperarIDLOG($username);
                          $idLog=$_SESSION['idLog'];
            //creamos el nuevo registro:
            $LoginModel->crearUsuario($idLog,$usuario, $apellido, $fechaNac, $ciudad, 
                    $telefono, $genero, $direccion, $fecha_reg,$correo);
            
            $_SESSION['cliente']="si";
            ?>
             <script type="text/javascript">
                    alert("CREADO EXITOSAMENTE, POR FAVOR INICIE SESION"){
                    <?php
                     header('Location: ../login/login.php');
            
                    ?>
                        }
                </script>

                <?php
            //redireccionamos a una nueva pagina para visualizar:
            }
            else{
                 header('Location: ../login/login.php');
            }
            
            
        break;
	
	default:
		# code...
		break;

}
?>