<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


// FULL JOIN в mysql не поддерживается, но обойдём это, путём операции UNION 
$sql = "SELECT COUNT(`id`) AS `res`, `test2` FROM `plane` INNER JOIN `mytest`  ON `plane`.`id` = `mytest`.`test2` GROUP BY `id`;";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['res']."<br>";
    echo $row['test2']."<br>";
    echo "<br>";

}



?>


