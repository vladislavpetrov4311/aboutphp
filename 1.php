<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `vpp` , `dlina` , `id` , `test2` FROM `plane` AS `P` INNER JOIN `mytest` AS `MT` ON (`P`.`id` = `MT`.`test2`);";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['vpp']."<br>";
    echo $row['dlina']."<br>";
    echo $row['id']."<br>";
    echo $row['test2']."<br>";
    echo "<br>";

}



?>


