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
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID US</label>
<div class="form-group">
<input type="text" name="ID_US" class="form-control" value="<?php echo $ID_US?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">IDCONDUCTOR</label>
<div class="form-group">
<input type="text" name="IDCONDUCTOR" class="form-control" value="<?php echo $IDCONDUCTOR?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIPO ENCOMIENDA</label>
<div class="form-group">
<select name="TIPO_ENCOMIENDA" class="locationMultiple form-control">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION ENC</label>
<div class="form-group">
<input type="text" name="DESCRIPCION_ENC" class="form-control" value="<?php echo $DESCRIPCION_ENC?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DISTANCIAMIN ENC</label>
<div class="form-group">
<input type="text" name="DISTANCIAMIN_ENC" class="form-control" value="<?php echo $DISTANCIAMIN_ENC?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIEMPOESPERAMIN ENC</label>
<div class="form-group">
<input type="text" name="TIEMPOESPERAMIN_ENC" class="form-control" value="<?php echo $TIEMPOESPERAMIN_ENC?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTOENC MAX ENC</label>
<div class="form-group">
<input type="text" name="COSTOENC_MAX_ENC" class="form-control" value="<?php echo $COSTOENC_MAX_ENC?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD ORIG</label>
<div class="form-group">
<input type="text" name="LATITUD_ORIG" class="form-control" value="<?php echo $LATITUD_ORIG?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD ORIG</label>
<div class="form-group">
<input type="text" name="LONGITUD_ORIG" class="form-control" value="<?php echo $LONGITUD_ORIG?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD DEST</label>
<div class="form-group">
<input type="text" name="LATITUD_DEST" class="form-control" value="<?php echo $LATITUD_DEST?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD DEST</label>
<div class="form-group">
<input type="text" name="LONGITUD_DEST" class="form-control" value="<?php echo $LONGITUD_DEST?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION ENC</label>
<div class="form-group">
<input type="text" name="DIRECCION_ENC" class="form-control" value="<?php echo $DIRECCION_ENC?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA ENC</label>
<div class="form-group">
<input type="date" class="form-control" id="datepicker" name="FECHA_ENC"  value="<?php echo $FECHA_ENC?>" />
</div>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
</form></div>


<?php include"inc/inc_footer.php"; ?>
