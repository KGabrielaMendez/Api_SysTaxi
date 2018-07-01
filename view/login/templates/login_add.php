<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="login.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID ROL</label>
<div class="form-group">
<input type="text" name="ID_ROL" class="form-control" value="<?php echo isset($_REQUEST["ID_ROL"]) ? $_REQUEST["ID_ROL"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">USERNAME</label>
<div class="form-group">
<input type="text" name="USERNAME" class="form-control" value="<?php echo isset($_REQUEST["USERNAME"]) ? $_REQUEST["USERNAME"] : ''; ?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">PASSWORD</label>
<div class="form-group">
<input type="text" name="PASSWORD" class="form-control" value="<?php echo isset($_REQUEST["PASSWORD"]) ? $_REQUEST["PASSWORD"] : ''; ?>" />
</div>
<input type="hidden" name="option" value="insert">
<input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
</form></div>
<?php include"inc/inc_footer.php"; ?>
