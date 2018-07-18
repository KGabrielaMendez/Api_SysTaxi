<?php
require_once '../../model/ModelConductores.php';
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
        $usuname = $_SESSION['username'];
        $mconductores = new ModelConductores();
switch ($opt) {
    case 'view':
//        $id = isset($_REQUEST['IDCONDUCTOR']) ? $_REQUEST['IDCONDUCTOR'] : '';
        $id = isset($_REQUEST['ID_US']) ? $_REQUEST['ID_US'] : '';
        $mysqlio = new mysqli('localhost', 'root', '', 'systaxi');
        $consultas='SELECT ID_ROL FROM login WHERE USERNAME="' . $usuname . '"';
         if($res = mysqli_query($mysqlio,$consultas)){
            while($fila= mysqli_fetch_row($res)){
            $dato=$fila[0];
            }
         }
         print_r($dato);
        if($dato==1){
         $sqlV = 'SELECT B.ID_US, C.USERNAME, B.NOMBRE_US, B.APELLIDO_US, B.EMAIL_US, F.NOMBRE_COOP, E.NUMERO_UNI, B.TELEFONO_US,	B.FECHANAC_US
                FROM cat_rol A,cat_usuarios B,login C, conductor D, cat_unidades E, cat_cooperativas F
                WHERE C.ID_ROL = A.ID_ROL
                AND B.ID_LOG = C.ID_LOG
                AND D.ID_US = B.ID_US
                AND D.ID_UNI = E.ID_UNI
                AND E.ID_COOP = F.ID_COOP
                AND A.ID_ROL = 3
                AND B.ID_US="' . $id . '"';    
        }else{
        $sqlV = 'SELECT B.ID_US, C.USERNAME, B.NOMBRE_US, B.APELLIDO_US, B.EMAIL_US, F.NOMBRE_COOP, E.NUMERO_UNI, B.TELEFONO_US,	B.FECHANAC_US
                FROM cat_rol A,cat_usuarios B,login C, conductor D, cat_unidades E, cat_cooperativas F
                WHERE C.ID_ROL = A.ID_ROL
                AND B.ID_LOG = C.ID_LOG
                AND D.ID_US = B.ID_US
                AND D.ID_UNI = E.ID_UNI
                AND E.ID_COOP = F.ID_COOP
                AND A.ID_ROL = 3
                AND C.USERNAME="' . $usuname . '"';
        }
        $qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
        $qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
        include 'templates/conductor_view.php';
        break;

    case 'edit':
        $msg = isset($msg) ? $msg : '';
        $id = isset($_REQUEST['ID_US']) ? $_REQUEST['ID_US'] : '';
        $mysqlio = new mysqli('localhost', 'root', '', 'systaxi');
        $consultas='SELECT ID_ROL FROM login WHERE USERNAME="' . $usuname . '"';
         if($res = mysqli_query($mysqlio,$consultas)){
            while($fila= mysqli_fetch_row($res)){
            $dato=$fila[0];
            }
         }
         print_r($dato);
        if($dato==1){
         $sqlE = 'SELECT B.ID_US, C.USERNAME, B.NOMBRE_US, B.APELLIDO_US, B.EMAIL_US, F.NOMBRE_COOP, E.NUMERO_UNI, B.TELEFONO_US,	B.FECHANAC_US
                FROM cat_rol A,cat_usuarios B,login C, conductor D, cat_unidades E, cat_cooperativas F
                WHERE C.ID_ROL = A.ID_ROL
                AND B.ID_LOG = C.ID_LOG
                AND D.ID_US = B.ID_US
                AND D.ID_UNI = E.ID_UNI
                AND E.ID_COOP = F.ID_COOP
                AND A.ID_ROL = 3
                AND B.ID_US="' . $id . '"';    
        }else{
        $sqlE = 'SELECT B.ID_US, C.USERNAME, B.NOMBRE_US, B.APELLIDO_US, B.EMAIL_US, F.NOMBRE_COOP, E.NUMERO_UNI, B.TELEFONO_US,	B.FECHANAC_US
                FROM cat_rol A,cat_usuarios B,login C, conductor D, cat_unidades E, cat_cooperativas F
                WHERE C.ID_ROL = A.ID_ROL
                AND B.ID_LOG = C.ID_LOG
                AND D.ID_US = B.ID_US
                AND D.ID_UNI = E.ID_UNI
                AND E.ID_COOP = F.ID_COOP
                AND A.ID_ROL = 3
                AND C.USERNAME="' . $usuname . '"';
        }
        $qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
        $qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
        @extract($qryEResult);
        include 'templates/conductor_edit.php';
        break;

    case 'update':
        $msg = isset($msg) ? $msg : '';
        include '../library/formvalidator.php';
        $id = isset($_REQUEST['ID_US']) ? $_REQUEST['ID_US'] : '';
        $ID_LOG = isset($_REQUEST['ID_LOG']) ? addslashes($_REQUEST['ID_LOG']) : '';
        $NOMBRE_US = isset($_REQUEST['NOMBRE_US']) ? addslashes($_REQUEST['NOMBRE_US']) : '';
        $APELLIDO_US = isset($_REQUEST['APELLIDO_US']) ? addslashes($_REQUEST['APELLIDO_US']) : '';
        $FECHANAC_US = isset($_REQUEST['FECHANAC_US']) ? addslashes($_REQUEST['FECHANAC_US']) : '';
//        $CIUDAD_US = isset($_REQUEST['CIUDAD_US']) ? addslashes($_REQUEST['CIUDAD_US']) : '';
        $TELEFONO_US = isset($_REQUEST['TELEFONO_US']) ? addslashes($_REQUEST['TELEFONO_US']) : '';
//        $GENERO_US = isset($_REQUEST['GENERO_US']) ? addslashes($_REQUEST['GENERO_US']) : '';
//        $DIRECCION_US = isset($_REQUEST['DIRECCION_US']) ? addslashes($_REQUEST['DIRECCION_US']) : '';
        $FECHAREGISTRO_US = isset($_REQUEST['FECHAREGISTRO_US']) ? addslashes($_REQUEST['FECHAREGISTRO_US']) : '';
        $EMAIL_US = isset($_REQUEST['EMAIL_US']) ? addslashes($_REQUEST['EMAIL_US']) : '';
        $sqlU = "UPDATE cat_usuarios SET ID_LOG= '$ID_LOG', NOMBRE_US= '$NOMBRE_US', APELLIDO_US= '$APELLIDO_US', FECHANAC_US= '$FECHANAC_US', TELEFONO_US= '$TELEFONO_US',FECHAREGISTRO_US= '$FECHAREGISTRO_US', EMAIL_US= '$EMAIL_US' WHERE ID_US= '$id'";
        $qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
        if ($qryU) {
            $_SESSION['msg'] = 'Record Updated Successfully!';
        } else {
            $_SESSION['msg'] = 'Error in updating record!';
        }
        header('Location: conductor.php');
        break;
        
    case 'add':
        $msg = isset($msg) ? $msg : '';
        include 'templates/conductor_add.php';
        break;
    case 'insert':
        $msg = isset($msg) ? $msg : '';
        include '../library/formvalidator.php';
        $validator = new FormValidator();
        $validator->addValidation("ID_US", "req", "Please enter ID_US");
        $validator->addValidation("ID_UNI", "req", "Please enter ID_UNI");
        if ($validator->ValidateForm()) {
            $ID_US = isset($_REQUEST['ID_US']) ? addslashes($_REQUEST['ID_US']) : '';
            $ID_UNI = isset($_REQUEST['ID_UNI']) ? addslashes($_REQUEST['ID_UNI']) : '';
            $sqlI = "INSERT INTO conductor (ID_US, ID_UNI) VALUES ('$ID_US', '$ID_UNI')";
            $qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());  
            
            if ($qryI) {
                $mysqli = new mysqli('localhost', 'root', '', 'systaxi');
        $consulta="SELECT A.ID_LOG
            FROM login A, cat_usuarios B
            WHERE A.ID_LOG = B.ID_LOG
            AND B.ID_US='" . $ID_US . "'";
         if($res = mysqli_query($mysqli,$consulta)){
            while($fila= mysqli_fetch_row($res)){
            $dato=$fila[0];
            }
                $sqlU = 'UPDATE login SET ID_ROL = 3 WHERE ID_LOG="' . $dato . '"';
            $qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
         $_SESSION['msg'] = 'Record Added Successfully!';}
            } else {
                $_SESSION['msg'] = 'Error in adding record!';
            }
            header('Location: conductor.php');
            exit;
        } else {
            $error_hash = $validator->GetErrors();
            foreach ($error_hash as $inpname => $inp_err) {
                $msg = "$inp_err";
                break;
            }
        }
        
        include 'templates/conductor_add.php';
        break;

    //pagina inicial conductor
    default:
        if (isset($_SESSION['msg'])) {
            $msg = $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        include '../library/paginator.class.php';
        //Conductores
        $mysqli = new mysqli('localhost', 'root', '', 'systaxi');
        $consulta='SELECT ID_ROL FROM login WHERE USERNAME="' . $usuname . '"';
         if($res = mysqli_query($mysqli,$consulta)){
            while($fila= mysqli_fetch_row($res)){
            $dato=$fila[0];
            }
         }
         print_r($dato);
        if($dato==1){
         $sqlL = 'SELECT B.ID_US, C.USERNAME, B.NOMBRE_US, B.APELLIDO_US, B.EMAIL_US, F.NOMBRE_COOP, E.NUMERO_UNI, B.TELEFONO_US,	B.FECHANAC_US
                FROM cat_rol A,cat_usuarios B,login C, conductor D, cat_unidades E, cat_cooperativas F
                WHERE C.ID_ROL = A.ID_ROL
                AND B.ID_LOG = C.ID_LOG
                AND D.ID_US = B.ID_US
                AND D.ID_UNI = E.ID_UNI
                AND E.ID_COOP = F.ID_COOP
                AND A.ID_ROL = 3';    
        }else{
        $sqlL = 'SELECT B.ID_US, C.USERNAME, B.NOMBRE_US, B.APELLIDO_US, B.EMAIL_US, F.NOMBRE_COOP, E.NUMERO_UNI, B.TELEFONO_US,	B.FECHANAC_US
                FROM cat_rol A,cat_usuarios B,login C, conductor D, cat_unidades E, cat_cooperativas F
                WHERE C.ID_ROL = A.ID_ROL
                AND B.ID_LOG = C.ID_LOG
                AND D.ID_US = B.ID_US
                AND D.ID_UNI = E.ID_UNI
                AND E.ID_COOP = F.ID_COOP
                AND A.ID_ROL = 3
                AND C.USERNAME="' . $usuname . '"';
        }
        $pag = new Paginator($sqlL, 10);
        $link1 = $pag->getCount('Item %d of %d - %d');
        $link2 = $pag->getLinks(5);
        $tempSql = $pag->getQuery();
        $qryL = mysql_query($tempSql) or die('Error: ' . mysql_error());
        $result = array();
        while ($qryLResult = mysql_fetch_assoc($qryL)) {
            $result[] = $qryLResult;
        }
        include 'templates/conductor_listing.php';
        break;
}
?>
