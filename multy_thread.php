<?php

require_once "class_multy.php";

$my_multy_thread = new multy_thread();

$my_multy_thread->run();
$my_multy_thread->stop_thread();

$my_multy_thread->get_info_time();
echo "\n".$my_multy_thread->get_load_cpu();