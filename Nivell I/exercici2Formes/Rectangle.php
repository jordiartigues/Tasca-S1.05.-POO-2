<?php

require_once "Shape.php";

class Rectangle extends Shape
{
    public function calcularArea(): float
    {

        $area = $this->alt * $this->ample;
        return $area;
    }
}

?>