<script type="text/javascript">
    var select = document.getElementById('provincia');
select.addEventListener('change',
  function(){
    var selectedOption = this.options[select.selectedIndex];
    console.log(selectedOption.value + ': ' + selectedOption.text);
  });
 </script>
    
<?php include"inc/inc_head.php"; ?>
<ul class="breadcrumb">
    <li><a href="cat_unidades.php">Listado</a></li>
    <li><a href="../../view/mainAdministrador.php">Inicio</a></li>
    <!--    <li class="active">Library</li>-->
</ul>
<br/>
<div class="col-sm-12 col-md-12">
    <form name="frmAdd" id="frmAdd" action="" class="form-group" method="post" enctype="multipart/form-data">
        <?php echo $msg; ?>
        <br/>
        <br/>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">ID COOP</label>
        <div class="form-group">

            <select value="ID_COOP" name="ID_COOP" style="width:100%; height: 40px">
                <?php
                $mysqli = mysqli_connect('localhost', 'root', '', 'systaxi');
                $consulta = "SELECT NOMBRE_COOP, c.ID_COOP from cat_cooperativas c, cat_unidades u where c.ID_COOP=u.ID_COOP";
                if ($res = mysqli_query($mysqli, $consulta)) {
                    while ($fila = mysqli_fetch_row($res)) {
                        ?>
                        <option id="<?phpecho $fila[1];?>"><?php echo $fila[0]; ?></option>
                        <?php
                    }
                }
                ?>"  </select>
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">PLACA</label>
        <div class="form-group">
            <input type="text" name="PLACA_UNI" class="form-control" value="<?php echo isset($_REQUEST["PLACA_UNI"]) ? $_REQUEST["PLACA_UNI"] : ''; ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">TIPO</label>
        <div class="form-group">
            <select value="TIPO_UNI" style="width:100%; height: 40px">
                <option id="TAXI">TAXI</option>
                <option id="MOTO">MOTO</option>
            </select>
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">MARCA</label>
        <div class="form-group">
            <input type="text" name="MARCA_UNI" class="form-control" value="<?php echo isset($_REQUEST["MARCA_UNI"]) ? $_REQUEST["MARCA_UNI"] : ''; ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">MODELO</label>
        <div class="form-group">
            <input type="text" name="MODELO_UNI" class="form-control" value="<?php echo isset($_REQUEST["MODELO_UNI"]) ? $_REQUEST["MODELO_UNI"] : ''; ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">ANIO</label>
        <div class="form-group">
            <input type="text" name="ANIO_UNI" class="form-control" value="<?php echo isset($_REQUEST["ANIO_UNI"]) ? $_REQUEST["ANIO_UNI"] : ''; ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">NUMERO</label>
        <div class="form-group">
            <input type="text" name="NUMERO_UNI" class="form-control" value="<?php echo isset($_REQUEST["NUMERO_UNI"]) ? $_REQUEST["NUMERO_UNI"] : ''; ?>" />
        </div>
        <input type="hidden" name="option" value="insert">
        <input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restablecer">
    </form></div>
<?php include"inc/inc_footer.php"; ?>
