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
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">IDTIPOENCOM</label>
<div class="form-group">
<input type="text" name="IDTIPOENCOM" class="form-control" value="<?php echo isset($_REQUEST["IDTIPOENCOM"]) ? $_REQUEST["IDTIPOENCOM"] : ''; ?>" />
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
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">PESOMAXKG ENC</label>
<div class="form-group">
<input type="text" name="PESOMAXKG_ENC" class="form-control" value="<?php echo isset($_REQUEST["PESOMAXKG_ENC"]) ? $_REQUEST["PESOMAXKG_ENC"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTOENC MAX ENC</label>
<div class="form-group">
<input type="text" name="COSTOENC_MAX_ENC" class="form-control" value="<?php echo isset($_REQUEST["COSTOENC_MAX_ENC"]) ? $_REQUEST["COSTOENC_MAX_ENC"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD ENC</label>
<div class="form-group">
<input type="text" name="LATITUD_ENC" class="form-control" value="<?php echo isset($_REQUEST["LATITUD_ENC"]) ? $_REQUEST["LATITUD_ENC"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD ENC</label>
<div class="form-group">
<input type="text" name="LONGITUD_ENC" class="form-control" value="<?php echo isset($_REQUEST["LONGITUD_ENC"]) ? $_REQUEST["LONGITUD_ENC"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION ENC</label>
<div class="form-group">
<input type="text" name="DIRECCION_ENC" class="form-control" value="<?php echo isset($_REQUEST["DIRECCION_ENC"]) ? $_REQUEST["DIRECCION_ENC"] : ''; ?>" />
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
</form></div>
<?php include"inc/inc_footer.php"; ?>
