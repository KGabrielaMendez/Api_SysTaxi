<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "../inc/inc_head.php"; ?>


<br/>
<div class="col-sm-12 col-md-12">

<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ESTADO</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">USUARIO</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">CONDUCTOR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">TIPO ENCOMIENDA</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION ENCOMIENDA</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DISTANCIA EN KM</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">TIEMPO ESPERA APROXIMADO en min</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTO APROXIMADO $$</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD ORIGEN</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD ORIGEN</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD DESTINO</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD DESTINO</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION ENCOMIENDA</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">FECHA ENCOMIENDA</th>

</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
    <td><?php echo $result[$key]['ESTADO']?></td>
<td><?php echo $result[$key]['NOMBRE_US']
        
        
        ?></td>
<td><?php $vari = $result[$key]['IDCONDUCTOR'];
 if ($vari != NULL) {
      $mysqli = mysqli_connect('localhost', 'root', '', 'systaxi');
      $consulta = "SELECT NOMBRE_US from conductor A, cat_usuarios B WHERE A.ID_US = B.ID_US AND IDCONDUCTOR = ".$vari."";
      if ($res = mysqli_query($mysqli, $consulta)) {
                    while ($fila = mysqli_fetch_row($res)) {
                        echo $fila[0];
                    }
      }
 } else {
     echo 'PENDIENTE';
 }?></td>
<td><?php echo $result[$key]['TIPO_ENCOMIENDA']?></td>
<td><?php echo $result[$key]['DESCRIPCION_ENC']?></td>
<td><?php echo $result[$key]['DISTANCIAMIN_ENC']?></td>
<td><?php echo $result[$key]['TIEMPOESPERAMIN_ENC']?></td>
<td><?php echo $result[$key]['COSTOENC_MAX_ENC']?></td>
<td><?php echo $result[$key]['LATITUD_ORIG']?></td>
<td><?php echo $result[$key]['LONGITUD_ORIG']?></td>
<td><?php echo $result[$key]['LATITUD_DEST']?></td>
<td><?php echo $result[$key]['LONGITUD_DEST']?></td>
<td><?php echo $result[$key]['DIRECCION_ENC']?></td>
<td><?php echo $result[$key]['FECHA_ENC']?></td>
</tr>
<?php
}?>
</tbody>
</table><br /><?php include "inc/inc_footer.php"; ?>
</div>

