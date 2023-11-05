<?php

include_once('Kucing.php');
include_once('Harimau.php');
include_once('Kambing.php');

$object1 = new Kucing();

echo "Kucing :<br>";
$object1->berkomunikasi(); echo "<br>";
$object1->makan(); echo "<br><br>";

$object2 = new Harimau();

echo "Harimau :<br>";
$object2->berkomunikasi(); echo "<br>";
$object2->makan(); echo "<br><br>";

$object3 = new Kambing();

echo "Kambing : <br>";
$object3->berkomunikasi(); echo "<br>";
$object3->makan();