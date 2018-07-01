<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_carrera.php">Listado</a></li>
<li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<table class="table table-bordered">
<tr>
<th style="text-transform: capitalize; width: 150px;">DESCRIPCION CAR</th>
<td><?php echo $qryVResult['DESCRIPCION_CAR']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">DISTANCIA CAR</th>
<td><?php echo $qryVResult['DISTANCIA_CAR']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">TIEMPOESPERAMIN CAR</th>
<td><?php echo $qryVResult['TIEMPOESPERAMIN_CAR']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">COSTO CAR</th>
<td><?php echo $qryVResult['COSTO_CAR']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">LATITUD CAR</th>
<td><?php echo $qryVResult['LATITUD_CAR']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">LONGITUD CAR</th>
<td><?php echo $qryVResult['LONGITUD_CAR']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">DIRECCION CAR</th>
<td><?php echo $qryVResult['DIRECCION_CAR']?></td>
</tr>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
