<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT AVG(`itog`) AS `result`, AVG(`id`) AS `result2` FROM `plane`;";

$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['result']."<br>";
    echo $row['result2']."<br>";
    echo "<br>";

}



?>


