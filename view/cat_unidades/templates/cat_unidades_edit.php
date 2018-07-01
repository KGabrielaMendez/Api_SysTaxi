<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_unidades.php">Listado</a></li>
 <li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
<br/>
<br/>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID COOP</label>
<div class="form-group">
<select value="ID_COOP" style="width:100%; height: 40px">
                <?php
                $mysqli = mysqli_connect('localhost', 'root', '', 'systaxi');
                $consulta = "SELECT NOMBRE_COOP, c.ID_COOP from cat_cooperativas c, cat_unidades u where c.ID_COOP=u.ID_COOP";
                if($res = mysqli_query($mysqli, $consulta)){
                while($fila = mysqli_fetch_row($res)){
                ?>
                <option id="<?php echo $fila[1]; ?>"><?php echo $fila[0]; ?></option>
                
                <?php
                }
                }
                ?>"  </select>
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">PLACA UNI</label>
<div class="form-group">
<input type="text" name="PLACA_UNI" class="form-control" value="<?php echo $PLACA_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIPO UNI</label>
<div class="form-group">
<input type="text" name="TIPO_UNI" class="form-control" value="<?php echo $TIPO_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">MARCA UNI</label>
<div class="form-group">
<input type="text" name="MARCA_UNI" class="form-control" value="<?php echo $MARCA_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">MODELO UNI</label>
<div class="form-group">
<input type="text" name="MODELO_UNI" class="form-control" value="<?php echo $MODELO_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">ANIO UNI</label>
<div class="form-group">
<input type="text" name="ANIO_UNI" class="form-control" value="<?php echo $ANIO_UNI?>" />
</div>
<label style="text-transform: capitalize; width: 150px; font-weight: bold;">NUMERO UNI</label>
<div class="form-group">
<input type="text" name="NUMERO_UNI" class="form-control" value="<?php echo $NUMERO_UNI?>" />
</div>

<input type="hidden" name="option" value="update">
<input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
</form></div>


<?php include"inc/inc_footer.php"; ?>
