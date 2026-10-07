<?php

abstract class Shape
{
    //no son private pq si lo fuera solo la clase shape puede acceder directamnete a esas propiedades
    //pero aqui triangle y rectangle tienen que acceder
    //para la propia clase y sus hijas es protected
    protected float $ample;
    protected float $alt;

    public function __construct(float $ample, float $alt)
    {
        $this->alt = $alt;
        $this->ample = $ample;
    }

    // Shape és abstracta perquè no volem crear objectes Shape directament.
    // Serveix com a classe base per a les altres figures.
    // Abstract obliga les classes filles a implementar calcularArea().
    // No posem claus perquè Shape no sap com calcular l'àrea.
    // Cada figura ho farà de manera diferent.
    abstract public function calcularArea(): float;
}

class Triangle extends Shape
{
    public function calcularArea(): float
    {
        //no es estrictamente necesario pero creamos variable para guardar resultado ahi y poder usarlo despues (para este ejercicio creo que bastaria devolver con el return)
        $area = ($this->alt * $this->ample) / 2;
        return $area;
    }
}

class Rectangle extends Shape
{
    public function calcularArea(): float
    {

        $area = $this->alt * $this->ample;
        return $area;
    }
}

$triangle = new Triangle(7, 29);
$rectangle = new Rectangle(10, 41);
//ponemos aqui el echo porque las funciones solo devuelven el resultado pero no lo muestran como en el ej.Animal 
echo $triangle->calcularArea();
echo "\n";
echo $rectangle->calcularArea();

?>