<?php include "../inc/inc_head.php"?>
<ul class="breadcrumb">
    <h1>DETALLE DE UNIDADES</h1>
<br/>
<div class="col-sm-12 col-md-12">
<table class="table table-bordered">
<tr>
<th style="text-transform: capitalize; width: 150px;">COOPERATIVA</th>
<td><?php echo $qryVResult['NOMBRE_COOP']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">PLACA UNI</th>
<td><?php echo $qryVResult['PLACA_UNI']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">TIPO UNI</th>
<td><?php echo $qryVResult['TIPO_UNI']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">MARCA UNI</th>
<td><?php echo $qryVResult['MARCA_UNI']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">MODELO UNI</th>
<td><?php echo $qryVResult['MODELO_UNI']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">ANIO UNI</th>
<td><?php echo $qryVResult['ANIO_UNI']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">NUMERO UNI</th>
<td><?php echo $qryVResult['NUMERO_UNI']?></td>
</tr>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
<a href='cat_unidades.php' class="btn btn-danger" >Atrás</a>
</body>
</html>
