<?php
    require './vehicule.php';
    $voiture = new Vehicule("Mercedes CLK", 4 , 250);
    $moto = new Vehicule("Honda CBR" , 2, 280);

    $moto->detect();
    echo"<br>";
    $voiture->detect();
    echo"<br>";
    $moto->boost();
    echo"<br>";
    $voiture->boost();
    echo"<br>";
    $moto->plusRapide($voiture);

?>