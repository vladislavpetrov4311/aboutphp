<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `vpp` , `dlina` FROM `plane` WHERE `id` IN (SELECT `test`   
                                                           FROM `mytest`
                                                           WHERE `test` IN(
                                                            SELECT `test`
                                                            FROM `mytest2`
                                                            WHERE `mytest`.`test` = `mytest2`.`test`)
                                                           );";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['vpp']."<br>";
    echo $row['dlina']."<br>";
    echo "<br>";

}



?>


