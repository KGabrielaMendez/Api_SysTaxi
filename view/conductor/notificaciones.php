<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include "../inc/inc_head.php"?>
<script>setTimeout('document.location.reload()',10000); </script>

<?php
include_once '../../model/ModelConductores.php';
$mconductores = new ModelConductores();
$listado = $mconductores->getEcomiendas();       
        $listadoC = $mconductores->getCarreras();

        //y los guardamos en sesion:
        $_SESSION['listado'] = serialize($listado);
        $_SESSION['listadoC'] = serialize($listadoC);
        
//    $conductor= $_SESSION['conductor'];
//$username = $_SESSION['username'];
?>
<h3>ENCOMIENDAS</h3>
   <style>
            body{
                font-family: ‘Open Sans’, sans-serif;
            }
            table {
                width: 80%;
                border-collapse: collapse;
            }
            table, td, th {
                border-bottom: 8px solid #F1F1F1;
            }

            th{
                text-align: left;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 5px;
            }
            .header-text{
                height: auto;
                padding: 15px;
                background-color:#5A9EA6;
                color: white;
                border: 2px solid #F1F1F1;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }

            .container
            {
                padding: 100px;
            }

            .table{
                padding: 25px;
                background-color: #F1F1F1;
            }

            td
            {
                background-color: white;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 5px;
            }
            a {
                font-size: 20px;
                color: #C8C8C8;
            }

        </style>
<body>
    <!--<a href="../../controller/"-->
    <table >
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
                echo "<td>" . $r->getId() . "</td>";
                echo "<td>" . $r->getNombre() . "</td>";
                echo "<td>" . $r->getApellido() . "</td>";
                echo "<td>" . $r->getTelefono() . "</td>";
                echo "<td>" . $r->getDireccionPedido() . "</td>";
                echo "<td>" . $r->getDescripcionPedido() . "</td>";
                echo "<td><a href='../../controller/controllerConductores.php?opcion=aceptarE&id=" . $r->getId() . "'><span class='glyphicon glyphicon-pencil'> Aceptar
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
    <table>
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
        echo "<td>" . $r->getId() . "</td>";
        echo "<td>" . $r->getNombre() . "</td>";
        echo "<td>" . $r->getApellido() . "</td>";
        echo "<td>" . $r->getTelefono() . "</td>";
        echo "<td>" . $r->getDireccionPedido() . "</td>";
        echo "<td>" . $r->getDescripcionPedido() . "</td>";
        echo "<td><a href='../../controller/controllerConductores.php?opcion=aceptarC&id=" . $r->getId() . "'><span class='glyphicon glyphicon-pencil'> Aceptar
                        </span></a></td>";
        echo "</tr>";
    }
} else {
    echo "No se han cargado datos.";
}
?>
        
    </table>
    <?php include "./inc/inc_footer.php"; ?>
        <?php
        ?>
</body>
</html>
