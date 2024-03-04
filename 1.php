<?php

class Shop
{

private $name;

public function getname()
{

    $this->name = "Vlad";
    echo $this->name;

}

}

$main = new Shop();

$main->getname();


?>