<?php
$usuario = $_POST['uname'];
$pass = md5($_POST['psw']);

if (empty($usuario) || empty($pass)) {
    header("Location: ../login/login.php");
    exit();
}

mysql_connect('localhost', 'root', '') or die("Error al conectar " . mysql_error());
mysql_select_db('systaxi') or die("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from login where USERNAME='" . $usuario . "'");
$consIdUs = mysql_query("SELECT ID_US from cat_usuarios u, login l where l.USERNAME='" . $usuario . "' and l.ID_LOG=u.ID_LOG");
if ($rowid = mysql_fetch_array($consIdUs)) {
    $_SESSION['idUS'] = $rowid['ID_US'];
}
if ($row = mysql_fetch_array($result)) {
    
    if ($row['PASSWORD'] == $pass) {
        if ($row['ID_ROL'] == '1') {
            session_start();
            $_SESSION['rolUsuario'] = '1';
            $_SESSION['username'] = $usuario;
            header("Location: ../view/mainAdministrador.php");
        } else {
            if ($row['ID_ROL'] == '2') {
                session_start();
                $_SESSION['rolUsuario'] = '2';
                $_SESSION['username'] = $usuario;
                if ($rowid = mysql_fetch_array($consIdUs)) {
    $_SESSION['idUS'] = $rowid['ID_US'];
}
                ?>
                <script type="text/javascript">
                    var m = confirm("Usted se ha autenticado como usuario");
                    if (m == true) {
                <?php
//redireccionamos a una nueva pagina para visualizar:
                header('Location: ../view/mainCliente.php');
                ?>
                    } else {
                        alert("Cancelado");
                    }

                </script>
                <?php
            } else {
                if ($row['ID_ROL'] == '3') {
                    session_start();
                    $_SESSION['rolUsuario'] = '3';
                    $_SESSION['username'] = $usuario;
                    header("Location: ../view/mainConductor.php");
                }
            }
        }
    } else {
        session_start();
        $_SESSION['incorrecto'] = 'incorrecto';
        ?>
        <script type="text/javascript">
            var m = confirm("Contraseña INCORRECTA");
            if (m == true) {
        <?php
//redireccionamos a una nueva pagina para visualizar:
        header('Location: ../view/Tarifas.html');
        ?>
            } else {
                alert("Cancelado");
            }

        </script>
        <?php
    }
} else {
    session_start();
    $_SESSION['incorrecto'] = 'incorrecto';
    header("Location: ../login/login.php");
    exit();
}
?>