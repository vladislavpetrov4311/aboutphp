<?php

require "1.php";

use A\User;
use B\User as User2;

$admin = new User();
$admin->name="admin";
echo $admin->getname();

$admin2 = new User2();
$admin2->status="root";
echo $admin2->getstatus();



?>