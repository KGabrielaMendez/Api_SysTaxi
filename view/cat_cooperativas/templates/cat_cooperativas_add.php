<?php include "../inc/inc_head.php" ; ?>
 
<h1>Nueva Cooperativa</h1>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE </label>
<div class="form-group">
<input type="text" name="NOMBRE_COOP" class="form-control" value="<?php echo isset($_REQUEST["NOMBRE_COOP"]) ? $_REQUEST["NOMBRE_COOP"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">CIUDAD </label>
<div class="form-group">
<input type="text" name="CIUDAD_COOP" class="form-control" value="<?php echo isset($_REQUEST["CIUDAD_COOP"]) ? $_REQUEST["CIUDAD_COOP"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">PAIS </label>
<div class="form-group">
<input type="text" name="PAIS_COOP" class="form-control" value="<?php echo isset($_REQUEST["PAIS_COOP"]) ? $_REQUEST["PAIS_COOP"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">N° UNIDADES </label>
<div class="form-group">
<input type="text" name="NUNIDADES_COOP" class="form-control"  />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA DE REGISTRO </label>
<div class="form-group">
<input type="text" name="FECHAREGISTRO_COOP" class="form-control" value="<?php echo date('Y-m-d G:i:s')?>" readonly="readonly"/>
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;
<a href='cat_cooperativas.php' class="btn btn-danger">Cancelar</a>
</form></div>
<?php include"inc/inc_footer.php"; ?>
