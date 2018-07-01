<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="conductor.php">Listado</a></li>
<li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID US</label>
<div class="form-group">
<input type="text" name="ID_US" class="form-control" value="<?php echo $ID_US?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID UNI</label>
<div class="form-group">
<input type="text" name="ID_UNI" class="form-control" value="<?php echo $ID_UNI?>" />
</div>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
</form></div>


<?php include"inc/inc_footer.php"; ?>
