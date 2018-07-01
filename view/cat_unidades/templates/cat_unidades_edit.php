<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_unidades.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID COOP</label>
<div class="form-group">
<input type="text" name="ID_COOP" class="form-control" value="<?php echo $ID_COOP?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">PLACA UNI</label>
<div class="form-group">
<input type="text" name="PLACA_UNI" class="form-control" value="<?php echo $PLACA_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIPO UNI</label>
<div class="form-group">
<input type="text" name="TIPO_UNI" class="form-control" value="<?php echo $TIPO_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">MARCA UNI</label>
<div class="form-group">
<input type="text" name="MARCA_UNI" class="form-control" value="<?php echo $MARCA_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">MODELO UNI</label>
<div class="form-group">
<input type="text" name="MODELO_UNI" class="form-control" value="<?php echo $MODELO_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ANIO UNI</label>
<div class="form-group">
<input type="text" name="ANIO_UNI" class="form-control" value="<?php echo $ANIO_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">NUMERO UNI</label>
<div class="form-group">
<input type="text" name="NUMERO_UNI" class="form-control" value="<?php echo $NUMERO_UNI?>" />
</div>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
</form></div>


<?php include"inc/inc_footer.php"; ?>
