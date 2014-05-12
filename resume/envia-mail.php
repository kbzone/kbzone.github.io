<?php
$cabeceras = "Content-type: text/html\r\n";
$html = 'Motivo: ' . $_POST['subject'] . '<br />Nombre: ' . $_POST['name'] . '<br />E-mail: ' . $_POST['email'] . '<br />Mensaje:<br /><strong>' . $_POST['message'] . '</strong>';

mail ('kbzone.web@gmail.com', 'Contacto desde CV', $html, $cabeceras);

echo 'Gracias por contactarte! Te responderé a la brevedad.';