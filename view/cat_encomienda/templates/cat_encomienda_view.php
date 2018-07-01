<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="cat_encomienda.php">Listado</a></li>
<li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<table class="table table-bordered">
<tr>
<th style="text-transform: capitalize; width: 150px;">IDTIPOENCOM</th>
<td><?php echo $qryVResult['IDTIPOENCOM']?></td>
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
<th style="text-transform: capitalize; width: 150px;">PESOMAXKG ENC</th>
<td><?php echo $qryVResult['PESOMAXKG_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">COSTOENC MAX ENC</th>
<td><?php echo $qryVResult['COSTOENC_MAX_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">LATITUD ENC</th>
<td><?php echo $qryVResult['LATITUD_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">LONGITUD ENC</th>
<td><?php echo $qryVResult['LONGITUD_ENC']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">DIRECCION ENC</th>
<td><?php echo $qryVResult['DIRECCION_ENC']?></td>
</tr>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
