<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_cooperativas.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<table class="table table-bordered">
<tr>
<th style="text-transform: capitalize; width: 150px;">NOMBRE COOP</th>
<td><?php echo $qryVResult['NOMBRE_COOP']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">CIUDAD COOP</th>
<td><?php echo $qryVResult['CIUDAD_COOP']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">PAIS COOP</th>
<td><?php echo $qryVResult['PAIS_COOP']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">NUNIDADES COOP</th>
<td><?php echo $qryVResult['NUNIDADES_COOP']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">FECHAREGISTRO COOP</th>
<td><?php echo $qryVResult['FECHAREGISTRO_COOP']?></td>
</tr>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
