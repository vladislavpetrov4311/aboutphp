<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


// FULL JOIN в mysql не поддерживается, но обойдём это, путём операции UNION 
$sql = "SELECT `id` , `test2` FROM `plane` LEFT OUTER JOIN `mytest`  ON `plane`.`id` = `mytest`.`test2` UNION 
        SELECT `id` , `test2` FROM `plane` RIGHT OUTER JOIN `mytest`  ON `plane`.`id` = `mytest`.`test2`;";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['test2']."<br>";
    echo "<br>";

}



?>


