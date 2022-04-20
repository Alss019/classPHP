<?php
    require './class.php';
    // $voiture = new Vehicule();
    // $voiture -> nomVehicule = "Audi";
    // $voiture -> nbrRoue = 4;
    // $voiture -> vitesse = 250;
    // var_dump ($voiture);
    echo '<br>';
    // echo $voiture->nomVehicule;
    echo '<br>';
    
    
    // $moto = new Vehicule();
    // var_dump ($moto);
    
    // echo '<br>';
    // echo '<br>';
    
    // $camion = new Vehicule();
    // var_dump ($camion);
    
    $voiture2 = new Vehicule("BMW" , 4, 300);
    var_dump ($voiture2);
    echo $voiture2->nomVehicule;
    echo '<br>';
    echo $voiture2 ->demarrage();
?>