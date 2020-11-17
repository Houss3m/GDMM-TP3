<?php
 # souvent j'utilise les deux fonctions pour afficher les erreurs
 error_reporting(-1);
 ini_set('display_errors', 'On');

 # choisir le type de header pour l'affichage d'une image png
 header("Content-type: image/png");
 //$string = $_GET['text'];
 # je veux ecrire un text sur une image

  $string ="GSI master";
 # créer une image à partir d'une image png
 $im = imagecreatefrompng("images/example.png");
 # choisir une couleur en RGB pour le text
 $orange = imagecolorallocate($im, 220, 210, 60);
 # calculer la position x pour le text en fonction de sa longueur
 $px = (imagesx($im) - 7.5 * strlen($string)) / 2;
 # ecrire le text sur l'image avec une couleur.
 imagestring($im, 3, $px, 9, $string, $orange);
 # créer l'image
 imagepng($im);
 # libérer la variable
 imagedestroy($im);
 ?>
