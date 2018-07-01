<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['rolUsuario'] == "2") {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">

            <style type="text/css">
                .normal {
                    text-align: center;
                    width: 50%;
                    height: 400px;
                    border: 1px solid #000;
                    border-collapse: collapse;
                }


                button {
                    background-color: #330000;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    cursor: pointer;
                    width: 75%;
                    height: 300px;
                }

                button:hover {
                    opacity: 0.8;
                }

            </style>
            <title></title>
        </head>
        <body>
            <div >
                <div >   
                        <form  action="../controller/controllerAdministrador.php">
                        <input type="hidden" value="cerrarSesion" name="opcion">
                        <input type=submit value="cerrar Sesion" name="cerrarSesion"/>
                    </form>
                </div>
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
                                <button type="submit" value="Perfil" >Perfil </button>
                            </form>
                        </td>
                        <td style="width: 175px;">
                            <form  action="">
                                <button type="submit" value="Servicios" >Servicios </button>
                            </form></td>
                    </tr>
                    <tr style="width: 175px;">
                        <td style="width: 175px;"><form  action="../controller/controllerClientes.php">
                                <input type="hidden" value="qsomos" name="opcion">
                                <button type="submit" value="Quienes Somos">Quienes Somos</button>
                            </form></td>
                        <td><form  action="">
                                <button type="submit" value="Tarifas" >TARIFAS</button>
                            </form></td>
                    </tr>
                </tbody>
            </table>

            <?php
            // put your code here
            ?>
        </body>
    </html>
    <?php
} else {
    header("Location: ../login/login.php");
    exit();
}
?>
