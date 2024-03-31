<?php
require_once "1.php";
require_once "1_1.php";

$hotel = new level_hotal_in_company1();
$logistic = new logistic_hotal_in_company1();

$company = new cruiz();
$company->add_list_company($hotel);
$company->add_list_company($logistic);


echo $company->about_functions_company();



?>