<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `P`.`vpp`  FROM `plane` AS `P` INNER JOIN `plane` AS `P2` ON (`P`.`id` = `P2`.`id`) AND NOT `P`.`vpp` IS NULL;";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['vpp']."<br>";
    echo "<br>";

}



?>


