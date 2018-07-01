<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
<li><a href="cat_rol.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<a href="cat_rol.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION</th>
<th style="width: 128px;">Accion</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?php echo $result[$key]['DESCRIPCION']?></td>
<td><a href="cat_rol.php?option=view&ID_ROL=<?php echo $result[$key]['ID_ROL']?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="cat_rol.php?option=edit&ID_ROL=<?php echo $result[$key]['ID_ROL']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="cat_rol.php?option=delete&ID_ROL=<?php echo $result[$key]['ID_ROL']?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}?>
</tbody>
</table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
