<?php include "../inc/inc_head.php"; ?>

<br/>
<div class="col-sm-12 col-md-12">
<table class="table table-bordered">
<tr>
<th style="text-transform: capitalize; width: 150px;">USUARIO</th>
<td><?php echo $qryVResult['ID_US']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">CONDUCTOR</th>
<td><?php echo $qryVResult['IDCONDUCTOR']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">TIPO DE ENCOMIENDA</th>
<td><?php echo $qryVResult['TIPO_ENCOMIENDA']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">DESCRIPCION</th>
<td><?php echo $qryVResult['DESCRIPCION_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">DISTANCIA MINIMA EN KM</th>
<td><?php echo $qryVResult['DISTANCIAMIN_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">TIEMPO ESPERA APROXIMADO EN min</th>
<td><?php echo $qryVResult['TIEMPOESPERAMIN_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">COSTO APROXIMADO</th>
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
 <a href="cat_encomienda.php" class="btn btn-danger" value="Cancelar">Cancelar </a>
</body>
</html>
