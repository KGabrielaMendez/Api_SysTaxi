<?php include "../inc/inc_head.php";?>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<h1>ROLES DE USUARIO</h1>
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
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;
<a href='login.php' class="btn btn-danger" >Cancelar</a>
</form></div>


<?php include"inc/inc_footer.php"; ?>
