<?php include "../inc/inc_head.php"; ?>
<h1>ROLES DE USUARIO</h1>
<br/>
<div class="col-sm-12 col-md-12">
    <table class="table table-bordered">
        <tr>
            <th style="text-transform: capitalize; width: 150px;">ID ROL</th>
            <td>
                <?php
                if($qryVResult['ID_ROL']=="1"){
                echo "Administrador";}
                if($qryVResult['ID_ROL']=="2"){
                echo "Cliente";}
                if($qryVResult['ID_ROL']=="3"){
                echo "Conductor";}
                
                ?>
            </td>
        </tr>
        <tr>
            <th style="text-transform: capitalize; width: 150px;">USERNAME</th>
            <td><?php echo $qryVResult['USERNAME'] ?></td>
        </tr>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
<a href='login.php' class="btn btn-danger" >Atrás</a>
</body>
</html>
