<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_cooperativas.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE COOP</label>
<div class="form-group">
<input type="text" name="NOMBRE_COOP" class="form-control" value="<?php echo $NOMBRE_COOP?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">CIUDAD COOP</label>
<div class="form-group">
<input type="text" name="CIUDAD_COOP" class="form-control" value="<?php echo $CIUDAD_COOP?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">PAIS COOP</label>
<div class="form-group">
<input type="text" name="PAIS_COOP" class="form-control" value="<?php echo $PAIS_COOP?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">NUNIDADES COOP</label>
<div class="form-group">
<input type="text" name="NUNIDADES_COOP" class="form-control" value="<?php echo $NUNIDADES_COOP?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHAREGISTRO COOP</label>
<div class="form-group">
<input type="text" name="FECHAREGISTRO_COOP" class="form-control" value="<?php echo $FECHAREGISTRO_COOP?>" />
</div>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
</form></div>


<?php include"inc/inc_footer.php"; ?>
