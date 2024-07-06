<?php

use parallel\Runtime;

$thread = new parallel\Runtime();
$start = microtime(true);

// Запускаем один поток для чтения данных из всех 4 файлов
$thread->run(function() {
    for ($i = 1; $i <= 4; $i++) {
        $file = fopen($i . ".txt", "r");
        if ($file && file_exists($i . ".txt")) {
            $line = fgets($file);
            fclose($file);
            echo "Data from file " . $i . ": " . $line . "\n";
        } else {
            echo "Error opening file " . $i . ".txt";
        }
    }
});

$thread->close();
$end = microtime(true);

$cpuLoad = sys_getloadavg();

echo "Время выполнения на одном потоке: " . ($end - $start) . " секунд.\n";
echo "Нагрузка на процессор: " . $cpuLoad[0] . " (1 минута), " . $cpuLoad[1] . " (5 минут)\n";