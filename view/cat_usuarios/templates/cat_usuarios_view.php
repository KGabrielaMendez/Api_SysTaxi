<?php
include"inc/inc_head.php";
require_once '../../model/LoginModel.php';
$usname = new LoginModel();
?>
<ul class="breadcrumb">
    <li><a href="cat_usuarios.php">Listado</a></li>
     <li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
    <table class="table table-bordered">
        <tr>
            <th style="text-transform: capitalize; width: 150px;">USERNAME</th>
            <td><?php
                $id = $qryVResult['ID_LOG'];
                $usname->RecuperarUsername($id);
                echo $uname = $_SESSION['uname'];
                ?></td>
        </tr>
        
        <tr>
            <th style="text-transform: capitalize; width: 150px;">NOMBRE US</th>
            <td><?php echo $qryVResult['NOMBRE_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">APELLIDO US</th>
            <td><?php echo $qryVResult['APELLIDO_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">FECHANAC US</th>
            <td><?php echo $qryVResult['FECHANAC_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">CIUDAD US</th>
            <td><?php echo $qryVResult['CIUDAD_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">TELEFONO US</th>
            <td><?php echo $qryVResult['TELEFONO_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">GENERO US</th>
            <td><?php echo $qryVResult['GENERO_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">DIRECCION US</th>
            <td><?php echo $qryVResult['DIRECCION_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">FECHAREGISTRO US</th>
            <td><?php echo $qryVResult['FECHAREGISTRO_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">EMAIL US</th>
            <td><?php echo $qryVResult['EMAIL_US'] ?></td>
        </tr>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
