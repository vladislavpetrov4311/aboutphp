<?php
require_once "1_2.php";
require_once "1_1.php";

$plane = new strategy_plane();
$ship = new strategy_ship();

$my_strategy = new get_strategy($plane);
$my_strategy->run_get_price();
$my_strategy->run_get_tur();


?>