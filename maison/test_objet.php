<?php
    require './maison.php';

$maison = new Maison("villa", 12, 4, 2);
$maison-> surface();


$maison2 = new Maison("immeuble", 20,20,10);
$maison2->surface();

?>