<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="login.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID ROL</label>



<div class="form-group">
<select name="ID_ROL">
    <option value="1">Administrador</option>
    <option value="2">Cliente</option>
    <option value="3">Conductor</option>
</select>
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">USERNAME</label>
<div class="form-group">
<input type="text" name="USERNAME" class="form-control" value="<?php echo $USERNAME?>" readonly="readonly"/>
</div>
<div class="form-group">
<input type="hidden" name="PASSWORD" class="form-control" value="<?php echo $PASSWORD?>" readonly="readonly"/>
</div>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
</form></div>


<?php include"inc/inc_footer.php"; ?>
