<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';


$pdo = new PDO("mysql:host=$host;dbname=$database;", $username, $password);

$sql = "SELECT * FROM `Q1`;";

$res = $pdo->query($sql);

while($user = $res->FETCH(PDO::FETCH_ASSOC))
{
    print_r($user);
}


?>