<?php include "../inc/inc_head.php" ; ?>
 <h1>COOPERATIVAS</h1>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE </label>
<div class="form-group">
<input type="text" name="NOMBRE_COOP" class="form-control" value="<?php echo $NOMBRE_COOP?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">CIUDAD </label>
<div class="form-group">
<input type="text" name="CIUDAD_COOP" class="form-control" value="<?php echo $CIUDAD_COOP?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">PAIS</label>
<div class="form-group">
<input type="text" name="PAIS_COOP" class="form-control" value="<?php echo $PAIS_COOP?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">N° UNIDADES </label>
<div class="form-group">
<input type="text" name="NUNIDADES_COOP" class="form-control" value="<?php echo $NUNIDADES_COOP?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA DE REGISTRO </label>
<div class="form-group">
    <input type="text" name="FECHAREGISTRO_COOP" class="form-control" value="<?php echo $FECHAREGISTRO_COOP?>" readonly="readonly"/>
</div>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;
<a href='cat_cooperativas.php' class="btn btn-danger">Cancelar</a>
</form></div>


<?php include"inc/inc_footer.php"; ?>
