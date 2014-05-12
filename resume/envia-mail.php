<?php
$cabeceras = "Content-type: text/html\r\n";
$html = 'Motivo: ' . $_GET['subject'] . '<br />Nombre: ' . $_GET['name'] . '<br />E-mail: ' . $_GET['email'] . '<br />Mensaje:<br /><strong>' . $_GET['message'] . '</strong>';

mail ('kbzone.web@gmail.com', 'Contacto desde CV', $html, $cabeceras);

$arr['result'] = '<img src="layout/images/mail_check.png" /> ¡Gracias por contactarte! Te responderé a la brevedad.';

echo $_GET['callback']."(".json_encode($arr).");";