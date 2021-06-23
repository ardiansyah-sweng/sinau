<?php
set_time_limit(10000);
$time_consume = 0;
for ($j = 0; $j<=1000-1; $j++){
    //echo 'Iterasi: '.$j. ' ';

    //Traditional increment
    $start = microtime(true);
    $counter = 0;
    for ($i = 0; $i <= 1000 - 1; $i++) {
        $counter += $i;
    }
    $finish = microtime(true);
    $time = $finish - $start;
    $time_consume += $time;
    // echo $counter . ' ' . $time .' Memory: '.memory_get_usage();
    echo $time;
    echo '<br>';
    
    //Array increment
    // $start = microtime(true);
    // for ($i = 0; $i <= 1000 - 1; $i++) {
    //     $cacah[] = $i;
    // }
    // $finish = microtime(true);
    // $time = $finish - $start;
    // $times[] = $time;
    // // echo array_sum($cacah) . ' ' . $time .' Memory: '.memory_get_usage();
    // echo $time;
    // $cacah = [];
    // echo '<br>';
}


