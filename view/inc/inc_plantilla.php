<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
 <span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
</a>
</div>
 <!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
 <li>
     <a href="javascript:history.back;" title="Ir la página anterior">Volver</a>
</li> 

<?php
session_start();
$user=$_SESSION['username'];
?>
<li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user?> <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
    <li><a href="../login/olvidoContraseña.html"><i class="fa fa-fw fa-cog"></i> Cambiar Contraseña</a></li>
<li class="divider"></li>
<li><a href="../controller/controllerAdministrador.php?opcion=cerrarSesion"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a></li>
</ul>
 </li>
 </ul>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

<!-- /.navbar-collapse -->
</nav>
