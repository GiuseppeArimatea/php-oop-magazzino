<?php
require_once __DIR__ . "/trait/prezzo.php";

class Prodotti
{
  public $prezzo;
  public $codice;
  public $titolo;
  public $genere;
  public $secondaManoPercentuale;
  public $prezzoSecondaMano;

  function __construct($_codice, $_titolo, $_genere)
    {
    $this->codice = $_codice;
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    }


  function scontoSecondaMano($_prezzo, $_percentualeSconto){
     return $this->prezzoSecondaMano = $_prezzo -(($_prezzo * $_percentualeSconto) / 100);
   }
 }


  class dvd extends Prodotti
    {
        public $anno;
    }
?>
