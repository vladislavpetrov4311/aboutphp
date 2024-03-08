<?php

namespace A;
{

    class User
    {
        public $name;
        public function getname()
        {
            return $this->name;
        }
    }

}


namespace B;
{

    class User
    {
        public $status;
        public function getstatus()
        {
            return $this->status;
        }
    }

}


?>