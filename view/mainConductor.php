<!DOCTYPE html>
 <?php
         session_start();
         if($_SESSION['rolUsuario']=="3"){
         $username=$_SESSION['username'];
                            ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<!--        <div id="wrapper">
    <div id="header">   </div>
        <div id="content">
            <div id="leftbar">  </div>
            <div id="rightbar"> </div>
        </div>
</div>-->
<div id="footer">  </div> 
        
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
         }
         else{
              header("Location: ../login/login.php");
    exit();
         }
        ?>
    </body>
</html>
