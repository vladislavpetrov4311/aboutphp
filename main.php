<?php
require_once "1.php";
require_once "1_2.php";

$observer = new main_observer();
$company_1 = new company_1();
$company_2 = new company_2();

$get_tur = $company_1->gold_ticket_transaction();

$company_1->return_ticket($get_tur);

$get_tur2 = $company_1->standart_ticket_transaction();

$get_tur3 = $company_2->standart_ticket_transaction();


$sum1 = array_sum($company_1->get_all_salary());
echo "текущая прибыль company_1: ".$sum1."\n";

$sum2 = array_sum($company_2->get_all_salary());
echo "текущая прибыль company_2: ".$sum2."\n";

print_r($observer->get_updata($company_1));
print_r($observer->get_updata($company_2));


?>