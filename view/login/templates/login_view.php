<?php include"inc/inc_head.php";?>
<ul class="breadcrumb">
<li><a href="login.php">Inicio</a></li>
<li class="active">Library</li>
</ul>
<br/>
<div class="col-sm-12 col-md-12">
<table class="table table-bordered">
<tr>
<th style="text-transform: capitalize; width: 150px;">ID ROL</th>
<td><?php echo $qryVResult['ID_ROL']?></td>
</tr>
<tr>
<th style="text-transform: capitalize; width: 150px;">USERNAME</th>
<td><?php echo $qryVResult['USERNAME']?></td>
</tr>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
