<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';


$pdo = new PDO("mysql:host=$host;dbname=$database;", $username, $password);


$myid = '1';

$sql = "SELECT * FROM `Q1` WHERE `id` = :user;";

$res = $pdo->prepare($sql);

$res->execute([
    ':user' => $myid
]);


$user = $res->fetch(PDO::FETCH_ASSOC);
print_r($user);

?>