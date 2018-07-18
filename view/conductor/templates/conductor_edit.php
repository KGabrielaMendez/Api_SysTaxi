<?php include "../inc/inc_head.php" ; 
require_once '../../model/LoginModel.php';
$usname = new LoginModel();?>
<h1>EDITAR CONDUCTOR </h1>
<br/>
<div class="col-sm-12 col-md-12">
    <form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<?php echo $msg; ?>
        <br/>
        <br/>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">USERNAME</label>
        <div class="form-group">
            <input type="hidden" name="ID_LOG" class="form-control" value="<?php  echo $ID_LOG ?>"/>
            <input type="text" name="" class="form-control" value="<?php
            $id = $ID_LOG;
            $usname->RecuperarUsername($id);
            echo $uname = $_SESSION['uname'];
            ?>" readonly="readonly"/>
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">NOMBRE</label>
        <div class="form-group">
            <input type="text" name="NOMBRE_US" class="form-control" pattern="^[a-zA-Z_.-]*$" minlength="3" value="<?php echo $NOMBRE_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">APELLIDO</label>
        <div class="form-group">
            <input type="text" name="APELLIDO_US" class="form-control" pattern="^[a-zA-Z_.-]*$" minlength="3" value="<?php echo $APELLIDO_US ?>" />
        </div>
         <label style="text-transform: capitalize; width: 150px; font-weight: bold;">EMAIL</label>
        <div class="form-group">
            <input type="text" name="EMAIL_US" class="form-control" value="<?php echo $EMAIL_US ?>" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">COOPERATIVA</label>
        <div class="form-group">
            <input type="text" name="DIRECCION_US" class="form-control" value="<?php echo $NOMBRE_COOP ?>" disabled="true" />
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">NÚMERO DE UNIDAD</label>
        <div class="form-group">
            <input type="text" name="CIUDAD_US" class="form-control"pattern="^[0-9_.-]*$" minlength="1" value="<?php echo $NUMERO_UNI ?>" disabled="true"/>
        </div>
        <label style="text-transform: capitalize; width: 150px; font-weight: bold;">TELEFONO</label>
        <div class="form-group">
            <input type="text" name="TELEFONO_US" class="form-control" pattern="([0-9])+(?:-?\d){4,}" value="<?php echo $TELEFONO_US ?>" />
        </div>
         <label style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA NACIMIENTO</label>
        <div class="form-group">
            <input type="date" max="2003-12-12" name="FECHANAC_US" class="form-control" value="<?php echo $FECHANAC_US ?>" />
        </div>
        
       

        <input type="hidden" name="option" value="update">
        <input type="submit" name="btnUpdate" class="btn btn-primary" value="Actualizar" />&nbsp;
        <a href="conductor.php" class="btn btn-danger" value="Can">Cancelar</a>
    </form></div>


<?php include"inc/inc_footer.php"; ?>