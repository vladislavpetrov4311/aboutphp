<?php

class one_thread {

    private $thread;
    private $start_time;
    private $stop_time;

    public function set_start_time()
    {
        $this->start_time = microtime(true);
    }

    public function get_start_time()
    {
        return $this->start_time;
    }

    public function set_stop_time()
    {
        $this->stop_time = microtime(true);
    }

    public function get_stop_time()
    {
        return $this->stop_time;
    }

    public function start_thread()
    {
        $this->thread = new parallel\Runtime();
    }

    public function stop_thread()
    {
        $this->thread->close();
    }

    public function get_load_cpu()
    {
        $cpuLoad = sys_getloadavg();
        return "Нагрузка на процессор: " . $cpuLoad[0] . " (1 минута), " . $cpuLoad[1] . " (5 минут)\n";
    }
    
    public function run()
    {
        $this->start_thread();
        $this->set_start_time();

        // Запускаем один поток для чтения данных из всех 4 файлов
       $this->thread->run(function() {
       for ($i = 1; $i <= 4; $i++) {
        $file = fopen($i . ".txt", "r");
        if ($file && file_exists($i . ".txt")) {
            $line = fgets($file);
            sleep(3); //здесь имитация обработки заявки, которое занимает время
            fclose($file);
            echo "Data from file " . $i . ": " . $line . "\n";
        } else {
            echo "Error opening file " . $i . ".txt";
        }
            }
        });

        $this->stop_thread();
        $this->set_stop_time();
    }
}