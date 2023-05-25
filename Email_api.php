<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST["done"])){
    $Priority = $_POST["Priority"];
    $name = $_POST["ID"];
    $email = $_POST["Email"];
    $subject = $_POST["ReceivedDate"];
    $Description = $_POST["Description"];

    $mail = new PHPMailer(true);

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;    

    $mail->Username = "arrowphoto11922212mrinalkanti@gmail.com";
    $mail->Password = "lldzeqksqorvrgzn";
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('arrowphoto11922212mrinalkanti@gmail.com');
    $mail->addAddress($email);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $Description;

    $mail->send();

    echo
    "
    <script>
    alert('send mail');
    </script>
    ";

}
header('location:Recipient.php');

?>