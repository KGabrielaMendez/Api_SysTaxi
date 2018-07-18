<?php
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}?>
<html>
    <head>
        <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #F9D93D;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
    color: white;
}
</style>
    </head>
    <body>
        <?php
$user=$_SESSION['username'];
?>
<ul id="menu">
    <li><a href="http://localhost:8080/AppsI_SysTaxi/controller/controllerMenu.php?opcion=menuPrincipal">Menú Principal</a></li>
    <li>
        <a href="http://localhost:8080/AppsI_SysTaxi/view/Tarifas.html">Tarifas</a>
        
    </li>
    <li><a href="http://localhost:8080/AppsI_SysTaxi/view/infoQuienSomos.php">Quienes Somos</a></li>
    <li><a href="http://localhost:8080/AppsI_SysTaxi/controller/controllerMenu.php?opcion=cerrarSesion">Cerrar Sesión</a></li>
     <li style="float:right"><a class="active" href="">Usuario <?php echo $user ?></a></li>
</ul>
    </body>
</html>







