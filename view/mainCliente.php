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
//                            $username=$_SESSION['username'];
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
        } else {
            header("Location: ../login/login.php");
            exit();
        }
        ?>

