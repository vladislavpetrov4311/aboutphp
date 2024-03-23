<?php
require_once "1.php";


$ship = new obj_ship();
$plane = new obj_plane();

$ship->get_obj()->get_price();
$ship->get_obj()->get_tur();

$plane->get_obj()->get_price();
$plane->get_obj()->get_info_plane();


?>