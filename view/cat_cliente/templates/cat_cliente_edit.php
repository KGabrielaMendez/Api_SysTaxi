<?php
include"../inc/inc_head.php";
require_once '../../model/LoginModel.php';
$usname = new LoginModel();
?>
<br/>
<div class="col-sm-12 col-md-12">
    <form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
        <br/>
        <br/>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">USERNAME</label>
        <div class="form-group">
            <input type="hidden" name="ID_LOG" class="form-control" value="<?php echo $ID_LOG ?>"/>
            <input type="text" name="" class="form-control" value="<?php
            $id = $ID_LOG;
            $usname->RecuperarUsername($id);
            echo $uname = $_SESSION['uname'];
            ?>" readonly="readonly"/>
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE US</label>
        <div class="form-group">
            <input type="text" name="NOMBRE_US" class="form-control" pattern="^[a-zA-Z_.-]*$" minlength="3" value="<?php echo $NOMBRE_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">APELLIDO US</label>
        <div class="form-group">
            <input type="text" name="APELLIDO_US" class="form-control" pattern="^[a-zA-Z_.-]*$" minlength="3" value="<?php echo $APELLIDO_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHANAC US</label>
        <div class="form-group">
            <input type="date" max="2003-12-12" name="FECHANAC_US" class="form-control" value="<?php echo $FECHANAC_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">CIUDAD US</label>
        <div class="form-group">
            <input type="text" name="CIUDAD_US" class="form-control"pattern="^[a-zA-Z_.-]*$" minlength="3" value="<?php echo $CIUDAD_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">TELEFONO US</label>
        <div class="form-group">
            <input type="text" name="TELEFONO_US" class="form-control" pattern="([0-9])+(?:-?\d){4,}" value="<?php echo $TELEFONO_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">GENERO US</label>
        <div class="form-group">
            <input type="text" name="GENERO_US" class="form-control" value="<?php echo $GENERO_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION US</label>
        <div class="form-group">
            <input type="text" name="DIRECCION_US" class="form-control" value="<?php echo $DIRECCION_US ?>" />
        </div>
        
        <div class="form-group">
            <input type="hidden" name="FECHAREGISTRO_US" class="form-control" value="<?php echo $FECHAREGISTRO_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">EMAIL US</label>
        <div class="form-group">
            <input type="text" name="EMAIL_US" class="form-control" value="<?php echo $EMAIL_US ?>" />
        </div>

        <input type="hidden" name="option" value="update">
        <input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;
        <a href="cat_cliente.php" class="btn btn-danger" value="Cancelar">Cancelar </a>
    </form></div>


<?php // include"inc/inc_footer.php"; ?>
