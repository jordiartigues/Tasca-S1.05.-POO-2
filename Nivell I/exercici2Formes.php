<?php

abstract class Shape
{
     //no son privat pq si ho fora sol la classe shape pot accedir directamnete a aquestes propietats
    //Però aqui triangle i rectangle tenen que accedir
    //per a la pròpia classe i les seves filles estan protegits
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
        //no és estrictament necessari però cream variables per guardar el resultat ahi i poder usar-lo després (per a aquest exercici creo que bastaria devolver amb el retorn)
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
 
//posem aqui l'echo pq les funciones nomes tornen resultat pero no el mostren com a l'ex. Animal
echo $triangle->calcularArea();
echo "\n";
echo $rectangle->calcularArea();

?>