<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_encomienda.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<table class="table table-bordered">
<tr>
<th style="text-transform: capitalize; width: 150px;">ID US</th>
<td><?php echo $qryVResult['ID_US']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">IDCONDUCTOR</th>
<td><?php echo $qryVResult['IDCONDUCTOR']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">TIPO ENCOMIENDA</th>
<td><?php echo $qryVResult['TIPO_ENCOMIENDA']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">DESCRIPCION ENC</th>
<td><?php echo $qryVResult['DESCRIPCION_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">DISTANCIAMIN ENC</th>
<td><?php echo $qryVResult['DISTANCIAMIN_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">TIEMPOESPERAMIN ENC</th>
<td><?php echo $qryVResult['TIEMPOESPERAMIN_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">COSTOENC MAX ENC</th>
<td><?php echo $qryVResult['COSTOENC_MAX_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">LATITUD ORIG</th>
<td><?php echo $qryVResult['LATITUD_ORIG']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">LONGITUD ORIG</th>
<td><?php echo $qryVResult['LONGITUD_ORIG']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">LATITUD DEST</th>
<td><?php echo $qryVResult['LATITUD_DEST']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">LONGITUD DEST</th>
<td><?php echo $qryVResult['LONGITUD_DEST']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">DIRECCION ENC</th>
<td><?php echo $qryVResult['DIRECCION_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">FECHA ENC</th>
<td><?php echo $qryVResult['FECHA_ENC']?></td>
</tr>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
