<?php

class Animal {
    // $nom és una dada comuna a tots els animals.
// parlar() és un comportament que cada animal pot fer diferent.
// Per això no guardem el so en una propietat, sino que cada animal redefineix parlar().


  private string $nom;


  public function __construct (string $nom){
    $this->nom = $nom;
  }
  
  public function parlar(): void{

  }
}

class Ase extends Animal {

    public function parlar(): void{
        echo "Hi hooooo, hi ho.";
    }
}

class Gall extends Animal {
    
public function parlar(): void {
    echo "Kikirikiiiiiiiiiiii";
}
}

$ase = new Ase("Aselmo");
$gall = new Gall ("Galleda");

$ase->parlar();
echo "\n";
$gall->parlar();

?>