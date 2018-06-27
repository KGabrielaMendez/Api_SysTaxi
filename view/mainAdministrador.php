<!DOCTYPE html>
<?php
session_start();
if($_SESSION['administrador']=="1"){
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        
    </head>
    <body>
        <table border="1">
            <tbody>
                <tr>
                    <td><form  action="../controller/controllerAdministrador.php">
                            <input type="hidden" value="clientes" name="opcion" />
                            <input type="submit" value="Clientes" />
                        </form></td>
                        <td><form  action="../controller/controllerAdministrador.php">
                            <input type="hidden" value="conductores" name="opcion" />
                            <input type="submit" value="Conductores" />
                        </form></td>
                    <td><form  action="">
                            <input type="submit" value="Unidades" />
                        </form></td>
                </tr>
                <tr>
                    <td><form  action="">
                            <input type="submit" value="Companias" />
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
<?php
} 
else{
    header("Location: index.html");
    exit();
} ?>