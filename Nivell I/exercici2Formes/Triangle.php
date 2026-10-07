<?php

require_once "Shape.php";

class Triangle extends Shape
{
    public function calcularArea(): float
    {
        $area = ($this->alt * $this->ample) / 2;
        return $area;
    }
}

?>
