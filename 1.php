<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `test` , (SELECT COUNT(`test`) FROM `mytest` WHERE `mytest`.`test` = `mytest2`.`test`) AS `result` FROM `mytest2`;";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['test']."<br>";
    echo $row['result']."<br>";
    echo "<br>";

}



?>


