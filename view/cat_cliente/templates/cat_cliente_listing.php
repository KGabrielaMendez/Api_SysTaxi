<?php
if (isset($msg)) {
    echo $msg;
}
?>
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
       <li><a href="cat_cliente.php">Listado/</li>
     <li><a href="../../view/mainCliente.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<!--<a href="cat_cliente.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>-->
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE USUARIO</th>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE</th>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">APELLIDO</th>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">EMAIL</th>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">TELEFONO</th>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION</th>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA DE NACIMIENTO</th>
            <!--<th style="text-transform: capitalize; width: 150px; font-weight: bold;">GENERO US</th>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION US</th>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHAREGISTRO US</th>
            <th style="text-transform: capitalize; width: 150px; font-weight: bold;">EMAIL US</th>-->
            <th style="width: 128px;">Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $key => $value) { ?>
            <tr>
                <td><?php echo $result[$key]['USERNAME'] ?></td>
                <td><?php echo $result[$key]['NOMBRE_US'] ?></td>
                <td><?php echo $result[$key]['APELLIDO_US'] ?></td>
                <td><?php echo $result[$key]['EMAIL_US'] ?></td>
                <td><?php echo $result[$key]['TELEFONO_US'] ?></td>
                <td><?php echo $result[$key]['DIRECCION_US'] ?></td>
                <td><?php echo $result[$key]['FECHANAC_US'] ?></td>
                <!--<td><?php //echo $result[$key]['GENERO_US'] ?></td>
                <td><?php //echo $result[$key]['DIRECCION_US'] ?></td>
                <td><?php //echo $result[$key]['FECHAREGISTRO_US'] ?></td>
                <td><?php //echo $result[$key]['EMAIL_US'] ?></td>-->
                <td><a href="cat_cliente.php?option=view&ID_US=<?php echo $result[$key]['ID_US'] ?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="cat_cliente.php?option=edit&ID_US=<?php echo $result[$key]['ID_US']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;</td>
            </tr>
            <?php }
        ?>
    </tbody>
</table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
