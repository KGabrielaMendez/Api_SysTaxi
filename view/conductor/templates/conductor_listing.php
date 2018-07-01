<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
<li><a href="conductor.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<a href="conductor.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID US</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID UNI</th>
<th style="width: 128px;">Accion</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?php echo $result[$key]['ID_US']?></td>
<td><?php echo $result[$key]['ID_UNI']?></td>
<td><a href="conductor.php?option=view&IDCONDUCTOR=<?php echo $result[$key]['IDCONDUCTOR']?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="conductor.php?option=edit&IDCONDUCTOR=<?php echo $result[$key]['IDCONDUCTOR']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="conductor.php?option=delete&IDCONDUCTOR=<?php echo $result[$key]['IDCONDUCTOR']?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}?>
</tbody>
</table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
