<?php
require_once "1.php";

$tur = new simpl_tur_company();
printer($tur);

$tur2 = new tur_company1($tur);
printer($tur2);

$tur3 = new tur_company2($tur);
printer($tur3);


function printer($obj)
{
    $stars = $obj->get_level_hotel();
    $price = $obj->get_price();
    echo "уровень отеля $stars,"." "."цена за бронь $price\n";
}


?>