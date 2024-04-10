<?php

require_once "1_2.php";

class client implements visitor
{
    public function status_ticket()
    {
        return true;
    }
}


?>