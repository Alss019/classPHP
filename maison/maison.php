<?php

class Maison{
    public $nom;
    public $longueur;
    public $largeur;
    public $etage;

    public function __construct($name, $long, $larg, $etage){
        $this->nom = $name;
        $this->longueur = $long;
        $this->largeur = $larg;
        $this -> nbrEtage = $etage;
        }

    public function surface():void{
    $surface = ($this->longueur * $this->largeur) * $this->nbrEtage; 
    echo '<p>la surface de '.$this->nom.' est égale à : '.$surface.'  m2</p>';
    }
}
?>