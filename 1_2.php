<?php 

interface visitor
{
    public function status_ticket();
}

interface tur_company
{
    public function check_status_ticket(visitor $client);
}


?>