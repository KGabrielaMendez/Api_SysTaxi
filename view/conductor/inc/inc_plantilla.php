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

</div>
 <!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
 <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
 </a>
</li> 
<?php
//$user=$_SESSION['username'];
?>
<li class="dropdown">
    <a href="../../mainConductor.php" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Conductor " ?> <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">

<li class="divider"></li>
<li><a href="../../controller/controllerConductores.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a></li>
</ul>
 </li>
 </ul>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav side-nav">
<li>
<a href="conductor.php"><i class="fa fa-fw fa-user-plus"></i>  MENU 3</a>
</li>
<!--<li>
<a href="faq"><i class="fa fa-fw fa fa-question-circle"></i> MENU 5</a>
 </li>-->
 </ul>
 </div>
<!-- /.navbar-collapse -->
</nav>
