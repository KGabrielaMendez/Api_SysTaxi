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
    <?php
     include_once '../../model/ModelConductores.php';
    session_start();
    $conductor= $_SESSION['conductor'];
        ?>
    <body>
        
        
        <table border="1">
            <tbody>
                <tr>
                    <td>NOMBRES Y APELLIDOS</td>
                    <td><?php echo $conductor->getNombre_us() ." ". $conductor->getApellido_us(); ?></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><?php echo $conductor->getEmail_us(); ?></td>
                </tr>
                <tr>
                    <td>NRO UNIDAD</td>
                    <td><?php echo $conductor->getNumero_uni(); ?></td>
                </tr>
                <tr>
                    <td>COMPAÑIA</td>
                    <td><?php echo $conductor->getNombre_coop(); ?></td>
                </tr>
                <tr>
                    <td>FECHA DE NACIMIENTO</td>
                    <td><?php echo $conductor->getFechanac_us(); ?></td>
                </tr>                
                <tr>
                    <td>TELEFONO</td>
                    <td><?php echo $conductor->getTelefono_us(); ?></td>
                </tr>
            </tbody>
        </table>

        <?php

        ?>
    </body>
</html>
