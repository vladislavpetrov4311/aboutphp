<?php
require_once "1_1.php";


$obj = new Factory_Method();

$obj->buy_ticket_ship()->go();
echo "\n";
$obj->buy_ticket_plane()->go();


?>