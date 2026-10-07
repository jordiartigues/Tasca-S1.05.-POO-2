<?php

abstract class Shape
{

    protected float $ample;
    protected float $alt;

    public function __construct(float $ample, float $alt)
    {
        $this->alt = $alt;
        $this->ample = $ample;
    }


    abstract public function calcularArea(): float;
}

?>
