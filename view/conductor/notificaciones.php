<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../view/mainConductor.php">Inicio</a></li>
</ul>
    <?php
     include_once '../../model/ModelConductores.php';
    session_start();
//    $conductor= $_SESSION['conductor'];
        ?>
    <h3>ENCOMIENDAS</h3>
    <body>
       <table border="1">
            <tr>
                <th>DETALLE ENCOMIENDA</th>
                <th>NOMBRE </th>
                <th>APELLIDO </th>
                <th>DIRECCION ENCOMIENDA</th>

            </tr>
            <?php
                    include_once '../../model/entidades/Pedidos.php';
    //verificamos si existe en sesion el listado de productos:
            if (isset($_SESSION['listado'])) {
                $listado = unserialize($_SESSION['listado']);
                foreach ($listado as $r) {
                    echo "<tr>";
                    echo "<td>" . $r->getDescripcionPedido() . "</td>";
                                        echo "<td>" . $r->getNombre() . "</td>";
                    echo "<td>" . $r->getApellido() . "</td>";


                    echo "<td>" . $r->getDireccionPedido() . "</td>";

                    echo "</tr>";
                }
            } else {
                echo "No se han cargado datos.";
            }
            ?>
        </table>
 <h3>CARRERAS</h3>
    <body>
       <table border="1">
            <tr>
                <th>DETALLE CARRERA</th>
                <th>NOMBRE </th>
                <th>APELLIDO </th>
                <th>DIRECCION CARRERA</th>

            </tr>
            <?php
                    include_once '../../model/entidades/Pedidos.php';
    //verificamos si existe en sesion el listado de productos:
            if (isset($_SESSION['listadoC'])) {
                $listado = unserialize($_SESSION['listadoC']);
                foreach ($listado as $r) {
                    echo "<tr>";
                    echo "<td>" . $r->getDescripcionPedido() . "</td>";
                                        echo "<td>" . $r->getNombre() . "</td>";
                    echo "<td>" . $r->getApellido() . "</td>";


                    echo "<td>" . $r->getDireccionPedido() . "</td>";

                    echo "</tr>";
                }
            } else {
                echo "No se han cargado datos.";
            }
            ?>
        </table>
        <?php

        ?>
    </body>
</html>
