<?php 

$first_name="bmoha";
$last_name="dela3";

$fname_letter=str_split($first_name,1);
$lname_letter= str_split($last_name,1);
$image_letters=$fname_letter[0] . " " . $lname_letter[0];

 error_reporting(-1);
 ini_set('display_errors', 'On');
 // Charge le cachet et la photo afin d'y appliquer le tatouage numérique
 $im = imagecreatefromjpeg('images/test2.jpg');

 // Tout d'abord, nous créons un cachet manuellement grâce à GD
 $stamp = imagecreatetruecolor(200, 200);
 imagefilledrectangle($stamp, 0, 0, 200, 200, 0x3B598C);
 imagestring($stamp, 5, 70, 80, ucwords($image_letters), 0xFFFFFF);

 // Définit les marges du cachet et récupère la largeur et la hauteur du cachet

 header('Content-type: image/png');
$img_path="images/della3a.png";
 imagepng($stamp,$img_path);
 
 //$fp = fopen('images/example.png', 'rb');

 //$file_content = file_get_contents('images/array.png');

 //echo '<img class="sh-img" src="data:image/jpeg;base64,' . base64_encode($file_content) . '"/>';

 ?>