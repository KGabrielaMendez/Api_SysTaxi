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
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">IDTIPOENCOM</label>
<div class="form-group">
<select name="IDTIPOENCOM" class="locationMultiple form-control">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID PEDIDO</label>
<div class="form-group">
<select name="ID_PEDIDO" class="locationMultiple form-control">
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
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">PESOMAXKG ENC</label>
<div class="form-group">
<input type="text" name="PESOMAXKG_ENC" class="form-control" value="<?php echo $PESOMAXKG_ENC?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTOENC MAX ENC</label>
<div class="form-group">
<input type="text" name="COSTOENC_MAX_ENC" class="form-control" value="<?php echo $COSTOENC_MAX_ENC?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD ENC</label>
<div class="form-group">
<input type="text" name="LATITUD_ENC" class="form-control" value="<?php echo $LATITUD_ENC?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD ENC</label>
<div class="form-group">
<input type="text" name="LONGITUD_ENC" class="form-control" value="<?php echo $LONGITUD_ENC?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION ENC</label>
<div class="form-group">
<input type="text" name="DIRECCION_ENC" class="form-control" value="<?php echo $DIRECCION_ENC?>" />
</div>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
</form></div>


<?php include"inc/inc_footer.php"; ?>
