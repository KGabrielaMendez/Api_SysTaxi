<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../view/mainCliente.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<a href="cat_encomienda.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID US</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">IDCONDUCTOR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">TIPO ENCOMIENDA</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION ENC</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DISTANCIAMIN ENC</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">TIEMPOESPERAMIN ENC</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTOENC MAX ENC</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD ORIG</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD ORIG</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD DEST</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD DEST</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION ENC</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA ENC</th>
<th style="width: 128px;">Accion</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?php echo $result[$key]['ID_US']?></td>
<td><?php echo $result[$key]['IDCONDUCTOR']?></td>
<td><?php echo $result[$key]['TIPO_ENCOMIENDA']?></td>
<td><?php echo $result[$key]['DESCRIPCION_ENC']?></td>
<td><?php echo $result[$key]['DISTANCIAMIN_ENC']?></td>
<td><?php echo $result[$key]['TIEMPOESPERAMIN_ENC']?></td>
<td><?php echo $result[$key]['COSTOENC_MAX_ENC']?></td>
<td><?php echo $result[$key]['LATITUD_ORIG']?></td>
<td><?php echo $result[$key]['LONGITUD_ORIG']?></td>
<td><?php echo $result[$key]['LATITUD_DEST']?></td>
<td><?php echo $result[$key]['LONGITUD_DEST']?></td>
<td><?php echo $result[$key]['DIRECCION_ENC']?></td>
<td><?php echo $result[$key]['FECHA_ENC']?></td>
<td><a href="cat_encomienda.php?option=view&ID_ENCOMIENDA=<?php echo $result[$key]['ID_ENCOMIENDA']?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="cat_encomienda.php?option=edit&ID_ENCOMIENDA=<?php echo $result[$key]['ID_ENCOMIENDA']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="cat_encomienda.php?option=delete&ID_ENCOMIENDA=<?php echo $result[$key]['ID_ENCOMIENDA']?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}?>
</tbody>
</table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
