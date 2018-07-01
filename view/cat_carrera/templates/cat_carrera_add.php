<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_carrera.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION CAR</label>
<div class="form-group">
<input type="text" name="DESCRIPCION_CAR" class="form-control" value="<?php echo isset($_REQUEST["DESCRIPCION_CAR"]) ? $_REQUEST["DESCRIPCION_CAR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DISTANCIA CAR</label>
<div class="form-group">
<input type="text" name="DISTANCIA_CAR" class="form-control" value="<?php echo isset($_REQUEST["DISTANCIA_CAR"]) ? $_REQUEST["DISTANCIA_CAR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIEMPOESPERAMIN CAR</label>
<div class="form-group">
<input type="text" name="TIEMPOESPERAMIN_CAR" class="form-control" value="<?php echo isset($_REQUEST["TIEMPOESPERAMIN_CAR"]) ? $_REQUEST["TIEMPOESPERAMIN_CAR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTO CAR</label>
<div class="form-group">
<input type="text" name="COSTO_CAR" class="form-control" value="<?php echo isset($_REQUEST["COSTO_CAR"]) ? $_REQUEST["COSTO_CAR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD CAR</label>
<div class="form-group">
<input type="text" name="LATITUD_CAR" class="form-control" value="<?php echo isset($_REQUEST["LATITUD_CAR"]) ? $_REQUEST["LATITUD_CAR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD CAR</label>
<div class="form-group">
<input type="text" name="LONGITUD_CAR" class="form-control" value="<?php echo isset($_REQUEST["LONGITUD_CAR"]) ? $_REQUEST["LONGITUD_CAR"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION CAR</label>
<div class="form-group">
<input type="text" name="DIRECCION_CAR" class="form-control" value="<?php echo isset($_REQUEST["DIRECCION_CAR"]) ? $_REQUEST["DIRECCION_CAR"] : ''; ?>" />
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
</form></div>
<?php include"inc/inc_footer.php"; ?>
