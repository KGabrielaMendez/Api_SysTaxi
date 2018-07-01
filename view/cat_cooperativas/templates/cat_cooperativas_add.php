<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_cooperativas.php">Listado</a></li>
<li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<h1>Nueva Cooperativa</h1>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE COOP</label>
<div class="form-group">
<input type="text" name="NOMBRE_COOP" class="form-control" value="<?php echo isset($_REQUEST["NOMBRE_COOP"]) ? $_REQUEST["NOMBRE_COOP"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">CIUDAD COOP</label>
<div class="form-group">
<input type="text" name="CIUDAD_COOP" class="form-control" value="<?php echo isset($_REQUEST["CIUDAD_COOP"]) ? $_REQUEST["CIUDAD_COOP"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">PAIS COOP</label>
<div class="form-group">
<input type="text" name="PAIS_COOP" class="form-control" value="<?php echo isset($_REQUEST["PAIS_COOP"]) ? $_REQUEST["PAIS_COOP"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">NUNIDADES COOP</label>
<div class="form-group">
<input type="text" name="NUNIDADES_COOP" class="form-control" value="0" readonly="readonly" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHAREGISTRO COOP</label>
<div class="form-group">
<input type="text" name="FECHAREGISTRO_COOP" class="form-control" value="<?php echo date('Y-m-d G:i:s')?>" readonly="readonly"/>
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
</form></div>
<?php include"inc/inc_footer.php"; ?>
