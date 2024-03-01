<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';


$pdo = new PDO("mysql:host=$host;dbname=$database;", $username, $password);


$id = 4;
$tit = 'test4';
$body = 'test_body';

$sql = "UPDATE `Q1` SET `tittle` = :tit, `body` = :body WHERE `id` = :id;";

$in_db = $pdo->prepare($sql);

$in_db->execute([
    ':id' => $id,
    ':tit' => $tit,
    ':body' => $body
]);





$sql2 = "SELECT * FROM `Q1` WHERE `id` = :id;";
$res = $pdo->prepare($sql2);
$res->execute([
    ':id' => $id
]);
$user = $res->fetch(PDO::FETCH_ASSOC);
print_r($user);

?>