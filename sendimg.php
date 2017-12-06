<?php

if (isset($_POST['pixelcanvas'])) {
  $pixelcanvas = json_decode($_POST['pixelcanvas']);

  $image = imagecreate(8, 4);

  for ($i = 0; $i < 4; $i++) {
    for ($ii = 0; $ii < 8; $ii++) {
      $counter = $ii + (8 * $i);
      list($r, $g, $b) = sscanf($pixelcanvas[$counter], "#%02x%02x%02x");
      $color = imagecolorallocate($image, $r, $g, $b);
      imagesetpixel($image, $ii, $i, $color);
    }
  }

  $file = 'id.txt';
  $handle = fopen($file, 'r');
  $id = fread($handle,filesize($file));
  $newid = $id + 1;
  $handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
  fwrite($handle, $newid);

  header( "Content-type: image/png" );
  $directory = "img/" . sprintf('%06d', $newid) . ".png";
  chmod($directory, 0755);
  imagepng($image, $directory, 0, null);
  imagedestroy($image);

}

?>
