<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';


$pdo = new PDO("mysql:host=$host;dbname=$database;", $username, $password);


$id = 4;
$tit = 'test4';
$body = 'test_body';

$sql = "DELETE FROM `Q1` WHERE `id` = :id;";

$in_db = $pdo->prepare($sql);

$in_db->execute([
    ':id' => $id
]);





$sql2 = "SELECT * FROM `Q1`;";
$res = $pdo->prepare($sql2);
$res->execute();

$user = $res->fetchAll(PDO::FETCH_ASSOC);
print_r($user);

?>