<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "../inc/inc_head.php"?>
<h1>LISTADO DE UNIDADES</h1>
<br/>
<div class="col-sm-12 col-md-12">
<a href="cat_unidades.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">COOPERATIVA</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">PLACA</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">TIPO </th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">MARCA</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">MODELO</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">AÑO</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">NUMERO</th>
<th style="width: 128px;">Accion</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?php echo $result[$key]['NOMBRE_COOP']?></td>
<td><?php echo $result[$key]['PLACA_UNI']?></td>
<td><?php echo $result[$key]['TIPO_UNI']?></td>
<td><?php echo $result[$key]['MARCA_UNI']?></td>
<td><?php echo $result[$key]['MODELO_UNI']?></td>
<td><?php echo $result[$key]['ANIO_UNI']?></td>
<td><?php echo $result[$key]['NUMERO_UNI']?></td>
<td><a href="cat_unidades.php?option=view&ID_UNI=<?php echo $result[$key]['ID_UNI']?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="cat_unidades.php?option=edit&ID_UNI=<?php echo $result[$key]['ID_UNI']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="cat_unidades.php?option=delete&ID_UNI=<?php echo $result[$key]['ID_UNI']?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}?>
</tbody>
</table><br />
</div>

<?php include "inc/inc_footer.php"; ?>
