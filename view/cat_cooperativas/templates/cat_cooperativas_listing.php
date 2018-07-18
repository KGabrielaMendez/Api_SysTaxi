<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "../inc/inc_head.php" ; ?>
 <h1>COOPERATIVAS</h1>
<br/>
<div class="col-sm-12 col-md-12">
<a href="cat_cooperativas.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">CIUDAD</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">PAIS </th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">N° UNIDADES</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA DE REGISTRO</th>
<th style="width: 128px;">Accion</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?php echo $result[$key]['NOMBRE_COOP']?></td>
<td><?php echo $result[$key]['CIUDAD_COOP']?></td>
<td><?php echo $result[$key]['PAIS_COOP']?></td>
<td><?php echo $result[$key]['NUNIDADES_COOP']?></td>
<td><?php echo $result[$key]['FECHAREGISTRO_COOP']?></td>
<td><a href="cat_cooperativas.php?option=view&ID_COOP=<?php echo $result[$key]['ID_COOP']?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="cat_cooperativas.php?option=edit&ID_COOP=<?php echo $result[$key]['ID_COOP']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="cat_cooperativas.php?option=delete&ID_COOP=<?php echo $result[$key]['ID_COOP']?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}?>
</tbody>
</table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
