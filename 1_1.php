<?php

interface Observer
{
    public function get_updata(tur_company $company);
}

interface tur_company
{
    public function attach($data);
    public function detach($data);
    public function notify();
}


?>