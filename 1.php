<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `vpp` , `dlina` , `test2` FROM `plane` , `mytest` WHERE (`mytest`.`test2` = `plane`.`id`) AND NOT `vpp` IS NULL;";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['vpp']."<br>";
    echo $row['dlina']."<br>";
    echo "<br>";

}



?>


