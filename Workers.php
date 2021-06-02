<?php

require_once "Finder.php";

class Workers extends Finder
{
    protected static array $workers = [];

    public static function create_worker(array $worker)
    {
        date_default_timezone_set('Asia/Almaty');
        $worker["register_time"] = date('d-m-Y H:i', strtotime("now"));
        if (!(empty($worker))) {
            self::$workers[] = $worker;
        }
    }

    public static function count_workers()
    {
        return [
            "workers_count" => count(self::$workers),
            "all_workers" => self::$workers
        ];
    }

    public static function save_workers()
    {
        $fp = fopen("workers.txt", "w");
        foreach (self::$workers as $worker) {
            foreach ($worker as $key => $value) {
                fwrite($fp, $key . ": " . $value . "\n");
            }
            fwrite($fp, str_repeat("_", 40) . "\n");
        }
        fclose($fp);
    }
}


