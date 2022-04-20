<?php

/*---------------------------------
            Attribut 
----------------------------------*/ 
    class Vehicule{
        public $nomVehicule;
        public $nbrRoue;
        public $vitesse;
/*---------------------------------
            Constuctor
----------------------------------*/ 
        public function __construct($name, $nbr, $vit){
            $this->nomVehicule = $name;
            $this->nbrRoue = $nbr;
            $this->vitesse = $vit;
        }
/*---------------------------------
            Methodes 
----------------------------------*/ 
        public function demarrage() {
            echo ''.$this->nomVehicule.' a demarré';
        }
    };

?>