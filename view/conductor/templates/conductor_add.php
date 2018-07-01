<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="conductor.php">Listado</a></li>
<li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID US</label>
<div class="form-group">
<input type="text" name="ID_US" class="form-control" value="<?php echo isset($_REQUEST["ID_US"]) ? $_REQUEST["ID_US"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID UNI</label>
<div class="form-group">
<input type="text" name="ID_UNI" class="form-control" value="<?php echo isset($_REQUEST["ID_UNI"]) ? $_REQUEST["ID_UNI"] : ''; ?>" />
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
</form></div>
<?php include"inc/inc_footer.php"; ?>
