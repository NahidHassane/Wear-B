<?php
use PhPMailer\PhPMailer\PhPMailer;
use PhPMailer\PhPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail=new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host ='smtp.gmail.com';
    $mail->SMTPAuth =true;
    $mail->Username='hassane.nahid99@gmail.com';
    $mail->Password='dzubrgwjzuhvjazm';
    $mail->SMTPSecure='ssl';
    $mail->Port =465;

    $mail->setFrom('hassane.nahid99@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject=$_POST["subject"];
    $mail->Body=$_POST["message"];

    $mail->send();

    echo 
    "
    <script>
    alert('Sent Successfully');
    document.location.href='contact.php';

    </script>
    ";

}
?>