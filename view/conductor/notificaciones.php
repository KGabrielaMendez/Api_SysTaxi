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
//$username = $_SESSION['username'];
?>
<h3>ENCOMIENDAS</h3>
<body>
    <!--<a href="../../controller/"-->
    <table border="1">
        <tr>
            <th>ID</th>           
            <th>NOMBRE </th>
            <th>APELLIDO </th>
            <th>TELEFONO </th>
            <th>DIRECCION ENCOMIENDA</th>
            <th>DETALLE ENCOMIENDA</th>
            <th>OPCIÓN</th>
        </tr>
        <?php
        include_once '../../model/entidades/Pedidos.php';
        //verificamos si existe en sesion el listado de productos:
        if (isset($_SESSION['listado'])) {
            $listado = unserialize($_SESSION['listado']);
                        foreach ($listado as $r) {
                echo "<tr>";
                echo "<td>"  .$r->getId(). "</td>";
                echo "<td>" . $r->getNombre() . "</td>";
                echo "<td>" . $r->getApellido() . "</td>";
                echo "<td>" . $r->getTelefono() . "</td>";
                echo "<td>" . $r->getDireccionPedido() . "</td>";
                echo "<td>" . $r->getDescripcionPedido() . "</td>";
                echo "<td><a href='../../controller/controllerConductores.php?opcion=aceptarE&id=".$r->getId()."'><span class='glyphicon glyphicon-pencil'> Aceptar
                        </span></a></td>";
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
            <th>ID</th>           
            <th>NOMBRE </th>
            <th>APELLIDO </th>
            <th>TELEFONO </th>
            <th>DIRECCION CARRERA</th>
            <th>DETALLE CARRERA</th>
            <th>OPCIÓN</th>
        </tr>
        <?php
        include_once '../../model/entidades/Pedidos.php';
        //verificamos si existe en sesion el listado de productos:
        if (isset($_SESSION['listadoC'])) {
            $listado = unserialize($_SESSION['listadoC']);
            foreach ($listado as $r) {
                echo "<tr>";
                echo "<td>" . $r->getId(). "</td>";
                echo "<td>" . $r->getNombre() . "</td>";
                echo "<td>" . $r->getApellido() . "</td>";
                echo "<td>" . $r->getTelefono() . "</td>";
                echo "<td>" . $r->getDireccionPedido() . "</td>";
                echo "<td>" . $r->getDescripcionPedido() . "</td>";         
                echo "<td><a href='../../controller/controllerConductores.php?opcion=aceptarC&id=".$r->getId()."'><span class='glyphicon glyphicon-pencil'> Aceptar
                        </span></a></td>";
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
