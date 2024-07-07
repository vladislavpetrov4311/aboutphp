<?php

class multy_thread
{
    private $start_time = [];
    private $end_time = [];
    private $threads = [];

    public function start_thread($i)
    {
        $this->threads[$i] = new parallel\Runtime();
    }

    public function set_start_time()
    {
        array_push($this->start_time, microtime(true));
    }

    public function set_stop_time()
    {
        array_push($this->end_time, microtime(true));
    }

    public function stop_thread()
    {
        foreach($this->threads as $thread) {
            $thread->close();
            $this->set_stop_time();
        }
    }

    public function get_info_time()
    {
        $mas_res = [];
        for($i = 0; $i < count($this->end_time); $i++)
            {
        echo "Время выполнения на $i потокe: " . ($this->end_time[$i] - $this->start_time[$i]) . " секунд.\n";
        array_push($mas_res , ($this->end_time[$i] - $this->start_time[$i]));
        }

        echo ('Среднее время: '.array_sum($mas_res)/4);
    }

    public function get_load_cpu()
    {
        $cpuLoad = sys_getloadavg();
        return "Нагрузка на процессор: " . $cpuLoad[0] . " (1 минута), " . $cpuLoad[1] . " (5 минут)\n";
    }

    public function run()
    {
    for ($i = 1; $i <= 4; $i++) {
        $this->start_thread($i);
        $this->set_start_time();
        $this->threads[$i]->run(function() use ($i) {
            $file = fopen($i . ".txt", "r");
            if ($file && file_exists($i . ".txt")) {
                $line = fgets($file);
                sleep(3); //здесь имитация обработки заявки, которое занимает время
                fclose($file);
                echo "Data from file " . $i . ": " . $line . "\n";
            } else {
                echo "Error opening file " . $i . ".txt";
            }
        });
            }
    }
}