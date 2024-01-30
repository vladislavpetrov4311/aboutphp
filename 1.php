<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `new`.`new_id` , `id` , `test2` FROM `plane` INNER JOIN `mytest` ON (`id` = `test2`) RIGHT JOIN `new` ON (`id` = `new`.`new_id`)";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['new_id']."<br>";
    echo $row['id']."<br>";
    echo $row['test2']."<br>";
    echo "<br>";

}



?>


