<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
<li><a href="cat_carrera.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<a href="cat_carrera.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID PEDIDO</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION CAR</th>
<!--<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DISTANCIA CAR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">TIEMPOESPERAMIN CAR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTO CAR</th>-->
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD CAR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD CAR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION CAR</th>
<th style="width: 128px;">Accion</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?php echo $result[$key]['ID_PEDIDO']?></td>
<td><?php echo $result[$key]['DESCRIPCION_CAR']?></td>
<!--<td><?php // echo $result[$key]['DISTANCIA_CAR']?></td>
<td><?php // echo $result[$key]['TIEMPOESPERAMIN_CAR']?></td>
<td><?php // echo $result[$key]['COSTO_CAR']?></td>-->
<td><?php echo $result[$key]['LATITUD_CAR']?></td>
<td><?php echo $result[$key]['LONGITUD_CAR']?></td>
<td><?php echo $result[$key]['DIRECCION_CAR']?></td>
<td><a href="cat_carrera.php?option=view&ID_CARRERA=<?php echo $result[$key]['ID_CARRERA']?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="cat_carrera.php?option=edit&ID_CARRERA=<?php echo $result[$key]['ID_CARRERA']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="cat_carrera.php?option=delete&ID_CARRERA=<?php echo $result[$key]['ID_CARRERA']?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}?>
</tbody>
</table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
