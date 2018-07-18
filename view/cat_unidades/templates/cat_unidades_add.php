<script type="text/javascript">
    var select = document.getElementById('provincia');
select.addEventListener('change',
  function(){
    var selectedOption = this.options[select.selectedIndex];
    console.log(selectedOption.value + ': ' + selectedOption.text);
  });
 </script>
    
<?php include "../inc/inc_head.php"?>
 <h1>AGREGAR UNIDADES</h1>
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
                $consulta = "SELECT NOMBRE_COOP, ID_COOP from cat_cooperativas";
                if ($res = mysqli_query($mysqli, $consulta)) {
                    while ($fila = mysqli_fetch_row($res)) {
                        
                        ?>
                        
                        <option name="ID_COOP" value="<?phpecho $fila[1];?>"><?php echo $fila[0]; ?></option>
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
            <select value="TIPO_UNI" name="TIPO_UNI" style="width:100%; height: 40px">
                <option value="TAXI">TAXI</option>
                <option value="MOTO">MOTO</option>
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
        <input type="submit" name="btnAdd" class="btn btn-primary" value="Registrar" />&nbsp;
        <a href='cat_unidades.php' class="btn btn-danger" >Cancelar</a>
    </form></div>
<?php include '../inc/inc_footer.php'; ?>
