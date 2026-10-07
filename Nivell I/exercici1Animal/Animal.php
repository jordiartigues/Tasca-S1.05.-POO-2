<?php

class Animal
{

    private string $nom;


    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
    public function parlar(): void {}
}

?>
