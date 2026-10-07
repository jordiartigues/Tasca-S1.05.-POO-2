<?php

require_once "Triangle.php";
require_once "Rectangle.php";

$triangle = new Triangle(7, 29);
$rectangle = new Rectangle(10, 41);

echo $triangle->calcularArea();
echo "\n";
echo $rectangle->calcularArea();

?>
