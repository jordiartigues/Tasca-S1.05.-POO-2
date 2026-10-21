<?php

abstract class Animal
{

    protected string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
    public function getNom(): string
    {
        return $this->nom;
    }

    abstract public function parlar(): void;
}
