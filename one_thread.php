<?php

require_once "class_one_thread.php";

$my_one_thread = new one_thread();

$my_one_thread->run();

echo "Время выполнения на одном потоке: " . ($my_one_thread->get_stop_time() - $my_one_thread->get_start_time()) . " секунд.\n";
echo $my_one_thread->get_load_cpu();