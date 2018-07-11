<!DOCTYPE html>
<?php
include"inc/inc_head.php";
if ($_SESSION['rolUsuario'] == "2") {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
        <ul class="breadcrumb">
            <li><a href="cat_encomienda.php">Inicio</a></li>
            <li class="active">Library</li>
        </ul>

        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">   </div>
            <div id="content">
                <div id="leftbar">  </div>
                <div id="rightbar"> </div>
            </div>
        </div>
        <table border="0" class="normal" align="center">
            <tbody>
                <tr style="width: 175px;">
                    <td style="width: 175px;">
                        <form  action="../controller/controllerClientes.php">
                            <?php
                            $username = $_SESSION['username'];
                            ?>
                            <input type="hidden" name="username" value="<?php echo $username; ?>">
                            <input type="hidden" value="perfil" name="opcion">
                            <input type="image" value="Perfil" src="img/perfil.jpg" alt="Perfil" width="70%"/>

                        </form>
                    </td>
                    <td style="width: 175px;">
                        <form  action="../controller/controllerClientes.php">
                            <input type="hidden" value="servicios" name="opcion">
                            <input type="image" value="servicios" src="img/servicios.jpg" alt="Servicios" width="70%"/>
                        </form>
                    </td>
                </tr>
                <tr style="width: 175px;">
                    <td style="width: 175px;"><form  action="../controller/controllerClientes.php">
                            <input type="hidden" value="qsomos" name="opcion">
                            <input type="image" value="qsomos" src="img/quien.jpg" alt="qsomos" width="110%"/>
                        </form></td>
                    <td><form  action="Tarifas.html">
                            <input type="image" value="tarifas" src="img/tarifas.jpg" alt="tarifas" width="70%"/>
                        </form></td>
                </tr>
            </tbody>
        </table>
        <?php
        mysql_connect('localhost', 'root', '') or die("Error al conectar " . mysql_error());
        mysql_select_db('systaxi') or die("Error al seleccionar la Base de datos: " . mysql_error());
        $consIdUs = mysql_query("SELECT ID_US from cat_usuarios u, login l where l.USERNAME='" . $username . "' and l.ID_LOG=u.ID_LOG");
        if ($rowid = mysql_fetch_array($consIdUs)) {
            $_SESSION['idUS'] = $rowid['ID_US'];
        }
        echo $_SESSION['idUS'];
    } else {
        header("Location: ../login/login.php");
        exit();
    }
    include"inc/inc_footer.php";
    ?>

