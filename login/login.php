<html>
<head>

  <link href="../css/login.css" rel="stylesheet" type="text/css"/>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>

	 <script> 
function comprobarClave(){ 

    clave1 = document.f1.psw1.value 
    clave2 = document.f1.psw2.value    
    if (clave1 != clave2) {
    
        alert("Las dos claves son distintas"); 
    }
  }
 
 function comprobar(){ 
<?php
session_start();
if(isset($_SESSION['incorrecto'])){
    ?>
            alert("La contraseña es incorrecta o el nickname");
   <?php  
   
}
     
?>
   
</script>  

<style type="text/css">
  input[type=text], input[type=password], input[type=email], input[type=date] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>

</head>
<body>
	<table>
		<td width="50%" align="center">
                    <form onsubmit="comprobarClave()" class="modal-content animate" action="../controller/controllerLogin.php" method="post" name="f1">
  
    <div class="imgcontainer">
      <h3 align="center"> Regístrate</h3>
      <!-- <img src="login.png" alt="Avatar" class="avatar">  -->
    </div>
  <input type="hidden" name="opcion" value="crear_login"  required="true">
    <div class="container">
      <label for="uname"><b>Usuario</b></label>
      <input type="text" placeholder="Ingrese nombre de usuario" name="uname" pattern="^[a-zA-Z0-9_.-]*$" minlength="3" required>

	  <label for="email"><b>E-mail</b></label>
      <input type="email" placeholder="Ingrese su e-mail" name="email" required>

	  <label for="psw"><b>Ingrese contraseña</b></label>
      <input type="password" placeholder="Ingrese contraseña" name="psw1"  minlength="8" required>	  

      <label for="psw"><b>Repita la contraseña</b></label>
      <input type="password" placeholder="Repita su contraseña" name="psw2" minlength="8" required>	
      <button type="submit" name="submit">Regístrate</button>
  
    </div>
  </form>

</td >
<td width="60%" align="center">
    <form class="modal-content animate" action="../model/validar.php" method="post" >
    <div class="imgcontainer">
      <h3 align="center"> Iniciar Sesión</h3>
      <!-- <img src="login.png" alt="Avatar" class="avatar">  -->
    </div>

    <div class="container">
      <label for="uname"><b>Usuario</b></label>
      <input type="text" placeholder="Ingrese nombre de usuario" name="uname" pattern="^[a-zA-Z0-9_.-]*$" minlength="3" required>

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Ingrese su contraseña" name="psw" minlength="8" required>
      <b> </b><span class="psw"><a href="../login/confirmacion.php">Olvidó su contraseña</a></span>  

      <button type="submit">Iniciar Sesión</button>
      
    </div>
  </form>

</td></tr>
</table>
</body>
</html>