<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "CREATE VIEW `my_pred` AS SELECT CONCAT(`id` , ' ', `vpp`) AS `res` FROM `plane`;";

$res = mysqli_query($connect , $sql);

/*
while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['new2']."<br>";
    echo "<br>";

}
*/


?>


