<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_encomienda.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
</form></div>


<?php include"inc/inc_footer.php"; ?>
