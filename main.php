<?php

require_once "1.php";
require_once "1_2.php";

$ticket = new Ticket();
$intepret1 = new Varibl($ticket);
$intepret12 = new AndExp($ticket , $ticket);
$intepret13 = new OrExp($ticket , $ticket);

var_dump($intepret1->interpreter());
var_dump($intepret12->interpreter());
var_dump($intepret13->interpreter());


?>