<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="conductor.php">Listado</a></li>
<li><a href="../../view/mainAdministrador.php">Inicio</a></li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<table class="table table-bordered">
<tr>
<th style="text-transform: capitalize; width: 150px;">ID US</th>
<td><?php echo $qryVResult['ID_US']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">ID UNI</th>
<td><?php echo $qryVResult['ID_UNI']?></td>
</tr>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>