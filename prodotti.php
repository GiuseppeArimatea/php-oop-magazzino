<?php
require_once __DIR__ . "/trait/prezzo.php";

class Prodotti
{
  use Prezzo;
  public $codice;
  public $titolo;
  public $genere;
  public $secondaManoPercentuale;
  public $prezzoSecondaMano;
}

  function __construct($_codice, $_titolo, $_genere)
    {
    $this->codice = $_codice;
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    }


  public function scontoSecondaMano(){
     $this->$prezzoSecondaMano = $this->prezzo * $this->$secondaManoPercentuale / 100;
     return $this->$prezzoSecondaMano;
   }



  class dvd extends Prodotti
    {
        public $anno;
    }
?>
