<?php include"inc/inc_head.php"; 
require_once '../../model/LoginModel.php';
$usname = new LoginModel();?>
<ul class="breadcrumb">
    <li><a href="conductor.php">Listado</a></li>
    <li><a href="../../view/mainConductor.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
    <table class="table table-bordered">
        <tr>
            <th style="text-transform: capitalize; width: 150px;">NOMBRE CONDUCTOR</th>
            <td><?php
//                $id = $qryVResult['ID_LOG'];
                if(empty($qryVResult['ID_LOG'])){
                    print_r($qryVResult['USERNAME']);
                }else{
                   $id = $qryVResult['ID_LOG']; 
                $usname->RecuperarUsername($id);
                echo $uname = $_SESSION['uname'];}
                ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">NOMBRE</th>
            <td><?php echo $qryVResult['NOMBRE_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">APELLIDO</th>
            <td><?php echo $qryVResult['APELLIDO_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">EMAIL</th>
            <td><?php echo $qryVResult['EMAIL_US'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">COOPERATIVA</th>
            <td><?php echo $qryVResult['NOMBRE_COOP'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">NUMERO DE UNIDAD</th>
            <td><?php echo $qryVResult['NUMERO_UNI'] ?></td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">TELEFONO</th>
            <td><?php echo $qryVResult['TELEFONO_US'] ?></td>
        </tr>
        
        <tr>
            <th style="text-transform: capitalize; width: 150px;">FECHA DE NACIMIENTO</th>
            <td><?php echo $qryVResult['FECHANAC_US'] ?></td>
        </tr>
        <tr>
        
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
