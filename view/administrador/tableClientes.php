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
        <h2>CLIENTES</h2>
        <table border="1">
                <tr>
                    <th>USERNAME</th>                   
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>E-MAIL</th>
                    <th>DIRECCION</th>
                    <th>FECHA_NACIM</th>
                    <!--<th>ACTUALIZAR</th>-->
                    <th>ELIMINAR</th>
                </tr>
                <?php
                session_start();
                include_once '../../model/ModelAdmin.php';
                //verificamos si existe en sesion el listado de productos:
                if (isset($_SESSION['listado'])) {
                    $listado = unserialize($_SESSION['listado']);
                    foreach ($listado as $r) {
                        echo "<tr>";
                         $r->getId();
                        echo "<td>" . $r->getUsername() . "</td>";
                        echo "<td>" . $r->getNombre_us() . "</td>";
                        echo "<td>" . $r->getApellido_us() . "</td>";
                        echo "<td>" . $r->getEmail_us() . "</td>";
                        echo "<td>" . $r->getDireccion_us() . "</td>";
                        echo "<td>" . $r->getFechanac_us() . "</td>";
                        
        //                echo "<td><a href='../../controller/controllerAdministrador.php?opcion=editar&cedula=" . $r->getId() . "'><span class='glyphicon glyphicon-pencil'> Editar
      //                </span></a></td>";
                      echo "<td><a href='../../controller/controllerAdministrador.php?opcion=eliminar&id=" . $r->getId() . "'>eliminar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No se han cargado datos.";
                }
                ?>
            </table>
        
        
            <form  action="../mainAdministrador.php">
                            <input type="submit" value="Regresar" />
                        </form>
                        
    </body>
</html>
