<?php
if (isset($msg)) {
    echo $msg;
}
?>
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
    <li><a href="conductor.php">Listado</a></li>
    <li><a href="../../view/mainConductor.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
    <!--<a href="conductor.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>-->
    </a><br />
    <br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE USUARIO</th>
                <th style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE</th>
                <th style="text-transform: capitalize; width: 150px; font-weight: bold;">APELLIDO</th>
                <th style="text-transform: capitalize; width: 150px; font-weight: bold;">EMAIL</th>
                <th style="text-transform: capitalize; width: 150px; font-weight: bold;">COOPERATIVA</th>
                <th style="text-transform: capitalize; width: 150px; font-weight: bold;">NÚMERO DE UNIDAD</th>
                <th style="text-transform: capitalize; width: 150px; font-weight: bold;">TELEFONO</th>
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
                    <td><?php echo $result[$key]['NOMBRE_COOP'] ?></td>
                    <td><?php echo $result[$key]['NUMERO_UNI'] ?></td>
                    <td><?php echo $result[$key]['TELEFONO_US'] ?></td>           
                    <td><?php echo $result[$key]['FECHANAC_US'] ?></td>
                    <!--<td><a href="conductor.php?option=view&IDCONDUCTOR=<?php //echo $result[$key]['IDCONDUCTOR'] ?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="conductor.php?option=edit&IDCONDUCTOR=<?php //echo $result[$key]['IDCONDUCTOR'] ?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="conductor.php?option=delete&IDCONDUCTOR=<?php //echo $result[$key]['IDCONDUCTOR'] ?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>-->
                    
                    <td><a href="conductor.php?option=view&ID_US=<?php echo $result[$key]['ID_US'] ?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="conductor.php?option=edit&ID_US=<?php echo $result[$key]['ID_US']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;</td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
