<?php
require_once "prodotti.php";

$Interstellar = new dvd('AR230','Interstellar','Fantascienza');

$Interstellar->anno = '2018';
$Interstellar->secondaManoPercentuale = 20;
$Interstellar->scontoSecondaMano();

var_dump($Interstellar);
?>
