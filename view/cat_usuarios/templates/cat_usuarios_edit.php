<?php
include"inc/inc_head.php";
require_once '../../model/LoginModel.php';
$usname = new LoginModel();
?>
<ul class="breadcrumb">
    <li><a href="cat_usuarios.php">Listado/a></li>
     <li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
    <form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
        <br/>
        <br/>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">USERNAME</label>
        <div class="form-group">
            <input type="text" name="ID_LOG" class="form-control" value="<?php
            $id = $ID_LOG;
            $usname->RecuperarUsername($id);
            echo $uname = $_SESSION['uname'];
            ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE US</label>
        <div class="form-group">
            <input type="text" name="NOMBRE_US" class="form-control" value="<?php echo $NOMBRE_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">APELLIDO US</label>
        <div class="form-group">
            <input type="text" name="APELLIDO_US" class="form-control" value="<?php echo $APELLIDO_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHANAC US</label>
        <div class="form-group">
            <input type="text" name="FECHANAC_US" class="form-control" value="<?php echo $FECHANAC_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">CIUDAD US</label>
        <div class="form-group">
            <input type="text" name="CIUDAD_US" class="form-control" value="<?php echo $CIUDAD_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">TELEFONO US</label>
        <div class="form-group">
            <input type="text" name="TELEFONO_US" class="form-control" value="<?php echo $TELEFONO_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">GENERO US</label>
        <div class="form-group">
            <input type="text" name="GENERO_US" class="form-control" value="<?php echo $GENERO_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION US</label>
        <div class="form-group">
            <input type="text" name="DIRECCION_US" class="form-control" value="<?php echo $DIRECCION_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHAREGISTRO US</label>
        <div class="form-group">
            <input type="text" name="FECHAREGISTRO_US" class="form-control" value="<?php echo $FECHAREGISTRO_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">EMAIL US</label>
        <div class="form-group">
            <input type="text" name="EMAIL_US" class="form-control" value="<?php echo $EMAIL_US ?>" />
        </div>

        <input type="hidden" name="option" value="update">
        <input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;<input type="reset" class="btn btn-danger" value="Restaurar">
    </form></div>


<?php include"inc/inc_footer.php"; ?>
