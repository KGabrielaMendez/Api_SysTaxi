<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_carrera.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
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
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION CAR</label>
<div class="form-group">
<input type="text" name="DESCRIPCION_CAR" class="form-control" value="<?php echo $DESCRIPCION_CAR?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DISTANCIA CAR</label>
<div class="form-group">
<input type="text" name="DISTANCIA_CAR" class="form-control" value="<?php echo $DISTANCIA_CAR?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIEMPOESPERAMIN CAR</label>
<div class="form-group">
<input type="text" name="TIEMPOESPERAMIN_CAR" class="form-control" value="<?php echo $TIEMPOESPERAMIN_CAR?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTO CAR</label>
<div class="form-group">
<input type="text" name="COSTO_CAR" class="form-control" value="<?php echo $COSTO_CAR?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD CAR</label>
<div class="form-group">
<input type="text" name="LATITUD_CAR" class="form-control" value="<?php echo $LATITUD_CAR?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD CAR</label>
<div class="form-group">
<input type="text" name="LONGITUD_CAR" class="form-control" value="<?php echo $LONGITUD_CAR?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION CAR</label>
<div class="form-group">
<input type="text" name="DIRECCION_CAR" class="form-control" value="<?php echo $DIRECCION_CAR?>" />
</div>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
</form></div>


<?php include"inc/inc_footer.php"; ?>
