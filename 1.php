<?php

interface company
{
    public function about_functions_company(): string;
}

//листовые классы
class level_hotal_in_company1 implements company
{
    public function about_functions_company(): string
    {
        return "компания работает с отелями с 4 звездами\n";
    }
}


class level_hotal_in_company2 implements company
{
    public function about_functions_company(): string
    {
        return "компания работает с отелями с 5 звездами\n";
    }
}

class logistic_hotal_in_company1 implements company
{
    public function about_functions_company(): string
    {
        return "компания производит туры на самолёте\n";
    }
}

class logistic_hotal_in_company2 implements company
{
    public function about_functions_company(): string
    {
        return "компания производит туры на корабле\n";
    }
}



?>