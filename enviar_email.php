<?php
$to = 'info@bdiversity.co.mz';
$cc = 'shelzer.tembe@bdiversity.co.mz';
$subject = $_POST['assunto'];
$message = $_POST['mensagem'];
$headers = 'From: ' . $_POST['email'] . "\r\n" .
    'Cc: ' . $cc . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>