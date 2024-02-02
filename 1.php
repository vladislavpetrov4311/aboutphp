<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "UPDATE `plane` SET `itog` = 45 WHERE `id` = 76;";

$res = mysqli_query($connect , $sql);

/*
while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['new_test']."<br>";
    echo "<br>";

}
*/


?>


