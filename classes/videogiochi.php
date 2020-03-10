<?php
class Videogiochi
{
  public $codice;
  public $titolo;
  public $casaProduttrice;
  public $eta;
  public $genere;
  public $prezzo;
  public $scaffale;

  public function __construct($_codice, $_titolo)
  {
    $this->codice=$_codice;
    $this->titolo=$_titolo;
  }
}
?>
