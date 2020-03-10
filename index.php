<?php
require_once "prodotti.php";

$Interstellar = new Prodotti('AR230','Interstellar','Fantascienza');
$Interstellar->anno = '2018';
$Interstellar->prezzo = 30;
$Interstellar->secondaManoPercentuale = 20;
$Interstellar->scontoSecondaMano(30,20);

var_dump($Interstellar);
?>
