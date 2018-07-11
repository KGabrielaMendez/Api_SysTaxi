
<?php
echo "COmpletar registro";
?>

<html>
    <head>
        <title>Complete sus datos</title>
        <link href="../css/login.css" rel="stylesheet" type="text/css"/> 
        <style type="text/css">


            .container {
                text-align: center;
                padding: 50px;
                width: 960px;
                height: 800px;
                display: inline-block;
            }

            div#general{
                text-align: center;
                margin: auto;
                margin-top: 50px;
                width: 960px;
                height: 800px;

            }
            div#captcha{

            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 40%;
            }

            button:hover {
                opacity: 0.8;
            }

            .select {
                position: relative;
                border: 1px solid #ccc;
                width: 120px;
                overflow: hidden;
                background-color: #fff;
            }

            .select:before {
                content: '';
                position: absolute;
                right: 5px;
                top: 7px;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 7px 5px 0 5px;
                border-color: #000000 transparent transparent transparent;
                z-index: 5;
                pointer-events: none;
            }

            .select select {
                padding: 5px 8px;
                width: 130%;
                border: none;
                box-shadow: none;
                background-color: transparent;
                background-image: none;
                appearance: none;
            </style>
        </head>
        <body>
            <form class="modal-content animate" action="../controller/controllerLogin.php" method="post" name="f1">

                <div class="imgcontainer">
                    <h3 align="center"> Completa tu Registro!</h3>
                    <!-- <img src="login.png" alt="Avatar" class="avatar">  -->
                </div>
                <input type="hidden" name="opcion" value="crear_usuario"  required="true">
                <div class="container">
                    <label for="uname"><b>Nombres</b></label>
                    <input type="text" placeholder="Ingrese nombre de usuario" name="uname" pattern="^[a-zA-Z_.-]*$" minlength="3" required>

                    <label for="uape"><b>Apellidos</b></label>
                    <input type="text" placeholder="Ingrese su apellido" name="uape"  pattern="^[a-zA-Z_.-]*$" minlength="3"  required>

                    <label for="fdn"><b>Fecha Nacimiento</b></label>
                    <input type="date" placeholder="Ingrese contraseña" name="fdn" max="2003-01-01" required>	  

                    <label for="ciudad"><b>Ciudad de Residencia</b></label>
                    <input type="text" placeholder="Ingrese Ciudad de Residencia" name="ciudad"  pattern="^[a-zA-Z_.-]*$" minlength="5" required>	  

                    <label for="telf"><b>Telefono</b></label>
                    <input type="text" placeholder="Ingrese Telefono" name="telf" pattern="([0-9])+(?:-?\d){4,}" required>	

                    <label for="gnr"><b>Genero</b>
                        <select id="gnr" name="gnr" style="width:468px;height: 40px;">
                            <option value="OTRO">OTRO</option>
                            <option value="FEMENINO">FEMENINO</option>
                            <option value="MASCULINO">MASCULINO</option>
                        </select>
                        <br>
                    </label>
                    <label for="dir"><b>Dirección</b></label>
                    <input type="text" placeholder="Ingrese las calles de su domicilio y numero de casa" name="dir" pattern="[a-zA-Z0-9]+" minlength="5" required>	


                    <button type="submit" name="submit">Completar Registro</button>

                </div>
            </form>
        </body>
    </html>
