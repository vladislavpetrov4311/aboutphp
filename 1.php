<?php

require_once "1_1.php";

class Varibl implements Expression
{

    public function __construct(private Ticket $ticket)
    {}

    public function interpreter() //хотим проверить на соответствие
    {
        return $this->ticket->get_status(200);
    }
}

class AndExp implements Expression 
{
    public function __construct(private Ticket $first , private Ticket $second)
    {}

    public function interpreter() // хотим проверить на сложное ограничение (статус билета и кол-во посетитель для него)
    {
        return $this->first->get_status(200) && $this->second->get_volume(1);
    }
}


class OrExp implements Expression 
{
    public function __construct(private Ticket $first , private Ticket $second)
    {}
    
    public function interpreter() // хотим проверить на облегченное ограничение (статус билета или кол-во посетитель для него)
    {
        return $this->first->get_status(200) || $this->second->get_volume(3);
    }
}


?>