<!DOCTYPE html>
<?php

include"inc/inc_head.php";
if ($_SESSION['rolUsuario'] == "1") {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Admin</title>
        
        </head>
        <body>
            <div id="wrapper">
                <div id="header">  
                    <h1>Taxi Encomienda</h1>
                   
                </div>

                <div id="content">

                    <div id="leftbar">  </div>
                    <table border="0" class="normal" >
                            <tbody>
                                <tr >
                                    <td style="width: 250px;">

                                        <form  action="../controller/controllerAdministrador.php">
                                            <input type="hidden" value="clientes" name="opcion" />
                                            <input type="image" name="clientes" src="cliente.jpg"
                                                   width="70%" alt="Clientes"/>
                                        </form>
                                    </td>

                                    <td style="width: 175px;">
                                        <form  action="../controller/controllerAdministrador.php">
                                            <input type="hidden" value="conductores" name="opcion" />
                                            <input type="image" name="conductores" src="conductores.jpg"
                                                   width="70%" alt="Conductores"/>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">
                                        <form  action="../controller/controllerAdministrador.php">
                                            <input type="hidden" value="unidades" name="opcion" />
                                            <input type="image" name="unidades" src="taxis.jpg" width="70%"
                                                   alt="Unidades"/>
                                        </form>
                                    </td>

                                    <td style="width: 175px;">
                                        <form  action="../controller/controllerAdministrador.php" >
                                            <input type="hidden" value="cooperativas" name="opcion" />
                                            <input type="image" name="cooperativas" src="cooperativas.jpg" width="70%"
                                                   alt="Cooperativas"/>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">
                                        <form  action="../controller/controllerAdministrador.php">
                                            <input type="hidden" value="nuevoAdmin" name="opcion" />
                                            <input type="image" alt="Añadir nuevos Administradores" src="nuevoAdmin.jpg" width="70%"/>
                                        </form>
                                    </td>
                                    <td><form  action="Tarifas.html">
                                 <input type="image" value="tarifas" src="img/tarifas.jpg" alt="tarifas" width="70%"/>
                            </form></td>
                                </tr>
                                <tr>
                                    <td style="width: 175px;">
                                        <form  action="../controller/controllerAdministrador.php">
                                            <input type="hidden" value="cerrarSesion" name="opcion">
                                            <input type=image alt="cerrar Sesion" src="salir.jpg" width="70%"/>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <div id="rightbar"> </div>

                </div>
            </div>

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