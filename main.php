<?php
require_once "1.php";

$obj = new cruiz();

$plane = clone $obj;
$plane->get_tur("перелёт через острова \n");
$plane->get_logistic("тур на ИЛ-76 \n");

$ship = clone $obj;
$ship->get_tur("отплыв через океан \n");
$ship->get_logistic("тур на яхте \n");

?>