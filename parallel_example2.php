<?php

use parallel\Runtime;

$start_time = [];
$end_time =[];
$threads = [];

// Создаем 4 потока для каждого из 4 файлов
for ($i = 1; $i <= 4; $i++) {
    $threads[$i] = new parallel\Runtime();
    array_push($start_time, microtime(true));
    $threads[$i]->run(function() use ($i) {
        $file = fopen($i . ".txt", "r");
        if ($file && file_exists($i . ".txt")) {
            $line = fgets($file);
            fclose($file);
            echo "Data from file " . $i . ": " . $line . "\n";
        } else {
            echo "Error opening file " . $i . ".txt";
        }
    });
}

// Ждем завершения всех потоков
foreach($threads as $thread) {
    $thread->close();
    array_push($end_time, microtime(true));
}


$mas_res = [];
for($i = 0; $i < count($end_time); $i++)
    {
        echo "Время выполнения на $i потокe: " . ($end_time[$i] - $start_time[$i]) . " секунд.\n";
        array_push($mas_res , ($end_time[$i] - $start_time[$i]));
    }

print_r('Среднее время: '.array_sum($mas_res)/4);


$cpuLoad = sys_getloadavg();
echo "\nНагрузка на процессор: " . $cpuLoad[0] . " (1 минута), " . $cpuLoad[1] . " (5 минут)\n";