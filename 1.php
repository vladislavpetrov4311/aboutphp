<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `id`, `itog` , (`id`*`itog`) AS `new_volum` FROM `plane`;";

$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['itog']."<br>";
    echo $row['new_volum']."<br>";
    echo "<br>";

}



?>


