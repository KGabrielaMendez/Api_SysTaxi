<?php include "../inc/inc_head.php" ; ?>
 <h1>COOPERATIVAS</h1>
<br/>
<div class="col-sm-12 col-md-12">
<table class="table table-bordered">
<tr>
<th style="text-transform: capitalize; width: 150px;">NOMBRE</th>
<td><?php echo $qryVResult['NOMBRE_COOP']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">CIUDAD </th>
<td><?php echo $qryVResult['CIUDAD_COOP']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">PAIS </th>
<td><?php echo $qryVResult['PAIS_COOP']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">N° UNIDADES </th>
<td><?php echo $qryVResult['NUNIDADES_COOP']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">FECHA DE REGISTRO </th>
<td><?php echo $qryVResult['FECHAREGISTRO_COOP']?></td>
</tr>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
<a href='cat_cooperativas.php' class="btn btn-danger">Atrás</a>
</body>
</html>
