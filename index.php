<?php


include_once('./vendor/autoload.php');


$url = 'https://github.com/anadcruz';


echo "<h2>Gerar QRCode da URL: $url</h2>";


$qrcode = (new \chillerlan\QRCode\QRCode())->render($url);



echo "<img src='$qrcode'>";