<?php
    class Vehicule{
        /*------------------------------- 
                    ATTRIBUTS
        -------------------------------*/
        private $nomVehicule;
        private $nbrRoue;
        private $vitesse;
        /*------------------------------- 
                    CONSTRUCTEUR
        -------------------------------*/
        public function __construct($nom, $nbr, $vit){
            $this->nomVehicule = $nom;
            $this->nbrRoue = $nbr;
            $this->vitesse = $vit;
        }
        /*------------------------------- 
                    METHODES
        -------------------------------*/
        public function getNomVehicule()
        {
        return $this->nomVehicule;
        }
        public function getNbrRoue()
        {
        return $this->nbrRoue;
        }
        public function getVitesse()
        {
        return $this->vitesse;
        }
        //méthode qui retourne le type de véhicule
        public function detect():string{
            if($this->getNbrRoue() == 4){
                return "voiture";
            }
            else if($this->getNbrRoue() == 2){
                return "moto";
            }
            else{
                return "autre";
            }
        }
        //augmenter la vitesse du véhicule courant
        public function boost($boost):void{
            $this->vitesse += $boost;
        }
        //detecter le véhicule le plus rapide
        public function plusRapide($vehicule):string{
            if($this->getVitesse() > $vehicule->vitesse){
                return 'Le plus rapide est : '.$this->nomVehicule.'';
            }
            else if($this->getVitesse() == $vehicule->vitesse){
                return 'Les véhicules ont la même vitese !!!';
            }
            else{
                return 'Le plus rapide est : '.$vehicule->nomVehicule.'';
            }
        }
    }
?>