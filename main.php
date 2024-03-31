<?php
require_once "1.php";

$logistic = new logistic();
$hotel = new hotels();
$tur = new Facade_company($logistic , $hotel);

echo $tur->get_info_company1();



?>