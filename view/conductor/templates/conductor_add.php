
<?php include"inc/inc_head.php"; ?>
<ul class="breadcrumb">
    <li><a href="conductor.php">Listado</a></li>
    <li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
    <form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
        <?php echo $msg; ?>
        <br/>
        <br/>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">USUARIO</label>
        <div class="form-group">
            <input type="hidden" name="ID_US" class="form-control" value="<?php echo isset($_REQUEST["ID_US"]) ? $_REQUEST["ID_US"] : ''; ?>" />
<!--            <select name="ID_US" class="locationMultiple form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>-->
            <select value="ID_US" name="ID_US" style="width:100%; height: 40px">
                <?php
                $mysqli = mysqli_connect('localhost', 'root', '', 'systaxi');
                $consulta = "SELECT NOMBRE_US, ID_US from cat_usuarios";
                if ($res = mysqli_query($mysqli, $consulta)) {
                    while ($fila = mysqli_fetch_row($res)) {
                        
                        ?>
                        
                        <option name="ID_US" value="<?phpecho $fila[1];?>"><?php echo $fila[0]; ?></option>
                        <?php
                    }
                }
                ?>"  </select>
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">PLACA DEL AUTO</label>
        <div class="form-group">
            <input type="hidden" name="ID_UNI" class="form-control" value="<?php echo isset($_REQUEST["ID_UNI"]) ? $_REQUEST["ID_UNI"] : ''; ?>" />
            <select value="ID_UNI" name="ID_UNI" style="width:100%; height: 40px">
                <?php
                $mysqli = mysqli_connect('localhost', 'root', '', 'systaxi');
                $consulta = "SELECT PLACA_UNI, ID_UNI from cat_unidades";
                if ($res = mysqli_query($mysqli, $consulta)) {
                    while ($fila = mysqli_fetch_row($res)) {
                        
                        ?>
                        
                        <option name="ID_UNI" value="<?phpecho $fila[1];?>"><?php echo $fila[0]; ?></option>
                        <?php
                    }
                }
                ?>"  </select>
        </div>
        <input type="hidden" name="option" value="insert">
        <input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
    </form></div>
<?php include"inc/inc_footer.php"; ?>