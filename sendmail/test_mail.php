<?php

$to = "tinkacabrel@gmail.com";
$subject = "Utilisation de mail() avec PHP depuis Windows";
$message = "Salut, comment ça va ?";

$headers = "Content-type: text/plain; charset=utf-8\r\n";
$headers = "From: hopitallogbaba@yahoo.com\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo 'Envoyé !';
}
else {
    echo 'Erreur envoi';
}