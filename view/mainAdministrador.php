<!DOCTYPE html>
<?php
session_start();
if($_SESSION['rolUsuario']=="1"){
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <style type="text/css">
            * {
    margin: 0;
}
.normal {
               text-align: center;
  width: 50%;
  height: 400px;
  border: 1px solid #000;
  border-collapse: collapse;
}


button {
    background-color: #330000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 75%;
    height: 300px;
}

button:hover {
    opacity: 0.8;
}
html, body {
   height: 100%;
   overflow: hidden;
        }

#wrapper {
   min-height: 100%;
   height: auto !important;
   height: 100%;
   margin: 0 auto -100px; 
}

#leftbar {
   float: left;
   width: 200px;
   background-color: #EAEAEA;
   height: 100%;
   position: absolute;
   z-index: -1;
}

#rightbar {
    
}

#footer {
   height: 50px;      
   background-color: #EAEAEA;
}               
#pos{
    height: 50px;
    position: relative;
}
#header {
    
   height: 100px;
   background-color: #EAEAEA;
} 
td, th, table{
    width: 20px;
}
        </style>
    </head>
    <body>
                <div id="wrapper">
    <div id="header">  
        <h1>Taxi Encomienda</h1>
    </div>
        <div id="content">
            
            <div id="leftbar">  </div>
            <center><table border="0" class="normal" align="center">
            <tbody>
                <tr style="width: 175px;">
                    <td style="width: 175px;">
                        <form  action="../controller/controllerAdministrador.php">
                            <input type="hidden" value="clientes" name="opcion" />
                            <input type="submit" value="Clientes" />
                        </form>
                    </td>
                        
                    <td style="width: 175px;">
                        <form  action="../controller/controllerAdministrador.php">
                            <input type="hidden" value="conductores" name="opcion" />
                            <input type="submit" value="Conductores" />
                        </form>
                    </td>
                    
                    <td style="width: 175px;">
                        <form  action="../controller/controllerAdministrador.php">
                            <input type="hidden" value="unidades" name="opcion" />
                            <input type="submit" value="Unidades" />
                        </form>
                    </td>
                    <td style="width: 175px;">
                        <form  action="../controller/controllerAdministrador.php" >
                            <input type="hidden" value="cooperativas" name="opcion" />
                            <input type="submit" value="Cooperativas" />
                        </form>
                    </td>
                    <td style="width: 175px;">
                        <form  action="../controller/controllerAdministrador.php">
                            <input type="hidden" value="conductores" name="opcion" />
                            <input type="submit" value="Tarifas" />
                        </form>
                    </td>
                        
                </tr>
            </tbody>
                </table></center>
            <div id="rightbar"> </div>
            
        </div>
</div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
<?php
} 
else{
    header("Location: ../login/login.php");
    exit();
} ?>