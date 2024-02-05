<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);

//представление - таблица, содержащая sql запрос
$sql = "CREATE VIEW `my_pred` AS 
                                SELECT `id` , `test1` , `test2` , `new2` FROM `new` INNER JOIN `plane` 
                                ON (`id` = `new2`) INNER JOIN `mytest` ON (`new2` = `test1` OR `new2`= `test2`);";

$res = mysqli_query($connect , $sql);

/*
while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['new_test']."<br>";
    echo "<br>";

}
*/


?>


