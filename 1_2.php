<?php 

require_once "1_1.php";

class Ticket
{
    public function get_status($data): bool
    {
        $status = 100;
        if($data < $status)
            return false;
        else
            return true;
    }

    public function get_volume($data): bool
    {
        $standart = 2;
        if($data < $standart)
            return false;
        else
            return true;
    }

    
}


?>