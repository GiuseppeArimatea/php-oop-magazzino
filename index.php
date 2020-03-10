<?php
require_once __DIR__ . '/classes/prodotti.php';

$Interstellar = new dvd();


$Interstellar->anno = '2018';
$Interstellar->codice = 'AR230';
$Interstellar->titolo = 'Interstellar';
$Interstellar->genere = 'fantascienza';
$Interstellar->prezzo = 30;

var_dump($Interstellar);
?>
