<?php
class Prodotti
{
  public $codice;
  public $titolo;
  public $genere;
  public $prezzo;
}

  class dvd extends Prodotti
  {
      public $anno;
  }
  class videogame extends Prodotti
  {
      public $casaeditrice;
  }
?>
