<?php

class Animal
{
    // $nom és una dada comuna a tots els animals.
    // parlar() és un comportament que cada animal pot fer diferent.
    // Per això no guardem el so en una propietat, sino que cada animal redefineix parlar().


    private string $nom;

    //constructor s'executa cada vegada que cream un animal amb new
    //rep nom i o guarda a propietat $nom
    public function __construct(string $nom)
    {
        //this se refereix a lobjecte en concret que esteim creant amb new
        //guardam nom rebut dins $nom daquest objecte creat
        $this->nom = $nom;
    }
    //cream funcio parlar que la podria redefinir altres clases filles
    //pq no tots animals xerren lo pmatiex pero si q tots xerren  
    public function parlar(): void {}
}
//clase filla ase hereda propietats i metodes d'animal
class Ase extends Animal
{
    //aqui sobreescriu es metode d sa clas eanimal
    public function parlar(): void
    {
        echo "Hi hooooo, hi ho.";
    }
}

class Gall extends Animal
{

    public function parlar(): void
    {
        echo "Kikirikiiiiiiiiiiii";
    }
}
//cream objectes de cada clase filla
$ase = new Ase("Aselmo");
$gall = new Gall("Galleda");
//els feim xerrar, cada un utilitza sa seva versio d parlar
$ase->parlar();
echo "\n";
$gall->parlar();

?>