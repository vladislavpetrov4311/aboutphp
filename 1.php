<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT COUNT(`id`) AS `result` FROM `plane` GROUP BY `id` ORDER BY `result`;";

$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['result']."<br>";
    echo "<br>";

}



?>


