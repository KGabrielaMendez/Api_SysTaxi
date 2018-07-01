<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
<li><a href="cat_pedidos.php">Listado</a></li>
<li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<a href="cat_pedidos.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID ENCOMIENDA</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID CARRERA</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">IDCONDUCTOR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID US</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA</th>
<th style="width: 128px;">Accion</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?php echo $result[$key]['ID_ENCOMIENDA']?></td>
<td><?php echo $result[$key]['ID_CARRERA']?></td>
<td><?php echo $result[$key]['IDCONDUCTOR']?></td>
<td><?php echo $result[$key]['ID_US']?></td>
<td><?php echo $result[$key]['FECHA']?></td>
<td><a href="cat_pedidos.php?option=view&ID_PEDIDO=<?php echo $result[$key]['ID_PEDIDO']?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="cat_pedidos.php?option=edit&ID_PEDIDO=<?php echo $result[$key]['ID_PEDIDO']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="cat_pedidos.php?option=delete&ID_PEDIDO=<?php echo $result[$key]['ID_PEDIDO']?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}?>
</tbody>
</table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
