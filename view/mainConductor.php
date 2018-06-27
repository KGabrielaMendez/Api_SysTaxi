<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
         $username=$_SESSION['username'];
                            ?>
        <table border="1">
            <tbody>
                <tr>
                    <td><form  action="../controller/controllerConductores.php">
                             <input type="hidden" name="username" value="<?php echo $username;?>">
                            <input type="hidden" value="perfil" name="opcion">
                            <input type="submit" value="Perfil" />
                        </form></td>
                    <td><form  action="">
                            <input type="submit" value="Notificaciones" />
                        </form></td>
                        <td><form  action="">
                            <input type="submit" value="Tarifas" />
                        </form></td>
                </tr>
            </tbody>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
