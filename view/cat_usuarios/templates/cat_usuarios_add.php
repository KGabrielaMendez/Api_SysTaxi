<?php include "../inc/inc_head.php"; ?>

<br/>
<div class="col-sm-12 col-md-12">
<form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID LOG</label>
<div class="form-group">
<input type="text" name="ID_LOG" class="form-control" value="<?php echo isset($_REQUEST["ID_LOG"]) ? $_REQUEST["ID_LOG"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE US</label>
<div class="form-group">
<input type="text" name="NOMBRE_US" class="form-control" value="<?php echo isset($_REQUEST["NOMBRE_US"]) ? $_REQUEST["NOMBRE_US"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">APELLIDO US</label>
<div class="form-group">
<input type="text" name="APELLIDO_US" class="form-control" value="<?php echo isset($_REQUEST["APELLIDO_US"]) ? $_REQUEST["APELLIDO_US"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHANAC US</label>
<div class="form-group">
<input type="text" name="FECHANAC_US" class="form-control" value="<?php echo isset($_REQUEST["FECHANAC_US"]) ? $_REQUEST["FECHANAC_US"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">CIUDAD US</label>
<div class="form-group">
<input type="text" name="CIUDAD_US" class="form-control" value="<?php echo isset($_REQUEST["CIUDAD_US"]) ? $_REQUEST["CIUDAD_US"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TELEFONO US</label>
<div class="form-group">
<input type="text" name="TELEFONO_US" class="form-control" value="<?php echo isset($_REQUEST["TELEFONO_US"]) ? $_REQUEST["TELEFONO_US"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">GENERO US</label>
<div class="form-group">
<input type="text" name="GENERO_US" class="form-control" value="<?php echo isset($_REQUEST["GENERO_US"]) ? $_REQUEST["GENERO_US"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION US</label>
<div class="form-group">
<input type="text" name="DIRECCION_US" class="form-control" value="<?php echo isset($_REQUEST["DIRECCION_US"]) ? $_REQUEST["DIRECCION_US"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHAREGISTRO US</label>
<div class="form-group">
<input type="text" name="FECHAREGISTRO_US" class="form-control" value="<?php echo isset($_REQUEST["FECHAREGISTRO_US"]) ? $_REQUEST["FECHAREGISTRO_US"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">EMAIL US</label>
<div class="form-group">
<input type="text" name="EMAIL_US" class="form-control" value="<?php echo isset($_REQUEST["EMAIL_US"]) ? $_REQUEST["EMAIL_US"] : ''; ?>" />
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;
    <a  href='cat_usuarios.php' class="btn btn-danger" value="Cancelar">Cancelar</a>
</form></div>
<?php include"inc/inc_footer.php"; ?>
