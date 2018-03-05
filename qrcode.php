<?php

header('Content-Type: image/png');
require_once 'vendor/autoload.php';

if(isset($_GET['text']))
{
  // set size and padding values, we want to replace this size variable value if the size and padding values are included in the get request, if not use default value
  $size= isset($_GET['size']) ? $_GET['size'] : 200;
  $padding=isset($_GET['padding']) ? $_GET['padding'] : 50;
  $qr = new Endroid\QrCode\QrCode();
  // set the text for this QR code
  $qr->setText($_GET['text']);
  $qr->setSize($size);
  $qr->setPadding($padding);

  // render the qr image
  $qr->render();
}









 ?>
