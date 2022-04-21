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

        public function detect(){
            if($this->nbrRoue <= 2){
                echo "Le vehicule est une Moto";
            }
            else{
                echo "Le véhicule est une  voiture";
            }
        }
        public function boost(){
            $boost = ($this->vitesse + 50);
            echo '<p>La vitesse du vehicule booster est : '.$boost.' </p>';
        }
        public function plusRapide($a){
            if($this->vitesse > $a->vitesse){
                echo'Le plus rapide est '.$this->nomVehicule.'';
            }
            else{
                echo 'Le plus rapide est '.$a->nomVehicule.'';
            }
        }
    };

?>