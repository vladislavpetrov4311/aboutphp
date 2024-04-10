<?php
require_once "1.php";
require_once "1_1.php";

$client = new client();

$company_1 = new company_1();
//$company_2 = new company_2(); 


$company_1->check_status_ticket($client);
print_r($company_1->get_info());


?>