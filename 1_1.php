<?php

interface command
{
    public function execute();
}

class ticket
{
    public function get_ticket()
    {
        return "билет куплен";
    }

    public function return_ticket()
    {
        return "билет сдан";
    }
}


?>