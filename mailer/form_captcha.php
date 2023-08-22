<?php
require 'class.phpmailer.php';
require 'class.smtp.php';
require 'mailConfig.php';

$notSended = '';
$ok = '';
//FUENTE: https://www.youtube.com/watch?v=wH4xDm0IuDo&ab_channel=WebProdutora
if (isset($_POST['send'])) {
    if (!empty($_POST['g-recaptcha-response'])) {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = "secret_key"; //COMPLETAR!!!!!
        $response = $_POST['g-recaptcha-response'];
        $variables = "secret=" . $secret . "&response=" . $response;
        $data = curl_init($url);
        curl_setopt($data, CURLOPT_POST, 1);
        curl_setopt($data, CURLOPT_POSTFIELDS, $variables);
        curl_setopt($data, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($data, CURLOPT_HEADER, 0);
        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
        $respuesta_json = curl_exec($data);
        $respuesta = json_decode($respuesta_json);

        if ($respuesta->success == 1) {
            $id = strtoupper($_POST['user_name']);
            $email = strtolower(filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL));
            $phone = filter_var($_POST['user_tel'], FILTER_SANITIZE_NUMBER_INT);
            $mje = htmlspecialchars($_POST['user_mje'], ENT_NOQUOTES, "UTF-8");
            $mje = str_replace("\n", "<br/>", $mje);

            try {
                //ENVIO DE EMAIL
                $mail->From = $smtpUsuario;
                $mail->FromName = "$id";
                $mail->AddAddress($mailDestino);
                $mail->ClearReplyTos();
                $mail->addReplyTo($email, $id);
                $mail->Subject = "Solicitud de información";

                $mail->Body = "
    <html>     
    <body> 
            <ul>
                <li>Remitente: $id ($email)</li>
                <li>Tel: $phone</li>
            </ul> 
            $mje
            <br/>
            <p>Este mensaje fue enviado desde el fomulario de contacto web</p>
    </body>  
    </html>";

                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

                //$sended = true;
                $sended = $mail->Send();
                if ($sended) {
                    //header("Location: gracias");
                    $ok .= "Tu mensaje se envió exitosamente.";
                } else {
                    $notSended .= "¡Ups! 😫 No pudimos enviar tu mensaje, por favor inténtalo nevamente o inicia un chat de Whatsapp";
                }
            } catch (Exception $e) {
                $notSended .= "No pudimos enviar tu mensaje. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }else{
        $notSended .="No pudimos verificar que eres un humano";
    }
}
?>


<form id="cf" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <?php if (!empty($ok)) { ?>
        <p class="enviado"><i class="bi bi-check2-circle"></i> <?php echo $ok; ?></p>

    <?php } elseif (!empty($notSended)) { ?>
        <p class="fail"><?php echo $notSended; ?></p>
    <?php } ?>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="user_name" name="user_name" value="" placeholder="" onkeypress="return (event.charCode == 32 || event.charCode == 209 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" required>
        <label for="user_name"><i class="bi bi-person-circle"></i> Tu nombre...</label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="user_email" name="user_email" value="" placeholder="" required>
        <label for="user_email"><i class="bi bi-envelope-at"></i> Tu email...</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="user_tel" name="user_tel" value="" placeholder="" minlength="5" maxlength="15" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" required>
        <label for="user_tel"><i class="bi bi-telephone"></i> Teléfono de contacto</label>
    </div>
    <p class="tiny" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer;"><i class="bi bi-question-circle"></i> Cómo ingresar tu número</p>
    <div class="spacer"></div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="" id="user_mje" name="user_mje" required><?php //echo 'value';
                                                                                                ?></textarea>
        <label for="user_mje"><i class="bi bi-chat-left-text"></i> Comentanos tu inquietud</label>
    </div>

    <!--
        GOOGLE CAPTCHA. ANtes del submit colocamos el site-key html y agregamos la funcion validar() onclick:-->
    <div class="g-recaptcha" data-sitekey="your_site_key"></div>
    <input name="send" type="submit" class="cta cta-bg hover-shrink submit-btn" value="Enviar" onclick="validar_captcha()">

</form>


<script type="text/javascript">
    function validar_captcha() {
        //obtenemos respuesta del captcha
        if (grecaptcha.getResponse() == "") {
            alert("Marca la casilla de verificación por favor");
            return false;
        }
    }
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalLabel">Tu número:</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><b>Código regional</b> + número, sin 15, sin espacios ni guiones. Ej:<span style="color: green;"> 261<b>4123456</b></span></p>
                <p style="color: red;"><i class="bi bi-x-circle"></i> 261-4123456 ó 261 154 123456</p>
            </div>

        </div>
    </div>
</div>