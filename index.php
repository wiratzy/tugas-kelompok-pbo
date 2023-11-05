<?php

include_once('Kucing.php');
include_once('Harimau.php');

$object1 = new Kucing();

echo "kucing <br>";
$object1->berkomunikasi(); echo "<br>";
$object1->makan(); echo "<br>";

$object2 = new Harimau();

echo "Harimau <br>";
$object2->berkomunikasi(); echo "<br>";
$object2->makan(); echo "<br>";