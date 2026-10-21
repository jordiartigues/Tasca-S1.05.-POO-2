<?php

require_once "Animal.php";

class Gall extends Animal
{

    public function parlar(): void
    {
        echo $this->getNom() . " diu: Kikirikiiiiiiiiiiii";
    }
}

?>
