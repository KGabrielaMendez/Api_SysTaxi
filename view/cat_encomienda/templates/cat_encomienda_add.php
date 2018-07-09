<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_encomienda.php">Inicio</a></li>
<li class="active">Library</li>
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
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">IDCONDUCTOR</label>
<div class="form-group">
<input type="text" name="IDCONDUCTOR" class="form-control" value="<?php echo isset($_REQUEST["IDCONDUCTOR"]) ? $_REQUEST["IDCONDUCTOR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIPO ENCOMIENDA</label>
<div class="form-group">
<select name="TIPO_ENCOMIENDA"  class="locationMultiple form-control">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION ENC</label>
<div class="form-group">
<input type="text" name="DESCRIPCION_ENC" class="form-control" value="<?php echo isset($_REQUEST["DESCRIPCION_ENC"]) ? $_REQUEST["DESCRIPCION_ENC"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DISTANCIAMIN ENC</label>
<div class="form-group">
<input type="text" name="DISTANCIAMIN_ENC" class="form-control" value="<?php echo isset($_REQUEST["DISTANCIAMIN_ENC"]) ? $_REQUEST["DISTANCIAMIN_ENC"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIEMPOESPERAMIN ENC</label>
<div class="form-group">
<input type="text" name="TIEMPOESPERAMIN_ENC" class="form-control" value="<?php echo isset($_REQUEST["TIEMPOESPERAMIN_ENC"]) ? $_REQUEST["TIEMPOESPERAMIN_ENC"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTOENC MAX ENC</label>
<div class="form-group">
<input type="text" name="COSTOENC_MAX_ENC" class="form-control" value="<?php echo isset($_REQUEST["COSTOENC_MAX_ENC"]) ? $_REQUEST["COSTOENC_MAX_ENC"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD ORIG</label>
<div class="form-group">
<input type="text" name="LATITUD_ORIG" class="form-control" value="<?php echo isset($_REQUEST["LATITUD_ORIG"]) ? $_REQUEST["LATITUD_ORIG"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD ORIG</label>
<div class="form-group">
<input type="text" name="LONGITUD_ORIG" class="form-control" value="<?php echo isset($_REQUEST["LONGITUD_ORIG"]) ? $_REQUEST["LONGITUD_ORIG"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD DEST</label>
<div class="form-group">
<input type="text" name="LATITUD_DEST" class="form-control" value="<?php echo isset($_REQUEST["LATITUD_DEST"]) ? $_REQUEST["LATITUD_DEST"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD DEST</label>
<div class="form-group">
<input type="text" name="LONGITUD_DEST" class="form-control" value="<?php echo isset($_REQUEST["LONGITUD_DEST"]) ? $_REQUEST["LONGITUD_DEST"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION ENC</label>
<div class="form-group">
<input type="text" name="DIRECCION_ENC" class="form-control" value="<?php echo isset($_REQUEST["DIRECCION_ENC"]) ? $_REQUEST["DIRECCION_ENC"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA ENC</label>
<div class="form-group">
<input type="date" class="form-control" id="datepicker" name="FECHA_ENC" />
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
</form></div>
<?php include"inc/inc_footer.php"; ?>
