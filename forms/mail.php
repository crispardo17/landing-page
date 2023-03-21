<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/Exception.php';
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';

    //Load Composer's autoloader
    // require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'ssl://smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'TECNOLOGIAGOPASS2022@GMAIL.COM';                     //SMTP username
        $mail->Password   = 'ofaozcmfyytjibyd';                              //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;    
        $mail->CharSet = 'UTF-8';
        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->setFrom('TECNOLOGIAGOPASS2022@GMAIL.COM', 'CONGRESO GOPASS'); //Correo de origin                
        $mail->addAddress('solicitudes@gopass.com', $_REQUEST['nombre']); //Correo destino
        
   
    //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Contacto por Web Gopass congreso " ; //Asunto del correo
        $body="Solicita informacion por medio del formulario de la pagina de Gopass Gopass.com.co, contestar a:".$_REQUEST['email']."";
        $mail->Body = $body . "</ul>";
        $mail->send();
        $resultado2 = 1;
        return $resultado2;

    }catch(Exception $e) {

        if(isset($response)){
            $error = "Error al enviar correo electronico al cliente";
            $response = ["response" => 0, "message"=> $error];
            print_r(json_encode($response));die;
        }else{
            echo "Error al enviar: $mail->ErrorInfo";
            
        }
    }