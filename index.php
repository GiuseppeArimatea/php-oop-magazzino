
<?php
require_once __DIR__ . "/classes/videogiochi.php";
$callofduty = new Videogiochi("AR46B" , "Call of duty" );
var_dump($callofduty);

$fifa2020 = new Videogiochi("AR45B" , "Fifa2020" );
var_dump($fifa2020);
