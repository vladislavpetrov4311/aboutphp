<?php

class controller 
{
    private $status_true;
    private $status_false;
    public function __construct(ticketTrue $ticket_true , ticketFalse $ticket_false)
    {
        $this->status_true = $ticket_true;
        $this->status_false = $ticket_false;
    }

    public function get_true()
    {
        return $this->status_true->execute();
    }

    public function get_false()
    {
        return $this->status_false->execute();
    }
}


?>