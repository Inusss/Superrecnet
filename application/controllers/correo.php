<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of correo
 *
 * @author marioeduardo
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


class correo extends CI_Controller{
    
//    public function enviar()
//    {
//        //Datos para el correo
//        $destinatario="apacan99@gmail.com";
//        $asunto="Contacto desde nuestra web";
//        
//        $carta="Prueba de envio de correos desde la web";
//        
//        //enviando mensaje
//        mail($destinatario,$asunto,$carta);
//        header($asunto);
//    }
    
    public function enviar() {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            //$mail->Host = 'smtp.gmail.com';                       // Set the SMTP server to send through
            //$mail->Host = 'mail.diatel.com.mx';                       // Set the SMTP server to send through
            $mail->Host ='superrecarga.com.mx';                       // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            //$mail->Username = 'registros@diatel.com.mx';                     // SMTP username
            $mail->Username = 'registro@superrecarga.com.mx';                     // SMTP username
            //$mail->Username = 'apacan99@gmail.com';                     // SMTP username
            //$mail->Username = 'norespondersuperrecargas@gmail.com';                     // SMTP username
            //apacan$mail->Password = 'akpzbktkhirkjrvs';                               // SMTP password
            //noresponder$mail->Password = 'zaznhekisdvtsgdb';                              // SMTP password
            //$mail->Password = '/4Rz1ORv6xg?';                              // SMTP password
            $mail->Password = 'nlI?Vf{ROl{}>armidas*';                              // SMTP password
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            //$mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //$mail->Port = 995;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //Recipients
            $mail->setFrom('registro@superrecarga.com.mx', 'Super Recarga');
            //$mail->addAddress('luisdrodiguezg@hotmail.com');     // Add a recipient
            $mail->addAddress('pruebassuperrecarga@gmail.com');     // Add a recipient
//            $mail->addAddress('ellen@example.com');               // Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

            // Attachments
            //Para archivos
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'S??PERRECARGA Confirmaci??n de Registro';
//            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            //$mail->Body = 'Correo de comprobaci??n';
            $mail->AddEmbeddedImage('static/instituciones/ALBERGUES-DE-MEXICO,-I.A.P..jpg', 'imagen-inst');
            $mail->AddEmbeddedImage('static/Logotipo-Super-Recarga-R.png', 'imagen-sr');
            $cuerpo='
                <html>
                    <head></head>
                    <body>
                        <label style="font-family: sans-serif; font-size: 14px">
                            Bienvenido al Registro S??PERRECARGA
                        </label>
                        <br>
                        <br>
                        <label style="font-family: sans-serif; font-size: 14px">
                            A partir de hoy vas a AHORRAR y APOYAR en todas tus recargas a: 
                        </label>
                        <br>
                        <br>
                        <img src="cid:imagen-inst" height="250px" width="250px">
                        <br>
                        <br>
                        <label style="font-family: sans-serif; font-size: 14px">
                            Tu contrase??a inicial es: rshgh 
                        </label>
                        <br>
                        <br>
                        <label style="font-family: sans-serif; font-size: 14px">
                            Para tu seguridad, el sistema te solicitar?? una nueva contrase??a en tu primer Login. 
                        </label>
                        <br>
                        <br>
                        <label style="font-family: sans-serif; font-size: 14px">
                            Atte 
                        </label>
                        <br>
                        <br>
                        <img src="cid:imagen-sr" height="150px" width="150px">
                    </body>
                </html>'
                    ;
            $mail->Body = $cuerpo;
            $mail->CharSet = 'UTF-8';
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'El mensaje se envi?? correctamente';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    
    public function enviar_pdf() {
        
//        $contenido="<html>";
//        $contenido.="<head>";
//        $contenido.="<style>";
//        $contenido.="</style>";
//        $contenido.="</head><body>";
//        $contenido.="<h1>Ejemplo de generacio PDF</h1>";
//        $contenido.="Almacena en una variable el contenido que se quiere incorporar</br></br>";
//        $contenido.="Ejemplo lista<br>";
//        $contenido.="<ul><li>Uno</li><li>Dos</li><li>Tres</li></ul>";
//        $contenido.="</body></html>";
        $fecha=date('Y-m-d');
        $hora=date('Y-m-d H:i:s');
        $contenido='<html><head></head><body>
            <style type="text/css">
            .ui-helper-center {
    text-align: center;
}
            </style>
            <div class="row">
                        <div class="col-xs-12" align="right">
                            <label style="font-family: sans-serif; font-size: 14px">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                CIUDAD DE MEXICO, Ciudad De Mexico a 20 de Junio de 2020 
                                <br>
                            </label>
                        </div>
                        <br>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Empresa (el Patr??n):
                                <br>
                                <br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="left" style="text-align: justify;">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Nubia Paola Montanez Martinez con CURP/RFC MOMN770815MDFNRB03 y n??mero de celular 5611281413
(el Deudor), por as?? convenir a mis intereses y, conforme a lo dispuesto por el art??culo 98 y 110 de la Ley
Federal del Trabajo y 2547, 2548, 2549, 2551 y 255 del C??digo Civil Federal, por este conducto, atento a la
relaci??n de trabajo que tengo con el Patr??n, le otorgo un mandato, para que en mi nombre y representaci??n y,
en forma consecutiva e ininterrumpida, realice: a) el descuento a mi salario de la cantidad de $100 pesos 00
/100 M.N. (en adelante, los ???Descuentos???), que se originaron a mi cargo:
<br>
<br>
                            </label>
                        </div>
                    </div>
                <div class="row" style="text-align: center;">
                <table class="table" style="width:100%" border="1">

                    <!-- thead START -->
                    <thead>

                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th class="ui-helper-center">Telefono celular</th>
                            <th class="ui-helper-center">Monto Recarga y Asistencia</th>
                        </tr>

                    </thead>
                    <!--thead END -->

                    <!--tbody START -->
                    <tbody>
                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th class="ui-helper-center">5611281413</th>
                            <th class="ui-helper-center">$100.00</th>
                        </tr>
                    </tbody>
                    <!--tbody END -->

                </table>
                <!-- table START -->

            </div>
            <div class="col-xs-12" style="text-align: justify;">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                                por la empresa DIATEL, S.A. DE C.V. (el ???Acreditante??? ), documentados y aceptados en los T??RMINOS Y
CONDICIONES de su APP denominada S??PER RECARGA; y, b) la entrega de los Descuentos mediante
descuento a mi n??mina dentro de un plazo que no exceder?? de la fecha en que reciba mi salario. El presente
mandato se otorga al Patr??n con el car??cter de irrevocable, en t??rminos del art??culo 2,596 del C??digo Civil
Federal, por ser un medio para cumplir la obligaci??n adquirida de pago contra??da por el Deudor; y s??lo podr??
revocarse conforme a los t??rminos establecidos en los T??RMINOS Y CONDICIONES ya mencionados. El
primer descuento para pago deber?? realizarse en el siguiente periodo de pago. Por lo tanto, a partir de esta fecha
iniciar??n las fechas de descuento y pago del servicio.
<br>
<br>
                            </label>
                        </div>
                        <div class="col-xs-12" style="text-align: justify;">
                            <label style="font-family: sans-serif; font-size: 14px">
En caso de que la relaci??n de trabajo entre el Deudor y el Patr??n se termine o rescinda por cualquier causa, y
siempre y cuando as?? lo indique el Deudor, el Patr??n realizar??, de igual forma y, en ejecuci??n del mandato, el
descuento al importe del finiquito o de la liquidaci??n a que tenga derecho, de la cantidad que, a esa fecha,
corresponda para efectos de extender el servicio.
<br>
<br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="center">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                                <b>El deudor</b> 
                                <br>
                                <br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="center">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                            ___________________________
                            </label>
                        </div>
                        <div class="col-xs-12" align="center">
                            <label style="font-family: sans-serif; font-size: 14px">
                            Nubia Paola Monta??ez Mart??nez
                            </label>
                        </div>
                        </body></html>';
        
        $dompdf = new Dompdf();
        
        $dompdf->loadHtml($contenido);
        //$dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $pdf = $dompdf->output();
        
        $rutaGuardado= base_url()."app/pdf/";
        $nombreArchivo="prueba.pdf";
        file_put_contents('static/pdf/prueba.pdf',$pdf);
        //$dompdf->stream(base_url()."app/pdf/" . $nombreArchivo);
        
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            //$mail->Host = 'smtp.gmail.com';                       // Set the SMTP server to send through
            $mail->Host = 'mail.diatel.com.mx';                       // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'noresponder@diatel.com.mx';                     // SMTP username
            //$mail->Password = 'akpzbktkhirkjrvs';                               // SMTP password
            //$mail->Password = ',#*}!q@EJ!V~';                               // SMTP password
            $mail->Password = 'W3eOg}[m25tC*';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //Recipients
            $mail->setFrom('noresponder@diatel.com.mx', 'Super Recarga');
            //$mail->addAddress('luisdrodiguezg@hotmail.com');     // Add a recipient
            $mail->addAddress('2016313107@uteq.edu.mx');     // Add a recipient
//            $mail->addAddress('ellen@example.com');               // Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

            // Attachments
            //Para archivos
            $mail->addAttachment('static/pdf/prueba.pdf');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Prueba de fecha 4';
//            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            //$mail->Body = 'Correo de comprobaci??n';
            $cuerpo='<html><head></head><body style="text-align: justify;">
                <div class="row">
                        <div class="col-xs-12" align="right">
                            <label style="font-family: sans-serif; font-size: 14px">
                                CIUDAD DE MEXICO, Ciudad De Mexico a 20 de Junio de 2020
                                <br>
                            </label>
                        </div>
                        <br>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Empresa (el Patr??n):
                                <br>
                                <br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Nubia Paola Montanez Martinez con CURP/RFC MOMN770815MDFNRB03 y n??mero de celular 5611281413
(el Deudor), por as?? convenir a mis intereses y, conforme a lo dispuesto por el art??culo 98 y 110 de la Ley
Federal del Trabajo y 2547, 2548, 2549, 2551 y 255 del C??digo Civil Federal, por este conducto, atento a la
relaci??n de trabajo que tengo con el Patr??n, le otorgo un mandato, para que en mi nombre y representaci??n y,
en forma consecutiva e ininterrumpida, realice: a) el descuento a mi salario de la cantidad de $100 pesos 00
/100 M.N. (en adelante, los ???Descuentos???), que se originaron a mi cargo:
<br>
<br>
                            </label>
                        </div>
                    </div>
                <div class="row">
                <table class="table" style="width:100%" border="1">

                    <!-- thead START -->
                    <thead>

                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th>Telefono celular</th>
                            <th>Monto Recarga y Asistencia</th>
                        </tr>

                    </thead>
                    <!--thead END -->

                    <!--tbody START -->
                    <tbody>
                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th>5611281413</th>
                            <th>$100.00</th>
                        </tr>
                    </tbody>
                    <!--tbody END -->

                </table>
                <!-- table START -->

            </div>
            <div class="col-xs-12">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                                por la empresa DIATEL, S.A. DE C.V. (el ???Acreditante??? ), documentados y aceptados en los T??RMINOS Y
CONDICIONES de su APP denominada S??PER RECARGA; y, b) la entrega de los Descuentos mediante
descuento a mi n??mina dentro de un plazo que no exceder?? de la fecha en que reciba mi salario. El presente
mandato se otorga al Patr??n con el car??cter de irrevocable, en t??rminos del art??culo 2,596 del C??digo Civil
Federal, por ser un medio para cumplir la obligaci??n adquirida de pago contra??da por el Deudor; y s??lo podr??
revocarse conforme a los t??rminos establecidos en los T??RMINOS Y CONDICIONES ya mencionados. El
primer descuento para pago deber?? realizarse en el siguiente periodo de pago. Por lo tanto, a partir de esta fecha
iniciar??n las fechas de descuento y pago del servicio.
<br>
<br>
                            </label>
                        </div>
                        <div class="col-xs-12">
                            <label style="font-family: sans-serif; font-size: 14px">
En caso de que la relaci??n de trabajo entre el Deudor y el Patr??n se termine o rescinda por cualquier causa, y
siempre y cuando as?? lo indique el Deudor, el Patr??n realizar??, de igual forma y, en ejecuci??n del mandato, el
descuento al importe del finiquito o de la liquidaci??n a que tenga derecho, de la cantidad que, a esa fecha,
corresponda para efectos de extender el servicio.
                            </label>
                        </div></body></html>';
            $mail->Body = $cuerpo;
            $mail->CharSet = 'UTF-8';
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'El mensaje se envi?? correctamente';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
