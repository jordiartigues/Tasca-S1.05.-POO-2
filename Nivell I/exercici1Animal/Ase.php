<?php

require_once "Animal.php";

class Ase extends Animal
{
    public function parlar(): void
    {
        echo $this->getNom() . " diu: Hi hooooo, hi ho.";
    }
}

?>
