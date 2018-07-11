<?php
if(isset($msg)) {
echo $msg;
}
?>
<?php include "inc/inc_head.php"; ?>
<ul class="breadcrumb">
<li><a href="../../view/mainCliente.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<meta http-equiv="refresh" content="6" />

<script>setTimeout('document.location.reload()',6* 1000); </script>
<div class="col-sm-12 col-md-12">
<a href="cat_carrera.php?option=add" class="btn btn-success">Agregar Registro <i class="fa fa-plus"></i>
</a><br />
<br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">CONDUCTOR</th>
<!--<th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID US</th>-->
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DESCRIPCION CAR</th>
<!--<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DISTANCIA CAR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">COSTO CAR</th>-->
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LATITUD CAR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">LONGITUD CAR</th>
<th style="text-transform: capitalize; width: 150px; font-weight: bold;">DIRECCION CAR</th>
<th style="width: 128px;">Accion</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $key => $value){?>
<tr>
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
<!--<td><?php echo $result[$key]['ID_US']?></td>-->
<td><?php echo $result[$key]['DESCRIPCION_CAR']?></td>
<!--<td><?php //echo $result[$key]['DISTANCIA_CAR']?></td>
<td><?php //echo $result[$key]['COSTO_CAR']?></td>-->
<td><?php echo $result[$key]['LATITUD_CAR']?></td>
<td><?php echo $result[$key]['LONGITUD_CAR']?></td>
<td><?php echo $result[$key]['DIRECCION_CAR']?></td>
<td><a href="cat_carrera.php?option=view&ID_CARRERA=<?php echo $result[$key]['ID_CARRERA']?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="cat_carrera.php?option=edit&ID_CARRERA=<?php echo $result[$key]['ID_CARRERA']?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="cat_carrera.php?option=delete&ID_CARRERA=<?php echo $result[$key]['ID_CARRERA']?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}?>
</tbody>
</table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
