<?php

require_once ('figuur.class.php');
require_once ('cilinder.class.php');
require_once ('vierkant.class.php');
require_once ('mijntelefoon.class.php');
require_once ('mijnblad.class.php');



$vierkant = new vierkant(5,5);
$cilinder = new cilinder(10,3);
$mijn_telefoon = new mijntelefoon(11,7);
$mijn_blad = new mijnblad(29,21);

echo $vierkant->oppervlakteBerekenen();
"<br>";
echo $cilinder->oppervlakteBerekenen();
"<br>";
echo $mijn_telefoon->oppervlakteBerekenen();
"<br>";
echo $mijn_blad->oppervlakteBerekenen();

?>
