<html>
    <head>
        <link href="../css/login.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Recuperacion de Contraseña</title>
    </head>
    <body>
        <?php
        $recaptcha = $_POST['g-recaptcha-response'];
        if (isset($recaptcha)) {

            $secret = "6Lfi8VwUAAAAACUx8curJF0ZONWXxZXr4WdKYRUE";
            $ip = $_SERVER['REMOTE_ADDR'];
            $validate = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
            $email = $_POST['email'];
            ?>
            <h3> Se ha enviado un código a su correo</h3>
            <div class="container">

                <br><form action="../controller/controllerLogin.php" method="POST">
                     <input type="hidden" name="opcion" value="cambio_contra"  required="true">
                    <label for="email"><b>su correo es:</b></label><br>
                    <input type="email" name="email" value="<?php echo $email ?>" disabled="true">
                    <label for="psw"><b>Ingrese nueva contraseña</b></label>
                    <input type="password" placeholder="Ingrese contraseña" name="psw1" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" minlength="8"
                           required>	  

                    <label for="psw"><b>Repita la nueva contraseña</b></label>
                    <input type="password" placeholder="Repita su contraseña" name="psw2" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" minlength="8" required>	
                    <button type="submit" >Cambiar Contraseña</button>
                </form>
            </div>
            <?php
            //Reseteo variables.
            $error = $usuario = NULL;

            //Comprobamos si esta definida el formulario y no es NULL.
            if (isset($_POST['login'])) {

                //Comprobamos que no este vacio nuestro input.
                if (empty($_POST['usuario'])) {
                    $error = 'El email es obligatorio';
                } else {
                    //Importante, añadir la conexion donde se va utilizar.
                    require_once'conexion.php';
                    $usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
                }

                //Si es verdadero nuestro input, continuamos.
                if ($usuario) {
                    //Sentencia
                    $sql = $mysqli->query("SELECT * FROM Administrador WHERE email_Admin = '$usuario' LIMIT 1");
                    //Comprobamos si existe el registro.
                    if ($sql->num_rows === 1) {
                        $row = $sql->fetch_assoc();
                        $_SESSION['email_Admin'] = $row['email_Admin'];

                        //Compones nuestro correo electronico
                        //Incluimos libreria PHPmailer (deberas descargarlo).
                        require'class.phpmailer.php';

                        //Nuevo correo electronico.
                        $mail = new PHPMailer;
                        //Caracteres.
                        $mail->CharSet = 'UTF-8';

                        //De dirección correo electrónico y el nombre
                        $mail->From = "info@tudominio.com";
                        $mail->FromName = "Nombre de dominio";

                        //Dirección de envio y nombre.
                        $mail->addAddress($row['email_Admin'], 'Nombre Admin');
                        //Dirección a la que responderá destinatario.
                        $mail->addReplyTo("info@tudominio.com", "Tunombre");

                        //BCC ->  incluir copia oculta de email enviado.
                        $mail->addBCC("copia@tudominio.com");

                        //Enviar codigo HTML o texto plano.
                        $mail->isHTML(true);

                        //Titulo email.
                        $mail->Subject = "Nuestro titulo";
                        //Cuerpo email con HTML.
                        $mail->Body = "Tu contraseña actualizada es:" . $row['tu_contrasena']; //Podrias personalizar mediante HTML y CSS :)
                        //Comprobamos el envio.
                        if (!$mail->send()) {
                            $error = "Ocurrió un error inesperado con él envió del correo electrónico, inténtelo de nuevo más tarde, disculpa las molestias.";
                        } else {
                            $error = "Se envio correctamente el correo electrónico.";
                        }
                    } else { //0 registros.
                        $error = 'El email ingresado no existe en nuestros registros.';
                    } $sql->close();
                }
            }
            ?>

            <?php
        } else {
            header('Location: olvidoContraseña.html');
            echo "rellene todos los campos";
        }
        ?>
    </body>
</html>
