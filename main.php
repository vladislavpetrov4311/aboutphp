<?php

require_once "1.php";
require_once "1_1.php";
require_once "1_2.php";

$tur = new ticket();
$status_true = new ticketTrue($tur);
$status_false = new ticketFalse($tur);

$control = new controller($status_true , $status_false);
echo $control->get_true();



?>