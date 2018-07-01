<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
<li><a href="login.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<a href="login.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID ROL</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">USERNAME</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">PASSWORD</th>
<th style="width: 128px;">Accion</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?php echo $result[$key]['ID_ROL']?></td>
<td><?php echo $result[$key]['USERNAME']?></td>
<td><?php echo $result[$key]['PASSWORD']?></td>
<td><a href="login.php?option=view&ID_LOG=<?php echo $result[$key]['ID_LOG']?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="login.php?option=edit&ID_LOG=<?php echo $result[$key]['ID_LOG']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="login.php?option=delete&ID_LOG=<?php echo $result[$key]['ID_LOG']?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}?>
</tbody>
</table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
