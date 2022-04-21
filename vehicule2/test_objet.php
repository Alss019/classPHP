<?php
    //import de la classe
    include './vehicule.php';
    //instancier les véhicules
    $voiture = new Vehicule("Mercedes CLK", 4, 250);
    $moto = new Vehicule("Honda CBR", 2, 280);
    //detecter le type des véhicules
    echo 'Le '.$voiture->getNomVehicule().' est de type : '.$voiture->detect().'<br>';
    echo 'Le '.$moto->getNomVehicule().' est de type : '.$moto->detect().'</br>';
    //appliquer le boost aux 2 véhicules
    $voiture->boost(100);
    $moto->boost(150);
    //détecter le véhicule le plus rapide
    echo 'le véhicule le plus rapide est : '.$voiture->plusRapide($moto).'</br>';
    echo 'le véhicule le plus rapide est : '.$moto->plusRapide($voiture).'</br>';
?>