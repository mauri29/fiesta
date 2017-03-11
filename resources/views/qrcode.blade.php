<?php

header('Content-Type: image/png');

require_once 'vendor/autoload.php';

$qr = new Endroid\QrCode\QrCode();

$qr->setText('fiesta.ngrok.io');
$qr->setSize(200);
$qr->setPadding(10);

$qr->render();