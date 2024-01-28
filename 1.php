<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `vpp` FROM `plane` WHERE `id` IN (SELECT `test` FROM `mytest`);";

$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['vpp']."<br>";
    echo "<br>";

}



?>


