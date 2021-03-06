<!DOCTYPE html>
 <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,600,700|Montserrat:400,700,900|Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="shortcut icon" href="http://localhost/asonaema/img/logo_prueba.svg" type="image/x-icon">
    <title>Home - proctos para el pelo</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>

    <div class="paralax_contact">
        <h2 class="paralax_contact_title">Formulario de contactos</h2>
        <p class="paralax_contact_text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores atque, quae ipsa cupiditate recusandae dicta itaque.
        </p>
        <div class="mensaje_respuesta"><p>Mensaje enviado correctamente!</p><i class="fas fa-times"></i></div>
    </div>

    <div class="form_contact_container">
        <div class="info_social_media">
            <h3 class="info_social_media_title">No dudes en escribirnos o seguirnos en los siguientes enlaces a nuestas redes sociales:</h3>
            <p class="show_email"><i class="fas fa-envelope"></i> Contacto@asonaema.com</p>
            <div class="contact_btns_social_media">
                <a href="#" class="btn_facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn_instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn_twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn_google_plus"><i class="fab fa-google-plus"></i></a>

            </div>
        </div>
        <div class="form_contact">
            <h3 class="form_contact_title">Contáctanos</h3>
            <p class="form_contact_text">Los campos marcados con <span class="campo_requerido">*</span> son obligatorios</p>
            <form id="contacto_form">
                <label for="nombre">Nombres <span class="campo_requerido">*</span></label>
                <div class="input_group_contact">
                    <i class="fas fa-check-circle fa-check-circle_nombre "></i>
                    <i class="fas fa-times-circle fa-times-circle_nombre"></i>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
                <label for="correo">Correo electronico <span class="campo_requerido">*</span></label>
                <div class="input_group_contact">
                    <i class="fas fa-check-circle fa-check-circle_correo"></i>
                    <i class="fas fa-times-circle fa-times-circle_correo"></i>
                    <input type="email" name="correo" id="correo" placeholder="Correo electronico" required>
                </div>
                <label for="motivo">Elige un motivo <span class="campo_requerido">*</span></label>
                <div class="input_group_contact">
                    <select name="motivo" id="motivo" required>
                        <option value="duda" selected>Alguna duda</option>
                        <option value="formar parte">Formar parte de nosotros</option>
                        <option value="compra">Compra</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <label for="mensaje">Escribe tu mensaje aqui <span class="campo_requerido">*</span></label>
                <div class="input_group_contact">
                    <i class="fas fa-check-circle fa-check-circle_mensaje"></i>
                    <i class="fas fa-times-circle fa-times-circle_mensaje"></i>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje" required></textarea>
                </div>
                <div class="contenedor_btn_loading">
                    <button type="submit" class="form_btn_send" id="form_btn_send">Enviar <i class="fas fa-paper-plane"></i></button>
                    <p class="mensaje_error_form">Todos los campos deben estar correctos</p>
                    <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
                </div>
            </form>
        </div>
    </div>

    <div class="overlay">
        <div class="main_newsletter">
            <div class="header_news">
                <h3>Suscribete</h3>
                <p>¡Para estar al tanto de todos nuestros productos!</p>
            </div>
            <div class="body_news">
                <form action="">
                    <input type="text" name="correo_electonico" placeholder="Correo electronico">
                    <input type="submit" value="Suscribirse" role="button">
                </form>
            </div>
        </div>
    </div>







                            
    <div class="blanco">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
        <p class="cargando">Cargando la página</p>
    </div>

    <button role="button" class="btn_ir_arriba"><i class="fas fa-angle-up"></i></button>

    <?php
        require_once 'footer.php';
    ?>

    <script src="js/main.js"></script>
    
</body>
</html>