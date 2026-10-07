<?php

require_once "Ase.php";
require_once "Gall.php";

$ase = new Ase("Aselmo");
$gall = new Gall("Galleda");

$ase->parlar();
echo "\n";
$gall->parlar();

?>