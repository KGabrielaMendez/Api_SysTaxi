<!DOCTYPE html>

<?php

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <?php
     include_once '../../model/ModelClientes.php';
    session_start();
    $conductor= $_SESSION['cliente'];
        ?>
    <body>
        
        
        <table border="1">
            <tbody>
                <tr>
                    <td>NOMBRED DE USUARIO</td>
                    <td><?php echo $conductor->getUsername(); ?></td>
                </tr>
                <tr>
                    <td>NOMBRES Y APELLIDOS</td>
                    <td><?php echo $conductor->getNombre_us() ." ". $conductor->getApellido_us(); ?></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><?php echo $conductor->getEmail_us(); ?></td>
                </tr>
                <tr>
                    <td>DIRECCION</td>
                    <td><?php echo $conductor->getDireccion_us(); ?></td>
                </tr>
                <tr>
                    <td>FECHA DE NACIMIENTO</td>
                    <td><?php echo $conductor->getFechanac_us(); ?></td>
                </tr>
            </tbody>
        </table>

        <?php

        ?>
    </body>
</html>
<?php
//} 
//else{
//    header("Location: index.html");
//    exit();
//} ?>
