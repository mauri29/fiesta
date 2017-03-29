<?php

header('Content-Type: image/png');

require_once 'vendor/autoload.php';


	$qr = new Endroid\QrCode\QrCode();

	$qr->setText('https://www.superfiesta.ch/post/Colombiana300mL');
	$qr->setSize(200);
	$qr->setPadding(100);

	$qr->render();

